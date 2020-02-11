<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MSlipway;
use Illuminate\Support\Facades\DB;


class SlipwayController extends Controller
{
    
    public function index()
    {
        $m_slipway = MSlipway::with('MSlipwayType')
        ->orderby('id', '=', 'desc')
        ->paginate(10);

        return view('slipway',['m_slipway'=>$m_slipway]);
    }

    public function create()
    {
        return view('slipway-add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'code' => 'required|min:2', 
            'name' => 'required',
            'length' => 'required',
            'width' => 'required',
            'depth' => 'required',
            'type' => 'required'
        ]);

        $cek_kode = strtoupper($request->input('code'));
        $ship = DB::table('m_slipways as a')                                  
                       ->select('a.*')
                       ->where('a.code', '=', $cek_kode)                                   
                       ->first();

        if($ship){ // JIKA ADA
            return redirect('/slipway/create')->with('message', 'Code already exist'); 
        }else { // TIDAK ADA
            $data = array
            (
                'code' => strtoupper($request->input('code')),
                'name' => $request->input('name'),
                'length'  => $request->input('length'),
                'width' => $request->input('width'),
                'depth' => $request->input('depth'),
                'm_slipway_type_id' => $request->input('type')
            );

            $data['created_at'] =new \DateTime();
            $data['updated_at'] =new \DateTime();

            DB::table('m_slipways')->insert($data);
            return redirect('slipway')->with('message', 'data saved successfully');
        }    
    }

    public function edit($id)
    {
        $slipway = DB::table('m_slipways as a')
                                   ->join('m_slipway_types as b', 'b.id','=','a.m_slipway_type_id')
                                   ->select('a.*', 'b.name as namatype')
                                   ->where('a.id', '=', $id)                                   
                                   ->first();

        return view('slipway-edit',compact('slipway')); 
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'code' => 'required|min:2', 
            'name' => 'required',
            'length' => 'required',
            'width' => 'required',
            'depth' => 'required',
            'type' => 'required'
        ]);

        DB::table('m_slipways')->where('id', $request->id)
            ->update([
                'code' => $request->code,
                'name' => $request->name,
                'length' => $request->length,
                'width' => $request->width,
                'depth' => $request->depth,
                'm_slipway_type_id' => $request->type
            ]);

            return redirect('/slipway')->with('message', 'successfully updated');
    }

    public function delete($id)
    {
        DB::delete(' delete from m_slipways where id = ?',[$id]);
        return redirect('/slipway')->with('message','deleted successfully');
    }

    public function search(Request $request){
       
        $cari = $request->caridata;
        $m_slipway = MSlipway::where('name', 'ILIKE', '%'.$cari.'%')
                    ->orWhere('code', 'ILIKE', '%'.$cari.'%')
                    ->orWhereHas('MSlipwayType', function($query)use($cari){
                        $query->where('name', 'ILIKE', '%'.$cari.'%');
                    })
                    ->paginate(); 

        return view('slipway', compact('m_slipway'));
    }
}
