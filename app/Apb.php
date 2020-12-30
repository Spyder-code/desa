<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apb extends Model
{
    protected $fillable = ['bidang','anggaran','kegiatan','realisasi','defisit','sumber'];
}
