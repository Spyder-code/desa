<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rpjm extends Model
{
    protected $fillable = ['bidang','sup_bidang','kegiatan','lokasi','volume','tahun','jumlah','sumber','pola'];
}
