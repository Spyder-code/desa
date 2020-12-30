<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rkp extends Model
{
    protected $fillable = ['bidang','kegiatan','lokasi','volume','tahun','jumlah','sumber','pola'];
}
