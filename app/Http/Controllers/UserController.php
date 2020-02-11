<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ModelUser;

class UserController extends Controller
{
    public function index(Request $request){

    	$user = DB::table('users')
                   ->orderby('id','=','desc')
                   ->paginate(10);

		return view('user',['user'=>$user]);
    }

    public function create(){
    	return view('user-add');

    }

    public function add(Request $request){

    	$this->validate($request, [
            'name' => 'required|min:3',
            'username' => 'required|unique:users',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
            'role'      => 'required'
           
        ]);

        $data =  new ModelUser();
        $data ->name = $request->name;
        $data ->username = $request->username;
        $data ->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->password_confirmation = bcrypt($request->password_confirmation);
        $data->role = $request->role;
        $data ->save();

        return redirect('user')->with('message', 'data saved successfully');
    }

    public function edit($id){

        $users = DB::table('users') 
                ->where('id', '=', $id)                                   
                ->first();

        return view('user-edit',compact('users')); 
        
    }

    public function update(Request $request){
        $this->validate($request,[
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        DB::table('users')
            ->where('id', '=', $request->id)
            ->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'password_confirmation' => bcrypt($request->password_confirmation),
                'role' => $request->role
                
            ]);

            return redirect('/user')->with('message', 'successfully updated');
    }

    public function delete($id){
        DB::delete(' delete from users where id = ?',[$id]);
        return redirect('/user');
    }

    public function search(Request $request){
        $cari = $request->caridata;
        $user = ModelUser::where('name', 'ILIKE', '%'.$cari.'%')
                    ->orWhere('username', 'ILIKE', '%'.$cari.'%')
                    ->paginate(); 

        return view('/user', compact('user'));
    }
}
