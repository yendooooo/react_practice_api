<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    protected Student $board;

    public function __construct(Request $request)
    {
        $this->board = new Student;
    }

    public function index()
    {
        $students = $this->board->all();
        return response()->json([
            'status' => 200,
            'students' => $students,
        ]);
    }

    public function store(Request $request)
    {
        $this->board->name = $request->name;
        $this->board->course = $request->course;
        $this->board->email = $request->email;
        $this->board->phone = $request->phone;
        $this->board->save();

        return response()->json([
            'status' => 200,
            'message' => 'Student Added Successfully'
        ]);
    }
}
