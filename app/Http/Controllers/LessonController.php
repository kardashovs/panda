<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\TypeSection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $typeSection = TypeSection::find($id);
        $typeSection->users()->detach(Auth::user()->id);

        if($request->input('result') == $typeSection->typeable->key_true):
            $typeSection->users()->attach(Auth::user()->id);
            return back()->with('status', 'Complete!');
        else:
            return back()->with('error', 'No validate!');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lessonId, $type, $id)
    {
        $lesson = $type::findOrFail($id);
        $typeSection = TypeSection::find($lessonId);
        $lessonsType = $typeSection->section->lessons;

        foreach ($lessonsType as $key=>$lessonType):
            $nextLesson = null;
            if(($lessonType->id == $typeSection->id) && $key+1 < count($lessonsType)):
                $nextLesson = $lessonsType[$key+1];
                break;
            endif;
        endforeach;

        if (View::exists("front.dashboard.lessons.".$typeSection->typeable->template)) {
            return view("front.dashboard.lessons.".$typeSection->typeable->template, ['lesson'=>$lesson, 'typeSection' => $typeSection, 'nextLesson'=> $nextLesson]);
        }

        return view("front.dashboard.lessons.no-type");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
