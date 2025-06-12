<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $majors = Major::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%')
                        ->orWhere('career_prospects', 'like', '%' . $search . '%');
        })->get();

        return view('majors.index', compact('majors', 'search'));
    }
}