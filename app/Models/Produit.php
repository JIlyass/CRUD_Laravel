<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=["nomPr","pu","pa","categories_id"];
    protected $table="produits";
    protected $primaryKey="codePr";
    protected $keyType="integer";
}
