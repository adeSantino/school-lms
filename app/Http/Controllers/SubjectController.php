<?php
namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function create()
    {
        return view('subjects.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);

        Subject::create([
            'name' => $request->name,
            'teacher_id' => auth()->id(), // Assuming you have teacher authentication set up
        ]);

        return redirect()->route('subjects.index');
    }

    public function index()
    {
        $subjects = Subject::where('teacher_id', auth()->id())->get();
        return view('subjects.index', compact('subjects'));
    }
}