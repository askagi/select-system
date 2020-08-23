<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Group;
use App\Student;

class StudentGroupController extends Controller
{

    private $group;
    private $student;

    public function __construct(Group $group, Student $student)
    {
        $this->group = $group;
        $this->student = $student;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $student_id = $request['student_id'];
        $student = $this->student->find($student_id);
        $groups = $this->group->all();
        return view('admin.studentgroups.index', compact('student', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $group_id = $request['group_id'];
        $student_id = $request['student_id'];
        $group = $this->group->find($group_id);
        $student = $this->student->find($student_id);
       
        //dd($group->students->find($student_id));
        return view('admin.studentgroups.create', compact('group', 'student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group_id = $request['group'];
        $student_id = $request['student'];
        $group = $this->group->find($group_id);
        $group->students()->attach([$student_id]);

        //$group->students->create($request->all(['student']));
        //dd($student_id);
        return redirect()->route('dashboard.students.show', ['student' => $student_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $group = $this->group->find($request['group_id']);
        $group->students()->detach([$id]);
        return redirect()->route('dashboard.students.show', ['student' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
