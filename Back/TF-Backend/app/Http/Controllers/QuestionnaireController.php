<?php

namespace App\Http\Controllers;

use App\Models\ListType;
use App\Models\Questionnaire;

class QuestionnaireController extends Controller
{
    public function index()
    {
        $questionnaires = Questionnaire::all();
        $listtypes = ListType::all();

        return view('index', ['questionnaires' => $questionnaires, 'listtypes' => $listtypes]);

    }

    public function create(){
        return view('questionnaires.create');
    }
}
