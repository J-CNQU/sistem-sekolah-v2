<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function create()
    {
        return view('students.create');
    }
    public function store()
    {
        return "Melakukan penambahan data siswa";
    }
    public function show(string $id)
    {
        return "Menampilkan siswa dengan ID: {$id}";
    }
    public function edit(string $id)
    {
        return "Menampilkan halaman edit siswa dengan ID: {$id}";
    }
    public function update(string $id)
    {
        return "Melakukan perubahan data siswa dengan ID: {$id}";
    }
    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}
