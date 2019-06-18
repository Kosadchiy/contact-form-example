<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFormQuestion;
use App\Services\Contracts\FormQuestionsServiceInterface;

class FormQuestionController extends Controller
{
    protected $formQuestionsService;

    public function __construct( FormQuestionsServiceInterface $formQuestionsService )
    {
        $this->formQuestionsService = $formQuestionsService;
    }

    public function store(CreateFormQuestion $request)
    {
        $requestData = $request->all();
        $this->formQuestionsService->store($requestData);
        return redirect('/');
    }
}
