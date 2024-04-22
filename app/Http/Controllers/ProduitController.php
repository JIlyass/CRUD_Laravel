<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    public function index(Request $req){
        // dd($req->categorie);
        $dbProduits=DB::table('produits')->get();
        if($req->categorie && $req->categorie!=-1 ){
            $dbProduits=DB::table('produits')->where("categories_id",$req->categorie)->get();

        }
            

        if($req->search){
            dd($req->search);
            $dbProduits=$dbProduits->where("nomPr","like","%".$req->search."%");
        }

        $dbCategories=DB::table('categories')->get();
        return view('Produits.index',["dbProduits"=>$dbProduits,"dbCategories"=>$dbCategories,"categorie"=>$req->categorie]);
    }

    public function details(Request $req){
        // $toDelete=request('toDelete');
        $produit_details=DB::table('produits')->where('codePr',$req->idPr)->first();
        return view('Produits.details',["produit_details"=>$produit_details,"toDelete"=>$req->toDelete]);
    }

    public function supprimer(request $req){
        DB::table('produits')->where("codePr",$req->Produit)->delete();

        return redirect()->route('Produit.index');
    }

    public function ajouter(Request $req){
        $produit=DB::table('produits')->where("codePr",$req->idPr)->get();
        $dbCat=DB::table('categories')->get();
        return view('Produits.ajouter',["dbCat"=>$dbCat,"toUpdate"=>$produit,"codePr"=>$req->idPr]);
    }
    public function add(Request $req){
        DB::table("produits")->insert([
            "nomPr"=>$req->nomPr,
            "pu"=>$req->pu,
            "pa"=>$req->pa,
            "categories_id"=>$req->categories_id
        ]);
        return redirect()->route('Produit.index');


    }

    public function modifier(Request $req){
        $produit_details=DB::table('produits')->where("codePr",$req->idPr)->get();
        $dbCat=DB::table('categories')->get();
        return view('Produits.modifier',["produit_details"=>$produit_details,"dbCat"=>$dbCat]);
 
    }
    public function save(Request $req){
        DB::table("produits")->where('codePr',$req->codePr)->update([
            "nomPr"=>$req->nomPr,
            "pu"=>$req->pu,
            "pa"=>$req->pa,
            "categories_id"=>$req->categories_id
        ]);
        return redirect()->route('Produit.index');


    }
}
