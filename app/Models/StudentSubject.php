<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    use HasFactory;
    private static $studentSubject;

    public static function newStudentSubject($request, $id)
    {
        foreach ($request->subject as $item)
        {
            self::$studentSubject = new StudentSubject();
            self::$studentSubject->student_id = $id;
            self::$studentSubject->subject_id = $item;
            self::$studentSubject->save();
        }
    }
}
