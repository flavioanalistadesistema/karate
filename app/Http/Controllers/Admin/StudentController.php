<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'teste aqui';
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
        $data = $request->all();
        $student = new Student();
        $student->name_student = $data['name_student'];
        $student->date_brith_student = date('Y-m-d H:i:s', strtotime($data['date_brith_student']));
        $student->rg_student = $data['rg_student'];
        $student->cpf_student = $data['cpf_student'];
        $student->address_student = $data['address_student'];
        $student->address_number_student = $data['address_number_student'];
        $student->phone = $data['phone'];
        $student->email = $data['email'];
        $student->modalities_student = $data['modalities_student'];
        $student->teacher_student = $data['teacher_student'];
        $student->schedule_student = $data['schedule_student'];
        $student->date_start_student = date('Y-m-d H:i:s', strtotime($data['date_start_student']));
        $student->date_payday_student = date('Y-m-d H:i:s', strtotime($data['date_payday_student']));
        $student->tax = $data['tax'];
        $response = $student->save();

        if($response){
            return redirect('/');
        }else{
            echo 'Deu ruim';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
