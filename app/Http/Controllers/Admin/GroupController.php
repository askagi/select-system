<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Group;
use App\Modality;
use App\Teacher;

class GroupController extends Controller
{

    private $group;
    private $modality;
    private $teacher;

    public function __construct(Group $group, Modality $modality, Teacher $teacher)
    {
        $this->group = $group;
        $this->modality = $modality;
        $this->teacher = $teacher;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = $this->group->paginate(10);
        return view('admin.groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modalities = $this->modality->all(['id', 'name']);
        $teachers = $this->teacher->all(['id', 'name']);
        
        return view('admin.groups.create', compact('modalities', 'teachers'));
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
        $modality = $this->modality->find($data['modality']);

        $group = $modality->groups()->create($data);
        $group->teachers()->sync($data['teachers']);


        flash('Grupo criado com Sucesso')->success();
        return redirect()->route('dashboard.groups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = $this->group->findOrFail($id);
        $teachers = $this->teacher->all();
        return view('admin.groups.show', compact('group', 'teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = $this->group->findOrFail($id);

        $modalities = $this->modality->all(['id', 'name']);
        $teachers = $this->teacher->all(['id', 'name']);

        return view('admin.groups.edit', compact('group', 'modalities', 'teachers'));
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
        //dd($data['teachers']);
        $group = $this->group->find($id);
        $group->update($data);
        $group->teachers()->sync($data['teachers']);
        //$group->students()->sync($data['students']);

        $teachers = $this->teacher->all(['id', 'name']);
        flash("Turma atualizado com sucessor")->success();
        return view('admin.groups.show', compact('group', 'teachers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = $this->group->findOrFail($id);
        $group->delete();

        flash('Turma exluida com sucesso')->success();
        return redirect()->route('dashboard.groups.index');
    }
}
