<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Questions::all();

        return view('pages.tests.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.tests.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $questions = Questions::create([
            'questions' => $request->question,
            'correct_answers' => $request->correct_answer,
            'type' => $request->question_type,
            'description' => $request->description,
        ]);
        $questions->save();

        $correct_answer = Answers::create([
            'answer' => $request->correct_answer,
            'questions_id' => $questions->id,
        ]);
        $correct_answer->save();
        
        foreach($request->answer as $key => $val){
            $val['questions_id'] = $questions->id;
            Answers::create($val);
        }

        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $question = Questions::where('id', $id)->first();
        $answers = Answers::where('questions_id', $question->id)->get();
        
        return view('pages.tests.questions.show', compact('question', 'answers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $question = Questions::find($id);
        $answers = Answers::where('questions_id', $id, 'id')->get();
        
        return view('pages.tests.questions.edit', compact('question', 'answers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $question = Questions::find($id);
        $answers = Answers::where('questions_id', $question->id)->get();
        
        $question->update([
            'questions' => $request->question,
            'correct_answers' => $request->correct_answer
        ]);

        $question->save();
        
        foreach($answers as $answer){
            if($answer->id == $request->answer_id_1){
                $answer->update([
                    'answer' => $request->answer_1,
                ]);
                $answer->save();
            }
            if($answer->id == $request->answer_id_2){
                $answer->update([
                    'answer' => $request->answer_2,
                ]);
                $answer->save();
            }
            if($answer->id == $request->answer_id_3){
                $answer->update([
                    'answer' => $request->answer_3,
                ]);
                $answer->save();
            }
            if($answer->id == $request->answer_id_4){
                $answer->update([
                    'answer' => $request->answer_4,
                ]);
                $answer->save();
            }
        }
        
        
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}