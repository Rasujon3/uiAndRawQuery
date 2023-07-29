<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crud extends Controller
{
    public function OnInsertData(Request $req){
        $validate = $req->validate([
          'name'=>'required',
          'email'=>'required',
          'number'=>'required',
          'msg'=>'required'
        ]);

        $name = $req->input('name');
        $email = $req->input('email');
        $number = $req->input('number');
        $msg = $req->input('msg');

        $insert = DB::insert('INSERT INTO
         crud(name,email,phone,msg)
         VALUES(?,?,?,?)',[$name,$email,$number,$msg]);

         if($insert){
         return  redirect()->back()->with('msgKey','Data insert success');
         }else{
          return  redirect()->back()->with('msgKey','Data insert failed');
         }

      }

      //select
      public function OnSelectData(){
          $select = DB::select('select * FROM crud');
          return view('view',['userInfo'=>$select ]);
      }

      public function OnDeleteData($id){
        $delete = DB::delete('DELETE FROM crud WHERE id=?',[$id]);
        if($delete){
          return  redirect()->back()->with('msgKey','Data delete success');
          }else{
           return  redirect()->back()->with('msgKey','Data delete failed');
          }
      }

      ///edit data
      public function OnEditData($id){
          $edit = DB::select('SELECT * FROM crud WHERE id=?',[$id]);

          return view('showInfo',['key'=>$edit]);
      }

      public function update(Request $req,$id){
          $name = $req->input('name');
        $email = $req->input('email');
        $number = $req->input('number');
        $msg = $req->input('msg');

        $update = DB::update('UPDATE crud SET name=?,email=?,phone=?,msg=? WHERE id=?'
        ,[$name,$email,$number,$msg,$id]);
        if($update){
          return  redirect()->back()->with('msgKey','Data update success');
          }else{
           return  redirect()->back()->with('msgKey','Data update failed');
          }

      }
}
