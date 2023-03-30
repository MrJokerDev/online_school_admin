<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Levels;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $courses = Courses::all();
        $levels = Levels::all();
        
        return view('pages.courses.index', compact('courses', 'levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels = Levels::all();
        
        return view('pages.courses.create', compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'courses' => 'required'
        ]);
        
        $courses = Courses::create([
            'courses' => $request->courses
        ]);
        
        $courses->save();
        //$courses->level()->attach($request->level_id);
        
        return redirect()->route('courses.index');
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
    public function edit(Courses $course): View
    {

        return view('pages.courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'courses' => 'required'
        ]);
        
        $courses = Courses::find($id);
        //$courses->level()->sync($courses);
        $courses->update([
            'courses' => $request->courses
        ]);
        
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courses = Courses::find($id);
        //$courses->level()->detach();
        $courses->delete();
        return redirect()->route('courses.index');
    }
}