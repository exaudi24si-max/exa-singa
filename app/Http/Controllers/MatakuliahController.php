<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Menampilkan daftar mahasiswa";
    }

    /**
     * Show the specified resource.
     */
    public function show(string $nim)
    {
       return "Data Mahasiswa: " . $nim;
    }

    // ... (fungsi lain seperti create, store, edit, update, destroy)
}
