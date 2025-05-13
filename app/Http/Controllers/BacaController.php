<?php

namespace App\Http\Controllers;

use App\Models\Manajemen;
use Illuminate\Http\Request;

class BacaController extends Controller
{
    public function index(string $id) {
        $books = Manajemen::with('detailmanajemen')->find($id);

        return view('baca', compact('books'));
    }
}
