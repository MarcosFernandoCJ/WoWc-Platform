<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;
use App\Models\Institution;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $institutionId = Auth::user()->id;
        $teachers = Teacher::where('id_institution', $institutionId)->paginate();
        $users = User::all();
        $institutions = Institution::all();
        return view('teacher.index', compact('teachers','users','institutions'))
            ->with('i', ($request->input('page', 1) - 1) * $teachers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $teacher = new Teacher();
        $users = User::all();
        $institutionId = Auth::user()->id;
        return view('teacher.create', compact('teacher','institutionId','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request): RedirectResponse
    {
        Teacher::create($request->validated());

        return Redirect::route('teachers.index')
            ->with('success', 'Teacher created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $institutionId = Auth::user()->id;
        $teacher = Teacher::where('id_institution', $institutionId)->find($id);
        $users = User::all();

        return view('teacher.show', compact('teacher','institutionId','users'));
    }

    public function destroy($id): RedirectResponse
    {
        Teacher::find($id)->delete();

        return Redirect::route('teachers.index')
            ->with('success', 'Teacher deleted successfully');
    }
}
