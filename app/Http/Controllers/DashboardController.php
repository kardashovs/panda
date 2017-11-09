<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Lang;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all()->where('lang_id', '=', Auth::user()->lang_id);

        foreach($sections as $section)
        {
            $section->raiting = 0;
            if($section->lessons->count() > 0)
            {
                $section->raiting = round((count(Auth::user()->lessons->where('section_id', '=', $section->id))*100)
                    /$section->lessons->count());
            }

            foreach($section->lessons as $lesson)
            {
                foreach($lesson->users as $user)
                {
                    if($user->id == Auth::user()->id)
                    {
                        $lesson->complete = true;
                    }
                }
            }
        }

        return view('front.dashboard.index', ['sections' => $sections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, User $user)
    {
        $user = $user::find(Auth::user()->id);
        $user->lang_id = $id;
        $user->save();
        return redirect()->route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
