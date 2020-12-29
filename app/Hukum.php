<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hukum extends Model
{
    protected $fillable = ['jenis','nomor','ditetapkan','diundangkan','tentang','file'];
}
