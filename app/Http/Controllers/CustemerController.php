<?php

namespace App\Http\Controllers;
use App\Models\custemer;
use Illuminate\Http\Request;

class custemerController extends Controller
{
    //
    public function register()
  {
  return view('custemer.register');
  }
    function store(Request $request)
    
    {
      $custemer =new custemer();
      $custemer->c_lname = $request->c_lname;
      $custemer->c_fname = $request->c_fname;
      $custemer->c_sex = $request->c_sex;
      $custemer->c_birthdate = $request->c_birthdate;
      $custemer->c_email = $request->c_email;
      $custemer->c_phone = $request->c_phone;
     $is_saved = $custemer->save();
    if($is_saved){
    echo "SAVED SUCCESSFULLY.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    public function get_all()
{
 $custemer = custemer::all();
 return view('custemer.list', compact('custemer'));
}
public function edit($id)
 {
 $custemer = custemer::find($id);
 return view('custemer.edit', compact('custemer'));
 }
 public function update(Request $request)
 {
 //Validate
 $request->validate(['name' => 'required' ]);
  $custemer = custemer::find($request->id);
  $custemer->c_name = $request->c_name;
  $custemer->c_fname = $request->c_fname;
  $custemer->c_sex = $request->c_sex;
  $custemer->c_birthdate = $request->c_birthdate;
  
  $custemer->c_email = $request->c_email;
  $custemer->c_phone = $request->c_phone;
  $custemer->save();
  return redirect('custemer/list');
  }
  public function delete($id)
 {
 custemer::where('id', $id)->delete();
 return redirect('custemer/list');
 }

 public function get_by_id($id)
 {
  $custemer = custemer::where('id', $id)->first();
  return view('custemer.search', compact('custemer'));
  }
}
