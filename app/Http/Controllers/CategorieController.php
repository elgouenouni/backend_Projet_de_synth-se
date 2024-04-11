<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    //
    public function ajouter(Request $request){
        $cate=Categorie::create([
            "titre"=>$request->titre,
            "description"=>$request->description,
        ]);
       if($cate){
        return response()->json([
            "status"=>"successfolly",
            "data"=>$cate,
        ]) ;
       }else{
    
} 
    }
}
