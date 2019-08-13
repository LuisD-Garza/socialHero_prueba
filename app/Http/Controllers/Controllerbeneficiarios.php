<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\beneficiariosModel;

class Controllerbeneficiarios extends Controller
{

    public function insertar(Request $request){
        //  dd($request->all());
        $data = $request->all();
        $newUser = beneficiariosModel::create($data);
       
    }
}
    