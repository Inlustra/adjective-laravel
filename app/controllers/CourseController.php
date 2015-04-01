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
        $meetings = Meeting::withStudent(Auth::user(), $course)->sort()->get();
        $meetings_count = Meeting::withStudent(Auth::user(), $course)->sort()->count();
        foreach ($course->students as &$student) {
            $student->Supervisor = User::find($student->Supervisor);
        }
        return View::make('course')->with(
            array('course' => $course,
                'meetings' => $meetings,
                'meetings_count' => $meetings_count));
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
