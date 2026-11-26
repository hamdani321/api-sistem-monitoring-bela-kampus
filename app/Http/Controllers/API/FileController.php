<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FotoKegiatan;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function view_file(string $fileId)
    {
        $file = FotoKegiatan::find($fileId);
        return response()->file(Storage::disk("public")->path($file->path));
    }
}
