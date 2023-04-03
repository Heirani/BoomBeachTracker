<?php

namespace App\Http\Controllers\Admin\Defense;

use App\Models\Defense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefenseController extends Controller
{
    public function index()
    {
        return view('admin.defense.index');
    }

    public function create()
    {
        $defense = new Defense;
        return view('admin.defense.form', compact('defense'));
    }

    public function edit(Defense $defense)
    {
        return view('admin.defense.form', compact('defense'));
    }

    public function create_level(Defense $defense)
    {
        return view('admin.defense.level_form', compact('defense'));
    }
}
