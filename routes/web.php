<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return view("Produits.welcome");
});
Route::name('Produit.')
     ->prefix('produit')
     ->controller(ProduitController::class)
     ->group(function (){
        Route::get('',[ProduitController::class,'index'])->name('index');
        Route::post('',[ProduitController::class,'index'])->name('index');
        Route::get('details',[ProduitController::class,'details'])->name('details');
        Route::delete('supprimer',[ProduitController::class,'supprimer'])->name('supprimer');
        Route::get('ajouter',[ProduitController::class,'ajouter'])->name('ajouter');
        Route::post('add',[ProduitController::class,'add'])->name('add');
        Route::get('modifier',[ProduitController::class,'modifier'])->name('modifier');
        Route::post('modifier',[ProduitController::class,'save'])->name('save');
     });




