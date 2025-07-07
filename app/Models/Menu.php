<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    protected $fillable = ['name', 'slug', 'thumbnail', 'description', 'price'];

    use HasFactory;
    
    public function getRouteKeyName()
{
    return 'slug';
}

}
