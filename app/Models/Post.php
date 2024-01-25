<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title','excerpt','body'];
    // Alasannya menggunakan fillable ini cukup kompleks apalagi menginput banyak index baru
    // Maka gunakan protected guarded
    protected $guarded = ['id'];
    //Hanya id yang dijaga tidak boleh diisi manual, selebihnya index tipe lain dapat diisi
}
