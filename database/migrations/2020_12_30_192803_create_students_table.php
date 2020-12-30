<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_student', 100);
            $table->date('date_brith_student');
            $table->string('rg_student');
            $table->string('cpf_student');
            $table->string('address_student');
            $table->string('address_number_student');
            $table->string('phone', 11);
            $table->string('email')->unique();
            $table->string('modalities_student');
            $table->string('teacher_student');
            $table->string('schedule_student');
            $table->date('date_start_student');
            $table->date('date_payday_student');
            $table->float('tax', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
