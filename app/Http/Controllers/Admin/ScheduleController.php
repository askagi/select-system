<?php

namespace App\Http\Controllers\Admin;

use App\Group;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\Teacher;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    private $schedule;
    private $group;
    private $teacher;

    public function __construct(Schedule $schedule, Group $group, Teacher $teacher)
    {
        $this->schedule = $schedule;
        $this->group = $group;
        $this->teacher = $teacher;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = $this->schedule->orderBy('start_time', 'asc')->get();
        $groups = $this->group->all();
        $s = $this->schedule->all();
        $ag = $this->schedule;
        $teachers = $this->teacher->all();
        //dd($groups->schedules());
        //dd($groups->schedules->find('group_id', 3));
        //dd($groups->find(3)->modality->name);
        //$schedules = $schedules->orderBy('start_time');
        return view('admin.schedules.index', compact('schedules', 'groups', 'teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = $this->group->all();
        $teachers = $this->teacher->all();
        $g = $this->group->find(3);
        //dd($g->teachers);
        return view('admin.schedules.create', compact('groups', 'teachers'));
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
        //dd($data);
        $this->schedule->create($data);
        return redirect()->route('dashboard.schedules.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        //
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
