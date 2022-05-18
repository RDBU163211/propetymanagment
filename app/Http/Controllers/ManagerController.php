<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
      public function register()
    {
    return view('manager.register');
    }
      function store(Request $request)
      
      {
        $manager =new  manager();
        $manager->pm_lname = $request->pm_lname;
        $manager->pm_fname = $request->pm_fname;
        $manager->pm_sex = $request->pm_sex;
        $manager->pm_brithdate = $request->pm_brithdate;
        $manager->pm_email = $request->pm_email;
        $manager->pm_phone = $request->pm_phone;
       $is_saved = $manager->save();
      if($is_saved){
      echo " group project is SUCCESSFULLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function get_all()
  {
   $manager = manager::all();
   return view('manager.list', compact('manager'));
  }
  public function edit($id)
   {
   $manager =manager::find($id);
   return view('manager.edit', compact('manager'));
   }
   public function update(Request $request)
   {
   //Validate
   $request->validate(['pm_lname' => 'required' ]);
    $manager = manager::find($request->id);
    $manager->pm_lname = $request->pm_name;
    $manager->pm_fname = $request->pm_fname;
    $manager->pm_sex = $request->pm_sex;
    $manager->pm_brithdate = $request->pm_brithdate;
    $manager->pm_email = $request->pm_email;
    $manager->pm_phone = $request->pm_phone;
    $manager->save();
    return redirect('manager/list');
    }
    public function delete($id)
   {
    manager::where('id', $id)->delete();
   return redirect('manager/');
   }
  
   public function get_by_id($id)
   {
    $manager= manager::where('id', $id)->first();
    return view('manager.search', compact('manager'));

     }  

}
