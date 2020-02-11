<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelCustomer;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function index(){

        $customer = DB::table('m_customers')
                    ->orderby('id', '=', 'desc')
                    ->paginate(10);
                    
        return view('customer',['customer'=>$customer]);
    }

    public function add(){
        return view('customer-add');

    }

    public function addpost(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3',
            'type' => 'required',
            'address_1' => 'required',
            'postal_code' => 'required',
            'contact_name' => 'required',
            'email' => 'required|unique:m_customers',
            'phone' => 'required'
        ]);

       $data = array( 
            'name'              => $request->name,
            'type'              => $request->type,
            'address_1'         => $request->address_1,
            'address_2'         => $request->address_2,
            'postal_code'       => $request->postal_code,
            'npwp'              => $request->npwp,
            'contact_name'      => $request->contact_name,
            'phone'             => $request->phone,
            'email'             => $request->email
        );

        $data['updated_at'] = Carbon::now()->toDayDateTimeString();
        DB::table('m_customers')->insert($data);

        return redirect('customer')->with('message', 'data saved successfully');              
    }

    public function edit($id){

        $customer = DB::table('m_customers') 
                                   ->where('id', '=', $id)                                   
                                   ->first();

        return view('customer-edit',compact('customer')); 
        
    }

    public function update(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3',
            'type' => 'required',
            'address_1' => 'required',
            'postal_code' => 'required',
            'contact_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        DB::table('m_customers')
        	->where('id', '=', $request->id)
            ->update([
                'name' => $request->name,
                'type' => $request->type,
                'address_1' => $request->address_1,
                'address_2' => $request->address_2,
                'postal_code' => $request->postal_code,
                'npwp' => $request->npwp,
                'contact_name' => $request->contact_name,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

            return redirect('/customer')->with('message', 'successfully updated');
    }

    public function delete($id){
        DB::delete(' delete from m_customers where id = ?',[$id]);
        return redirect('/customer');
    }

    public function search(Request $request){
       
        $cari = $request->caridata;
        $customer = ModelCustomer::where('name', 'ILIKE', '%'.$cari.'%')
                    ->orWhere('code', 'ILIKE', '%'.$cari.'%')
                    ->paginate(); 

        return view('customer', compact('customer'));
    }
}
