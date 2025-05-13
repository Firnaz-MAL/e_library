<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manajemen;

class UserController extends Controller
{
    public function index() {
        $books = Manajemen::with('detailmanajemen')->get();

        return view('dashboard', compact('books'));
    }
}
