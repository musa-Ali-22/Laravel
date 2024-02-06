<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\musa;
class musacontroller extends Controller
{
    public function form(Request $request){
$request->validate([
    'name'=>"required",
    'email'=>"required",
    'password'=>'required',
    'phonenumber'=>"required",
    'imagefile'=>'required'
]);
$data=$request->file('imagefile')->store('uploads');
$musa=new musa();
$musa->name=$request->name;
$musa->email=$request->email;
$musa->password=$request->password;
$musa->phonenumber=$request->phonenumber;
$musa->file=$data;
$musa->save();
return redirect('message');
    }
    public function index (){
        $musa=musa::all();
        return view('index',compact('musa'));
    }
    public function edit($id){
        $data=musa::find($id);
        return view('edit', compact('data'));
    }
    public function update(Request $request,$id){
$student=musa::find($id);
$student->name=$request->name;
$student->email=$request->email;
$student->password=$request->password;
$student->phonenumber=$request->phonenumber;
$student->file=$request->file('imagefile')->store('uploads');
$student->update();
return view('message');
    }
    public function delete($id){
        $student=musa::find($id);
        $student->delete($id);
        return redirect('view')->with('status','Data Deleted Successfully');
    }
}