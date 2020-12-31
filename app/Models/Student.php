<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
     /**
     * The table associated with the model table STUDENTS.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The primary key associated with the table ID.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_student',
        'date_brith_student',
        'rg_student',
        "cpf_student",
        'address_student',
        'address_number_student',
        'phone',
        'email',
        'modalities_student',
        'teacher_student',
        'schedule_student',
        'date_start_student',
        'date_payday_student',
        'tax'
    ];
}
