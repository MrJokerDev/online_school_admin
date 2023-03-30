<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lessons;
use App\Models\Levels;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lessons::all();

        $levels = Levels::all();
        
        return view('pages.lessons.index', compact('lessons', 'levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels = Levels::all();
        $courses = Courses::all();
        
        return view('pages.lessons.create', compact('levels', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lesson = Lessons::create([
            'course_id' => $request->courses_id,
            'level_id' => $request->level_id,
            'title' => $request->title,
            'description' => $request->description,
            'lesson_video' => $request->video
        ]);
        
        $lesson->save();

        return redirect()->route('lessons.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lesson = Lessons::where('id', $id)->first();
        
        $course = Courses::where('id', $lesson->course_id)->get();
        $level = Levels::where('id', $lesson->level_id)->get();
        //dd($course);
        return view('pages.lessons.show', compact('lesson', 'course', 'level'));
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