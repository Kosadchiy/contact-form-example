<?php

namespace App\Services;

use App\FormQuestion;
use App\Services\Contracts\FormFilesServiceInterface;
use App\Services\Contracts\FormQuestionsServiceInterface;

class FormQuestionsService implements FormQuestionsServiceInterface
{
    protected $formFilesService;

    public function __construct(FormFilesServiceInterface $formFilesService)
    {
        $this->formFilesService = $formFilesService;
    }

    public function store(array $data)
    {
        $formQuestion = FormQuestion::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'question' => $data['question']
        ]);

        if (isset($data['files']))
        {
            foreach ($data['files'] as $file) 
            {
                $src = $this->formFilesService->store($file);
                $filesArray[] = [
                    'name' => $file->getClientOriginalName(),
                    'src' => $src
                ];
            }
            $formQuestion->files()->createMany($filesArray);
        }
    }
}