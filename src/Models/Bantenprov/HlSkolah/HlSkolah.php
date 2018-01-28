<?php

namespace Bantenprov\HlSekolah\Models\Bantenprov\HlSekolah;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HlSekolah extends Model
{

    protected $table = 'hl_sekolahs';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\HlSekolah\Models\Bantenprov\HlSekolah\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\HlSekolah\Models\Bantenprov\HlSekolah\Regency','id','regency_id');
    }

}

