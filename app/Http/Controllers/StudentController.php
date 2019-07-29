<?php
namespace App\Http\Controllers;
use Illuminate\Support\Str;


class StudentController extends Controller
{
    public function test1()
    {
//        $student=DB::select("select * from student where id>?",[1001]);
//        dd($student);

//        $bool=DB::insert("insert into student(name,age) values (?,?)",['Hadoop',20]);
//        var_dump($bool);
        //更新
//        $bool=DB::update("update student set age=? where name =?",[18,'Hadoop']);
//        var_dump($bool);
//        $result=DB::delete("delete from student where id=?",[1002]);
//        dd($result);
        echo Str::lower("I am a string");
        echo "<br>";
        echo Str::upper("I am a string");
        echo "<br>";
        echo Str::title("I am a string");
        echo "<br>";
        echo Str::random(32);
        echo "<br>";
        echo Str::singular("users");
        echo "<br>";
        echo Str::plural("cat");
        echo "<br>";
    }
}