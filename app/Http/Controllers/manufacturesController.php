<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacture;

class manufacturesController extends Controller
{
    public function listCompany(){
        $data=Manufacture::all();
        return view('companies',[
            'manufactures' => $data 
        ]);
    }

    public function create(){

        $data = request()->validate([
            'companyName'=>'required',
            'contact'=>''
        ]);    

        Manufacture::create($data);

        return back();
    }
}
