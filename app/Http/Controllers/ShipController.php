<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MShip;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Collection;

class ShipController extends Controller
{
    public function ship(Request $request){

    	$m_ships = MShip::with('MShipType')
                   ->orderby('id', '=', 'desc')
                   ->paginate(10);

		return view('ships',['m_ships'=>$m_ships]);
    }

    public function shipadd(){
    	return view('ships-add');

    }

    public function shipyardAdd(Request $request){

        $this->validate($request,[
            'code' => 'required|min:2', 
            'name' => 'required',
            'loa' => 'required',
            'deadweight' => 'required',
            'cb' => 'required',
            'type' => 'required'
        ]);

        $cek_kode = strtoupper($request->input('code'));
        $ship = DB::table('m_ships as a')                                  
                       ->select('a.*')
                       ->where('a.code', '=', $cek_kode)                                   
                       ->first();

        if($ship){ // JIKA ADA
            return redirect('/shipyard/create')->with('message', 'Code already exist'); 
        }else { // TIDAK ADA
             $data = array
            (
                'code' => strtoupper($request->input('code')),
                'name' => $request->input('name'),
                'loa'  => $request->input('loa'),
                'deadweight' => $request->input('deadweight'),
                'coefisien_block' => $request->input('cb'),
                'm_ship_type_id' => $request->input('type')
            );

            $data['created_at'] =new \DateTime();
            $data['updated_at'] =new \DateTime();

            DB::table('m_ships')->insert($data);
            return redirect('shipyard')->with('message', 'data saved successfully');
        }    
        
    }
    
    public function shipyardAddEdit($id){

        $ship = DB::table('m_ships as a')
                                   ->join('m_ship_types as b', 'b.id','=','a.m_ship_type_id')
                                   ->select('a.*', 'b.name as namatype')
                                   ->where('a.id', '=', $id)                                   
                                   ->first();

        return view('ships-edit',compact('ship')); 
        
    }

    public function shipyardAddUpdate(Request $request){
        $this->validate($request,[
            'code' => 'required|min:2', 
            'name' => 'required',
            'loa' => 'required',
            'deadweight' => 'required',
            'cb' => 'required',
            'type' => 'required'
        ]);

        DB::table('m_ships')->where('id', $request->id)
            ->update([
                'code' => $request->code,
                'name' => $request->name,
                'loa' => $request->loa,
                'deadweight' => $request->deadweight,
                'coefisien_block' => $request->cb,
                'm_ship_type_id' => $request->type
            ]);

            return redirect('/shipyard')->with('message', 'successfully updated');
    }

    public function shipyardAddDelete($id){
        DB::delete(' delete from m_ships where id = ?',[$id]);
        return redirect('/shipyard')->with('message','deleted successfully');
    }

    public function shipyardAddSearch(Request $request){
        // $m_ships= MShip::get();
        $cari = $request->caridata;
        $m_ships = MShip::where('name', 'ILIKE', '%'.$cari.'%')
                    ->orWhere('code', 'ILIKE', '%'.$cari.'%')
                    ->orWhereHas('MShipType', function($query)use($cari){
                        $query->where('name', 'ILIKE', '%'.$cari.'%');
                    })
                    ->paginate(); 

        return view('ships', compact('m_ships'));
    }
}