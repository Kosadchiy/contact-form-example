<?php

namespace App\Services;

use App\FormFile;
use Illuminate\Support\Facades\Storage;
use App\Services\Contracts\FormFilesServiceInterface;

class FormFilesService implements FormFilesServiceInterface
{
    public function store($file)
    {
        return Storage::disk('local')->put('form_files', $file);
    }
}