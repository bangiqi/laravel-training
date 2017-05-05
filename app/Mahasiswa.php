<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['npm','nama','gender','id_jur','kelas','semester'];
}
