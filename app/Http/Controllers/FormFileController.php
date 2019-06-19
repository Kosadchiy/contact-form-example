<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Contracts\FormFilesServiceInterface;

class FormFileController extends Controller
{
    protected $formFilesService;

    public function __construct( formFilesServiceInterface $formFilesService )
    {
        $this->middleware('auth');
        $this->formFilesService = $formFilesService;
    }

    public function download(Request $request)
    {
        return $this->formFilesService->download($request->path, $request->name);
    }
}
