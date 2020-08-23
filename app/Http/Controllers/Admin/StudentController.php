<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Student;
use App\Group;
use App\Schedule;
use App\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\StudentRequest;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
  use UploadTrait;

  private $student;
  private $groupt;
  private $schedule;
  private $teacher;


  public function __construct(Student $student, Group $group, Schedule $schedule, Teacher $teacher)
  {
    $this->student = $student;
    $this->group = $group;
    $this->schedule = $schedule;
    $this->teacher = $teacher;

  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //$students = $this->student->onlyTrashed()->get(); //Alunos desativados
    $students = $this->student->paginate(5);
    //$schedules = $this->schedule->groupBy('group_id')->having('day_of_week' )->get(); 
    

    return view('admin.students.index', compact('students'));
  }

  public function search(Request $request)
  {
    $search = $request->search;
    if (empty($search)) {
      return redirect()->route('dashboard.students.index');
    } else {
      $students = DB::table('students')->where('name', 'like', '%' . $search . '%')->paginate(5);

      return view('admin.students.index', compact('students', 'search'));
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    return view('admin.students.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StudentRequest $request)
  {
    $data = $request->all();


    if ($request->hasFile('photo')) {
      $data['photo'] = $this->imageUpload('photo_students', $request->file('photo'));
    }
    
    //dd($data);

    $student = $this->student->create($data);
    //dd($student->id);

    /*
        $student = $this->dataStudent->create($dataStudent);
        $address = $student->address()->create($dataAddress);*/
    flash('Cadastro Efetuado Com sucesso !')->success()->important();
    return redirect()->route('dashboard.studentgroup.index', ['student_id' => $student->id]);
  }

  

  /**
   * Display the specified resource.
   *
   * @param  int  $student
   * @return \Illuminate\Http\Response
   */
  public function show($student)
  {
    $student = $this->student->find($student);
    $groups = $this->group->all();
    $schedules = $this->schedule->all();
    $teachers = $this->teacher->all();
   // $dist = $this->schedule;
    //$dist = DB::table('schedules')->select('group_id', 'day_of_week')->distinct()->get();

    return view('admin.students.show', compact('student', 'groups', 'schedules', 'teachers'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($student)
  {
    $student = $this->student->find($student);
    return view('admin.students.edit', compact('student'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $student
   * @return \Illuminate\Http\Response
   */
  public function update(StudentRequest $request, $student)
  {
    $data = $request->all();

    $student = $this->student->find($student); //localizo o objeto via o id=$student
    if ($request->hasFile('photo')) {
      if (Storage::disk('public')->exists($student->photo)) {
        Storage::disk('public')->delete($student->photo);
      }
      $data['photo'] = $this->imageUpload('photo_students', $request->file('photo'));
    }
    //$studentData = $request->get('student');
    //$addressData = $request->get('address');


    $student->update($data); // atualizo a collection 'student'
    flash('Cadastro Atualizado com sucesso!')->success()->important();
    return view('admin.students.show', compact('student'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $student
   * @return \Illuminate\Http\Response
   */
  public function destroy($student)
  {
    $student = $this->student->find($student);
    flash("Cadastro desativado com Sucesso!")->success()->important();
    $student->delete();


    return redirect()->route('dashboard.students.index');
  }
}
