<?php

namespace App\Http\Controllers;


use App\Section;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\SectionRequest;
use Illuminate\Support\Facades\Session;


class SectionController extends Controller
{
    public function index()
    {
//        $users = User::all();
        $sections = Section::all();
        return view('admin.section.index', compact('sections'));

    }



    public function create()
    {
//        $sections = Section::all();
        $section = Section::pluck('title','is_lower_section','user_id')->all();
//        return view('admin.section.create', compact('section'));

        $teachers = User::where('role_id', 2)->pluck('name', 'id');
        return view('admin.section.create', compact('teachers' , 'section' ));
    }

    public function store(SectionRequest $request)
    {
        $input = $request->all();

        Section::create($input);

        Session::flash('create_section', 'The Section had been CREATED');

        return redirect(route('section.index'));


    }
}
