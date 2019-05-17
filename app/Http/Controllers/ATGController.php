<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;

class ATGController extends Controller
{
    public function index(){
        User::find(1)->notify(new registered);
        return view('pages.index');
    }





public function store(Request $request)
{
    $this->validate($request,[
        'name'=>'required',
        'Pincode'=>'required|size:6|numeric',
        'Email'=>'required'


    ]);
    //return 123;
    $register= new register;
    $register->name=$request->input('string');
    $register->Pincode=$request->input('Pincode');
    $register->Email=$request->input('Email');
    $register->save();
    
    return redirect('/')->with('success','Post Created');
    

}
}

?>