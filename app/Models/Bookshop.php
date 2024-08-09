<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookshop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'password',
        'confirmpassword',
        'phone',
        'gender',
    ] ;

    public function books(){
        return $this->hasMany(Book::class);
    }
}
