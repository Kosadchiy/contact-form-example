<?php

namespace App\Observers;

use App\FormFile;
use App\Services\Contracts\FormFilesServiceInterface;

class FormFileObserver
{
    protected $formFilesService;

    public function __construct(FormFilesServiceInterface $formFilesService)
    {
        $this->formFilesService = $formFilesService;
    }

    /**
     * Handle the form file "deleting" event.
     *
     * @param  \App\FormFile  $formFile
     * @return void
     */
    public function deleting(FormFile $formFile)
    {
        $this->formFilesService->delete($formFile->src);
    }
}
