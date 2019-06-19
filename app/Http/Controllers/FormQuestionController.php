<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFormAnswer;
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

    public function all()
    {
        $formQuestions = $this->formQuestionsService->all();
        return view('admin.index', ['formQuestions' => $formQuestions]);
    }

    public function one($id)
    {
        $formQuestion = $this->formQuestionsService->getById($id);
        return view('admin.question', ['formQuestion' => $formQuestion]);
    }

    public function delete($id)
    {
        $formQuestions = $this->formQuestionsService->delete($id);
    }

    public function addAnswer($id, CreateFormAnswer $request)
    {
        $answerData = $request->all();
        $this->formQuestionsService->addAnswer($id, $answerData);
        return redirect ('/admin');
    }
}
