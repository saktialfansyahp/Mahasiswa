<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class StudentController extends Controller
{

    public function index()
    {
        $mahasiswa = Student::all();
        $user = User::all();

        $categories = [];
        foreach ($mahasiswa as $mhs){
            $categories[] = $mhs->jeniskelamin;
        }
        return view('mahasiswa.index',compact('mahasiswa', 'categories'));
    }
    public function create()
    {
        return view('mahasiswa.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jeniskelamin' => 'required',
            'nrp' => 'required',
            'kelas' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('mahasiswa.index')
                        ->with('success','Mahasiswa add successfully.');
    }

    public function show(Student $mahasiswa)
    {
        return view('mahasiswa.show',compact('mahasiswa'));
    }

    public function edit(Student $mahasiswa)
    {
        return view('mahasiswa.edit',compact('mahasiswa'));
    }

    public function update(Request $request, Student $mahasiswa)
    {
        $request->validate([
            'name' => 'required',
            'jeniskelamin' => 'required',
            'nrp' => 'required',
            'kelas' => 'required',
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')
                        ->with('success','Mahasiswa updated successfully');
    }

    public function destroy(Student $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
                        ->with('success','Mahasiswa deleted successfully');
    }

}
