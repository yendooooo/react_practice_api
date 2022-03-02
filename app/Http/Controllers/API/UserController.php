<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected Student $board;

    public function __construct(Request $request)
    {
        $this->board = new User;
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
