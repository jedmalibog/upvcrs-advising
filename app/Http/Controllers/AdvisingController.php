<?php

namespace App\Http\Controllers;

use DB;
use App\Subject_offerings;
use App\Student_subjects;

use Illuminate\Http\Request;

class AdvisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$subjects = DB::table('subject_offerings')->get();*/

        $subjects = Subject_offerings::all();
        return view('advise', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        
        $grades = DB::table('student_subjects')
                    ->join('class_offerings', 'student_subjects.subject_id', '=', 'class_offerings.subject_id')
                    ->join('subject_offerings', 'class_offerings.subject_id', '=', 'subject_offerings.id')
                    ->select('student_subjects.subject_id AS id', 'name', 'grade', 'credits', 'academic_year', 'semester')
                    ->distinct()
                    ->where('student_id', $id)
                    ->get();

        return view('advise', compact('grades'));


        /*$students = Student_subjects::where('student_id', $id)->get();


        return view('advise', compact('students'));*/
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
