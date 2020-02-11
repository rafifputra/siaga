<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MSlipwayType;

class SlipwaytypeController extends Controller
{
    public function index(){

        $slipwaytype = DB::table('m_slipway_types')
                    ->orderby('id', '=', 'desc')
                    ->paginate(10);
                    
        return view('slipwaytype',['slipwaytype'=>$slipwaytype]);
    }

    public function create(){
    	return view('slipwaytype-add');

    }

    public function store(Request $request){
        $this->validate($request,[
            'code' => 'required|min:2',
            'name' => 'required'
            
        ]);
        
        $cek_kode = strtoupper($request->input('code'));
        $slipwaytype = DB::table('m_slipway_types as a')                                  
                       ->select('a.*')
                       ->where('a.code', '=', $cek_kode)                                   
                       ->first();

        if($slipwaytype){ // JIKA ADA
            return redirect('/slipwaytype/create')->with('message', 'Code already exist'); 
        }else { // TIDAK ADA
             $data = array
            (
                'code' => strtoupper($request->input('code')),
                'name' => $request->input('name'),
            );

            $data['created_at'] =new \DateTime();
            $data['updated_at'] =new \DateTime();

            DB::table('m_slipway_types')->insert($data);
            return redirect('slipwaytype')->with('message', 'data saved successfully');
        }    
        
    }

    public function edit($id){

        $slipwaytype = DB::table('m_slipway_types') 
                                   ->where('id', '=', $id)                                   
                                   ->first();

        return view('slipwaytype-edit',compact('slipwaytype')); 
        
    }

    public function update(Request $request){
        $this->validate($request,[
        	'code' => 'required|min:2',
            'name' => 'required'
            
        ]);

        DB::table('m_slipway_types')
        	->where('id', '=', $request->id)
            ->update([
            	'code' => $request->code,
                'name' => $request->name
                
            ]);

            return redirect('/slipwaytype')->with('message', 'successfully updated');
    }

    public function delete($id){
        DB::delete(' delete from m_slipway_types where id = ?',[$id]);
        return redirect('/slipwaytype')->with('message','deleted successfully');
    }

    public function search(Request $request){
        // $m_ships= MShip::get();
        $cari = $request->caridata;
        $slipwaytype = MSlipwayType::where('name', 'ILIKE', '%'.$cari.'%')
                    ->orWhere('code', 'ILIKE', '%'.$cari.'%')
                    ->paginate(); 

        return view('slipwaytype', compact('slipwaytype'));
    }
}
