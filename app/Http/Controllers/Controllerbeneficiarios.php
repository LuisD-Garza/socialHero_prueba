<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\beneficiariosModel;
use App\donacionModel;

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


    public function getBeneficiarios(){
        $data = beneficiariosModel::all();
        return $data;
    }

    public function insertarDonacion(Request $request){
        // dd($request->all());
        $data = $request->all();
        $newUser = donacionModel::create($data);
    }

        public function getDonaciones(Request $request){
        // dd($request->all());
        $data = $request;
        $newUser = donacionModel::select()->where('id', 1)->get();
        return $newUser;
    }

}
    