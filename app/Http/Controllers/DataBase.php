<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class DataBase extends Controller
{
    public $status=0;
    function registration(Request $req){
        try {
            $newUser = new User;
            $newUser->name = $req->name;
            $newUser->email = $req->email;
            $newUser->password = $req->password;
            $newUser->status=0;
            $newUser->save();
            

            Schema::create($req->name.'_orders', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->integer('price');
                $table->integer('qty');
                $table->string('image1');
            });

            return redirect()->back()->with('success', "You are successfully Registered");

        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    function login(Request $req){
        try {
            $req->validate([
                'email'=> 'required',
                'password'=>'required'  
              ]);
              $check=0;
              $email = $req->email;
              $password = $req->password;
              if ($email=="admin@admin.com" && $password = "admin@123") {
                  return redirect('/admin');
              } else {
                  $data = DB::table('users')->where('email', $email)->where('password', $password)->get();
                  DB::update("UPDATE `users` SET `status`= 1 WHERE `email` = '".$req->email."'");
                  $check = count($data);
                  if($check!=0){
                      return redirect('/user');
                  }
                  else{
                      return redirect()->back()->with('error', 'Sorry, your email or password was incorrect. Please double-check your credentials.');
                  }   
              }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
