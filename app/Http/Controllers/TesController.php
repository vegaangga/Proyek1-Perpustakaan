<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class TesController extends Controller
{
    public function edit($id)
    {
        $Buku = Buku::where('id', $id)->first();
        return view('admin.buku.edit', compact('Buku'));
    }
}
