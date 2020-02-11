<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\MShipType;

class ShiptypeController extends Controller
{
    public function index(){

        $shiptype = DB::table('m_ship_types')
                    ->orderby('id', '=', 'desc')
                    ->paginate(10);
                    
        return view('shipstype',['shiptype'=>$shiptype]);
    }

    public function create(){

        return view('shipstype-add');
    }

    public function store(Request $request){
         $this->validate($request,[
            'code' => 'required|min:3', 
            'name' => 'required'
        ]);

        $cek_kode = strtoupper($request->input('code'));
        $shiptype = DB::table('m_ship_types as a')                                  
                       ->select('a.*')
                       ->where('a.code', '=', $cek_kode)                                   
                       ->first();

        if($shiptype){ // JIKA ADA
            return redirect('/shiptype/create')->with('message', 'Code already exist'); 
        }else { // TIDAK ADA
             $data = array
            (
                'code' => strtoupper($request->input('code')),
                'name' => $request->input('name')

            );

            $data['created_at'] =new \DateTime();
            $data['updated_at'] =new \DateTime();

            DB::table('m_ship_types')->insert($data);
            return redirect('shiptype')->with('message', 'data saved successfully');
        }    
    }

    public function edit($id){

    	$shiptype = DB::table('m_ship_types') 
                                   ->where('id', '=', $id)                                   
                                   ->first();
        return view('shipstype-edit', compact('shiptype'));
    }
    
    public function update(Request $request){
    	$this->validate($request, [
            'code' => 'required|min:3',
            'name' => 'required'
        ]);

         DB::table('m_ship_types')->where('id', $request->id)
            ->update([
                'code' => $request->code,
                'name' => $request->name
             
            ]);

        return redirect('shiptype')->with('message', 'successfully updated');
    }

    public function destroy($id){

    	DB::delete(' delete from m_ship_types where id = ?',[$id]);
    	return redirect('shiptype');
    }

     public function search(Request $request){
        $cari = $request->search;
        $shiptype = MShipType::where('name', 'ILIKE', '%'.$cari.'%')
                             ->orWhere('code', 'ILIKE', '%'.$cari.'%')
                             ->get();
        return view('shipstype',['shiptype'=>$shiptype]);
    }
}
