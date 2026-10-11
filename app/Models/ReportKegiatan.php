<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table('report_kegiatan')]
#[Fillable(['id', 'registrasi_id', 'nim_mahasiswa', 'nama_pic', 'nomor_hp_pic', 'foto', 'video', 'deskripsi'])]
class ReportKegiatan extends Model
{
    //
}
