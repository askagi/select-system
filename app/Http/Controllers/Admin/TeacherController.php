<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use App\Teacher;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{

    use UploadTrait;
    private $teacher;

    public function __construct(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = $this->teacher->paginate(10);

        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->imageUpload('photo_teachers', $request->file('photo'));
        }

        $this->teacher->create($data);
        flash("Professor cadastrado com Sucesso!")->success()->important();
        return redirect()->route('dashboard.teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = $this->teacher->findOrFail($id);
        return view('admin.teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = $this->teacher->findOrFail($id);
        return view('admin.teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $teacher = $this->teacher->find($id);
        if ($request->hasFile('photo')) {
            if (Storage::disk('public')->exists($teacher->photo)) {
                Storage::disk('public')->delete($teacher->photo);
            }
            $data['photo'] = $this->imageUpload('photo_teachers', $request->file('photo'));
        }

        $teacher->update($data);
        flash("Informações atualizadas com Sucesso!")->success()->important();
        return redirect()->route('dashboard.teachers.show', compact('teacher'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = $this->teacher->fin($id);
        $teacher->delete();
        flash("Cadastro desativado com sucesso!")->success()->important();
        return redirect()->route('dashboard.teachers.index');
    }
}
