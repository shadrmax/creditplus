<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{

    public function getCourseIsNBU(){

        $data = file_get_contents('https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11');
        print_r($data);

    }

}
