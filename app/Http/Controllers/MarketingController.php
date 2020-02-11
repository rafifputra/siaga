<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
Use Redirect;
// use App\Http\Controllers\Controller;
// use Illuminate\Support\Collection;
use App\TSalesActivities;
use App\TSalesActivityDetail;

class MarketingController extends Controller
{
    // -----------------------------------------------------------------------------------//
    // -----------------------------------------------------------------------------------//
	// -----------------------------------------------------------------------------------//
    // MARKETING CONTROLLER SALES ACTIVITY //
	public function salesActivities(Request $request){ // load awal

        $t_sales_activities =  DB::table('vw_sales_activities')
                              ->paginate(10);

        return view('sales-activities',['t_sales_activities'=>$t_sales_activities] );            
	}

    public function salesAddEdit($id){

        $t_sales_activity = DB::table('vw_sales_activities')
                                   ->where('id', '=', $id)
                                   ->first();

        $t_sales_activity_details = DB::table('t_sales_activity_details as a')
                                   ->join('t_sales_activities as b', 'b.code','=','a.t_sales_activity_id')
                                   ->select('a.*')
                                   ->where('b.id', '=', $id)
                                   ->orderby('a.id', '=', 'desc')
                                   ->get();

        $codenya = $t_sales_activity->code;                                  
                                
        $persentase = DB::select('SELECT * FROM t_sales_activity_details WHERE t_sales_activity_id=?  ORDER BY id DESC LIMIT 1', [$codenya]);         
        foreach ($persentase as $user) {            
            $prm = $user->activity;
        }                        
       
        if($prm =="Inquiry"){
            $hslpersen = "10";
        } 
        else if($prm=="Negotation"){
            $hslpersen = "20";
        } 
         else if($prm=="Next Negotation"){
            $hslpersen = "40";
        } 
        else if($prm=="Making Quotation"){
            $hslpersen = "60";
        } 
         else if($prm=="Presentation"){
            $hslpersen = "80";
        }   
         else if($prm=="Sales Calling"){
            $hslpersen = "100";
        }                                                  

        return view('sales-activities-edit', ['t_sales_activity'=>$t_sales_activity, 't_sales_activity_details' => $t_sales_activity_details, 'hslpersen' => $hslpersen] );
        
    }

    // -----------------------------------------------------------------------------------//
    // -----------------------------------------------------------------------------------//
    // -----------------------------------------------------------------------------------//
    // MARKETING CONTROLLER MODAL POP UP //
	public function salesActivitiesAddView(){ // jika new data master

        $t_sales_activity = DB::table('t_sales_activities')
                                   ->where('code', '=', '11')
                                   ->first();

        $t_sales_activity_details = DB::table('t_sales_activity_details')
                                   ->where('t_sales_activity_id', '=', '11')
                                   ->get();	

        $table      = "t_sales_activities";
        $primary    = "code";
        $prefix     = "SA/";        

        $q=DB::table($table)->select(DB::raw('MAX(RIGHT('.$primary.',5)) as kd_max'));
        $prx=$prefix.date("Y/m");
        if($q->count()>0)
        {
            foreach($q->get() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = $prx."/".sprintf("%06s", $tmp);
            }
        }
        else
        {
            $kd = $prx."/"."000001";
        }

        $kodenya    = $kd;
                           
        return view('sales-activities-add',['t_sales_activity'=>$t_sales_activity, 't_sales_activity_details' => $t_sales_activity_details, 'kodenya' => $kodenya] );
	
    }
                    
	public function salesActivitiesAddModal(Request $request){ // Simpan Awal

        $this->validate($request,[
            'code' => 'required',
            'sales' => 'required',
            'customer' => 'required',
            'ship' => 'required',
            'slipway' => 'required',
            'date' => 'required',
            'estdockingdate' => 'required',
            'exprevenue' => 'required'
        ]);

        DB::table('t_sales_activities')->insert([ // master
            'code' => $request->code,
            'm_employee_id' => $request->sales,
            'm_branch_id' => $request->branch,
            'm_customer_id' => $request->customer,
            'm_ship_id' => $request->ship,
            'm_slipway_id' => $request->slipway,
            'date' => $request->date,
            'est_docking_date' => $request->estdockingdate,
            'exp_revenue' => $request->exprevenue
        ]);

        $tags = $request->input('participants');

        DB::table('t_sales_activity_details')->insert([  // detail
            't_sales_activity_id' => $request->code,
            'date'                => $request->date2,
            'activity'            => $request->activity,
            'method'              => $request->method,
            'participants'        => implode(',', $tags),
            'mom'                 => $request->mom
        ]);                     
        
        return redirect('/sales-activities')->with('message', 'data saved successfully');;        

	}

