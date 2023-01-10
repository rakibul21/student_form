<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCertificate extends Model
{
    use HasFactory;

    public static $studentCertificate, $image, $imageName, $imageUrl, $directory, $extension ;

    public static function getImageUrl($certificate)
    {

        self::$extension =$certificate->getClientOriginalName();
        self::$directory = "student-certificates/";
        $certificate->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newStudentCertificate($request, $id)
    {
        foreach ($request->certificate as $certificate)
        {
            self::$studentCertificate = new StudentCertificate();
            self::$studentCertificate->student_id = $id;
            self::$studentCertificate->certificate = self::getImageUrl($certificate);
            self::$studentCertificate->save();
        }
    }
}
