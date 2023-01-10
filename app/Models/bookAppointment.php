<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookAppointment extends Model
{
    use HasFactory;

    protected $table = "bookappoint_tbl";
    protected $fillable = ['user_id', 'doc_id', 'appointment_date', 'appointment_time', 'appointment_reason', 'Status'];
}