    public function salesActivitiesAddModalEdit(Request $request){

        $tags = $request->input('participants');

        DB::table('t_sales_activity_details')->insert([  // detail
            't_sales_activity_id' => $request->code,
            'date'                => $request->date2,
            'activity'            => $request->activity,
            'method'              => $request->method,
            'participants'        => implode(',', $tags),
            'mom'                 => $request->mom
        ]);                     
          
        return Redirect::back();     

    }

    public function salesActivitiesAddDelete($id){

        DB::delete(' delete from t_sales_activity_details where id = ?',[$id]);

        return Redirect::back();

    }

    public function salesActivitiesAddDeleteALL($id){

        $t_sales_activity = DB::table('t_sales_activities as a')
                                   ->where('a.id', '=', $id)
                                   ->first();

        $iddetail = $t_sales_activity->code;                            

        DB::delete('delete from t_sales_activity_details where t_sales_activity_id = ?',[$iddetail]);

        DB::delete('delete from t_sales_activities where id = ?',[$id]);
        
        return Redirect::back();

    }

    public function editSales($id)
    {
       $saledet= TSalesActivityDetail::findOrFail($id);
       
       return view('sales-activities-detail-edit', compact('saledet'));
    }

    public function updateDetailSales(Request $request){
        
        $tags = $request->input('tagSelect');

        DB::table('t_sales_activity_details')
            ->where('id', '=', $request->id)
            ->update(['date' => $request->date3,
                        'activity' => $request->activity,
                        'method' => $request->method,
                        'participants' => implode(',', $tags),
                        'mom' => $request->mom
                    ]);

         return Redirect::back();
        
    }

    public function search(Request $request){

        $cari = $request->caridata;
        $t_sales_activities = DB::table('vw_sales_activities')
                    ->where('customer_name', 'ILIKE', '%'.$cari.'%')
                    ->orWhere('sales_name', 'ILIKE', '%'.$cari.'%')
                    ->paginate(); 

        return view('sales-activities', compact('t_sales_activities'));
    }


    // -----------------------------------------------------------------------------------//
    // -----------------------------------------------------------------------------------//
    // -----------------------------------------------------------------------------------//
    // SELECT2 DATA //
	public function caricustomer(Request $request){

        $cari = $request->cari;
        $data = DB::table('m_customers')
        ->select('id','name')
        ->where('name', 'ILIKE', "%".$cari."%")
        ->get();
         
        return response()->json($data);
	}

    public function carikapal(Request $request){

        $cari = $request->cari;
        $data = DB::table('m_ships')
        ->select('id', 'name')
        ->where('name','ILIKE', "%".$cari."%")
        ->get();

        return response()->json($data);
    }

    public function carislipway(Request $request){

        $cari = $request->cari;
        $data = DB::table('m_slipways')
        ->select('id', 'name')
        ->where('name','ILIKE', "%".$cari."%")
        ->get();

        return response()->json($data);
    }

    public function caritipeslipway(Request $request){

        $cari = $request->cari;
        $data = DB::table('m_slipway_types')
        ->select('id', 'name')
        ->where('name','ILIKE', "%".$cari."%")
        ->get();

        return response()->json($data);
    }

    public function caritipekapal(Request $request){

        $cari = $request->cari;
        $data = DB::table('m_ship_types')
        ->select('id', 'name')
        ->where('name','ILIKE', "%".$cari."%")
        ->get();

        return response()->json($data);
    }

    public function carisales(Request $request){

        $cari = $request->cari;
        $data = DB::table('m_employees')
        ->select('id', 'name')
        ->where('name','ILIKE', "%".$cari."%")
        ->get();

        return response()->json($data);
    }

    public function cariwork(Request $request){

        $cari = $request->cari;
        $data = DB::table('m_work_activities')
        ->select('id', 'name')
        ->where('name','ILIKE', "%".$cari."%")
        ->get();

        return response()->json($data);
    }
	
}