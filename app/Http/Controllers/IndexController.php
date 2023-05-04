<?php

namespace App\Http\Controllers  ;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Lessons;
use App\Models\Levels;
use App\Models\Questions;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $courses = Courses::all();
        $lessons = Lessons::all();
        $questions = Questions::all();

        //dd($lessons);
        
        return view('dashboard', compact('users', 'courses', 'lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}