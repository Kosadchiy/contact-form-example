<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeSettings;
use App\Services\Contracts\SettingsServiceInterface;

class SettingsController extends Controller
{
    protected $settingsService;

    public function __construct( SettingsServiceInterface $settingsService )
    {
        $this->middleware('auth');
        $this->settingsService = $settingsService;
    }

    public function get ()
    {
        $questions_email = $this->settingsService->get('questions_email');
        return view('admin.settings', ['questions_email' => $questions_email]);
    }

    public function set (ChangeSettings $request)
    {
        $this->settingsService->set('questions_email', $request->questions_email);
        return redirect('/admin');
    }
}
