<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static $student, $image, $imageName, $imageUrl, $directory, $extension ;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension =self::$image->getClientOriginalExtension();
        self::$imageName = strtolower(str_replace(' ','-', $request->name)).'-'.$request->mobile.self::$extension;
        self::$directory = "student-images/";
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function deleteStudent($id)
    {
        self::$student = Student::find($id);
        if (file_exists(self::$student->image))
        {
            unlink(self::$student->image);
        }
        self::$student->delete();
    }

    public static function newStudent($request)
    {
        self::$student = new Student();
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->password = bcrypt($request->password);
        self::$student->mobile = $request->mobile;
        self::$student->image = self::getImageUrl($request);
        self::$student->save();
        return self::$student;
    }

    public static function updateStudent($request, $id)
    {
        self::$student = Student::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$student->image))
            {
                unlink(self::$student->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$student->image;
        }
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->password = bcrypt($request->password);
        self::$student->mobile = $request->mobile;
        self::$student->image = self::$imageUrl;
        self::$student->save();

    }
}
