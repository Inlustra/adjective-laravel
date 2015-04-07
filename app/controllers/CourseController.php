<?php

class CourseController extends \BaseController
{

    public function admin($id)
    {
        $course = Course::find($id)->with('staff')->first();
        $meetings = Meeting::withStaff(Auth::user(), $course)->sort()->take(5)->get();
        $meetings_count = Meeting::withStaff(Auth::user(), $course)->sort()->count();
        foreach ($course->students as &$student) {
            $student->Supervisor = User::find($student->Supervisor);
            $student->SecondMarker = User::find($student->SecondMarker);
        }
        return View::make('course')->with(
            array('course' => $course,
                'meetings' => $meetings,
                'meetings_count' => $meetings_count));
    }

    public function students($id)
    {
        $course = Course::find($id)->with('staff')->first();
        foreach ($course->students as &$student) {
            $student->Supervisor = User::find($student->Supervisor);
            $student->SecondMarker = User::find($student->SecondMarker);
        }
        return View::make('coursestudents')->with(
            array('course' => $course));
    }

    public function editStudents($id)
    {
        $course = Course::find($id)->with('staff')->first();
        foreach ($course->students as &$student) {
            $student->Supervisor = User::find($student->Supervisor);
            $student->SecondMarker = User::find($student->SecondMarker);
        }
        return View::make('editstudents')->with(
            array('course' => $course));
    }

    public function postStudents($id)
    {
        if (Input::has("student"))
            foreach (Input::get("student") as $studentId) {
                $user = User::find($studentId);
                $user->student->courses()->detach($id);
                $array = array();
                if (Input::has('FirstMarker')) {
                    $array["Supervisor"] = Input::get("FirstMarker");
                }
                if (Input::has('SecondMarker')) {
                    $array["SecondMarker"] = Input::get("SecondMarker");
                }
                $user->student->courses()->attach($id, $array);
            }
        return $this->students($id);
    }

    public function updateStudent($id)
    {
        $student = User::find($id);

        $student->firstname = Input::get('first_name');
        $student->lastname = Input::get('last_name');
        $student->username = Input::get('username');
        $student->email = Input::get('email');
        $student->Supervisor = Input::get('Supervisor');
        $student->SecondMarker = Input::get('SecondMarker');

        $student->save();

        return View::make('/editstudents')->with(
            array('course' => $id));
    }

    public function staff($id)
    {
        $course = Course::find($id)->with('staff')->first();
        return View::make('coursestaff')->with(
            array('course' => $course));
    }

    public function postStaff($id)
    {
        if (Input::has("Add"))
            foreach (Input::get("Add") as $remove) {
                $sid = $remove["staff_id"];
                $role = $remove["staff_role"];
                User::find($sid)->staffCourses()->attach($id,
                    array('role' => $role));
            }
        if (Input::has("Remove"))
            foreach (Input::get("Remove") as $remove) {
                User::find($remove)->staffCourses()->detach($id);
            }
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $course = Course::find($id)
            ->with(array('staff', 'deadlines'))
            ->first();
        $meetings = Meeting::withStudent(Auth::user(), $course)->sort()->take(5)->get();
        $meetings_count = Meeting::withStudent(Auth::user(), $course)->sort()->count();
        foreach ($course->students as &$student) {
            $student->Supervisor = User::find($student->Supervisor);
        }
        return View::make('course')->with(
            array('course' => $course,
                'meetings' => $meetings,
                'meetings_count' => $meetings_count));
    }

    public function get($id)
    {
        return $course = Course::find($id)->with(array('staff', 'deadlines', 'students', 'students.user'))->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
