<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProduitController;
use App\Http\Middleware\isAuthentificatedMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return view("welcome");
})->name('welcome');

// Route::name('Produit.')
//      ->prefix('produit')
//      ->controller(ProduitController::class)
//      ->group(function (){
//         Route::get('',[ProduitController::class,'index'])->name('index');
//         Route::post('',[ProduitController::class,'index'])->name('index');
//         Route::get('details',[ProduitController::class,'details'])->name('details');
//         Route::delete('supprimer',[ProduitController::class,'supprimer'])->name('supprimer');
//         Route::get('ajouter',[ProduitController::class,'ajouter'])->name('ajouter');
//         Route::post('add',[ProduitController::class,'add'])->name('add');
//         Route::get('modifier',[ProduitController::class,'modifier'])->name('modifier');
//         Route::post('modifier',[ProduitController::class,'save'])->name('save');
//      });







     Route::name('Produit.')
     ->prefix('produit')
     ->controller(ProduitController::class)
     ->group(function (){
        Route::get('',[ProduitController::class,'index'])->middleware(isAuthentificatedMiddleware::class)->name('index');
        Route::post('',[ProduitController::class,'index'])->middleware(isAuthentificatedMiddleware::class)->name('index');
        Route::get('details',[ProduitController::class,'details'])->name('details');
        Route::delete('supprimer',[ProduitController::class,'supprimer'])->middleware(isAuthentificatedMiddleware::class)->name('supprimer');
        Route::get('ajouter',[ProduitController::class,'ajouter'])->middleware(isAuthentificatedMiddleware::class)->name('ajouter');
        Route::post('add',[ProduitController::class,'add'])->middleware(isAuthentificatedMiddleware::class)->name('add');
        Route::get('modifier',[ProduitController::class,'modifier'])->middleware(isAuthentificatedMiddleware::class)->name('modifier');
        Route::post('modifier',[ProduitController::class,'save'])->middleware(isAuthentificatedMiddleware::class)->name('save');
     });

   

         

Route::get('login',[AuthController::class,'login'])->name("login");
Route::post('login',[AuthController::class,'login2'])->name("login");
Route::delete('logout',[AuthController::class,'logout'])->name('logout');
Route::get('signin',function(){
    return view("Connexion.signin");
})->name('signin');
Route::post('signin',[AuthController::class,'signin'])->name("signin");


