<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function adduser(Request $req){

        if($req->pass==$req->cpass){
        $class = DB::table('stundets')->insert(

            [

                'name'=>$req->name,
                'email'=>$req->email,
                'pass'=>$req->pass,
                'cpass'=>$req->cpass,
            ]
        );
        if($class){
            return view("login");
        }
            }else{

        echo "password and confirm password does not match";
        return view('welcome');

    }

    }

    public function newuser(){
      $users = DB::table('stundets')->get();
        // return $users;
        return view('table',['data'=>$users]);
    }
    public function singleuser(string $id){
        $viewuser = DB::table('stundets')->where('id',$id)->get();
        return view('single',['data' => $viewuser]);
    }

    public function deleteuser(string $id){
        $delete = DB::table('stundets')->where('id',$id)->delete();
        if($delete){
            return redirect()->route('table');
        }
    }
        public function updatepage(string $id){
            $viewuser = DB::table('stundets')->find($id);
            // return $viewuser;
        return view('update',['data' => $viewuser]);
        }

    public function updateuser(Request $req,$id){

        $users = DB::table('stundets')->where('id',$id)->update([


            'name'=>$req->name,
            'email'=>$req->email,
            'pass'=>$req->pass,
            'cpass'=>$req->cpass,
        ]);
        if($users){
                return redirect()->route('table');

        }else{
            return view('update');
        }
    }


    public function loginuser(Request $req){


        $viewuser = DB::table('stundets')->where([
            ['email','=',$req->email] ,
            ['pass','=',$req->pass],
        ]
        )->get(

        );
        if(sizeof($viewuser)>0){


           session([
            'data'=>$viewuser
           ]) ;
           return redirect()->route('table');

        }else{
            return redirect()->route('login');
        }


    }

}
