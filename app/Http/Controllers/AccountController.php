<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Hash;

class AccountController extends Controller
{
    public function storeUser(Request $request) {
        // dd($request->all());
        $rules = [
            'username' => 'required|unique:users,username',
            'firstName' => 'required',
            'password' => 'required|min:4|same:password2'
        ];
        $request->validate($rules);
        // $validation = $request->validate($rules);
        // dd($validation);
        $userData = [
                'username' => $request->get('username'),
                'password' => Hash::make($request->get('password')),
                'firstName' => $request->get('firstName'),
                'lastName' => $request->get('lastName'),
                'phone' => $request->get('phone'),
                'mail' => $request->get('mail'),
                'address' => $request->get('address'),
                'country' => $request->get('country'),
        ];
        DB::table('users')->insert($userData);
        Session::flash('success','Succsess');
        return redirect()->back();
        // return redirect()->back()->with(['success' => ['Success']]);
    }
        public function saveChatMessage(Request $request){
        dd($request->get('username'), $request->get('text'));
            $messageDate = [
                'username' => $request->get('username'),
                'text' => $request->get('text'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
            DB::table('messages')->insert($messageDate);
            return ['status' => 'ok'];
    }

    public function getChatMessages() {
        return BD::table('messages')->get();
    }
}