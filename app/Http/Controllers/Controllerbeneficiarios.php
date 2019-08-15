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

    public function loggin(Request $request){
        $data = $request->all();
        $data =  beneficiariosModel::where($data)->value('id');
        return $data;
    }

}
    