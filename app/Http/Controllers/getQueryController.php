<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class getQueryController extends Controller
{
    // public function index(){
    // 	$data = DB::table('students')->get();
    // 	return view('form/students', ['students'=> $data]);

    // }


    // public function index(){
    //     $email = DB::table('students')->where('name', 'Ajharul Islam')->value('email');
    //     echo $email;
    // }

    // public function index(){
    //     $names = DB::table('students')->pluck('name', 'email');
    //     print_r($names);
    // }

    // public function index(){
    //     $names = DB::table('students')->pluck('name','id');
    //     print_r($names);
    // }

    // public function index(){
    //     DB::table('students')->orderBy('id')->chunk(2, function ($students) {
    //         echo "<pre>";
    //         print_r($students);
    //         echo "</pre>";
    //     });
    // }


// public function index(){
//         $rows = DB::table('students')->distinct()->get(['name']);
//         foreach($rows as $row){
//         	echo $row->name . '<br>';
//         }
//         echo '<pre>';
//         print_r($rows);
//     }


// public function index(){

//         $query = DB::table('students')
//         	->join('contacts', 'students.id', '=', 'contacts.student_id')
//         	->select('students.id', 'phone','name','email')->get();
//         return view('student/studentlist', ['query'=>$query]);   
//     }

    // public function index(){

    //     $query = DB::table('students')
    //     	->leftjoin('contacts', 'students.id', '=', 'contacts.student_id')->select('students.id');
    //    	$rows = $query->addSelect('phone','name','email')->get();
    //     foreach($rows as $row){
    //     	echo $row->id . ' ';
    //     	echo $row->name . ' ';
    //     	echo $row->email . ' ';
    //     	echo $row->phone . '<br>';
    //     }
   
    // }


// public function index(){

//         $query = DB::table('students')
//         	->rightjoin('contacts', 'students.id', '=', 'contacts.student_id')->select('students.id');
//        	$rows = $query->addSelect('phone','name','email')->get();
//         foreach($rows as $row){
//         	echo $row->id . ' ';
//         	echo $row->name . ' ';
//         	echo $row->email . ' ';
//         	echo $row->phone . '<br>';
//         }
   
//     }

public function studentForm(){
	return view('student/studentform');
}
// public function store(Request $req){
// 	$data = $req->input();

	// if(DB::table("studentform")->insert([
	// 	'name'=>$req->name,
	// 	'email'=>$req->email,
	// 	'address'=>$req->address,
	// 	'city'=>$req->city,
	// 	'zip'=>$req->zip
	// ])){
	// echo "insert";
	// }


// }


public function store(Request $req){
		$id = DB::table('students')->insertGetId([
		'name'=>$req->name,
	]);
		DB::table('contacts')->insertGetId([
		'email'=>$req->email,
		'phone'=>$req->phone,
		'student_id'=>$id,
		]);

		if(DB::table('course_choice')->insert([
		'course_id'=>$req->course_name,
		'student_id'=>$id,
		])){
			echo 'insert';
		}
}



public function index(){

    $data = $query = DB::table('students')
            ->join('contacts', 'students.id', '=', 'contacts.student_id')
            ->get();
    return view('student/studentlist',['query'=>$query]);
    }



public function modify($id){
    $query = DB::table('students')
            ->join('contacts', 'students.id', '=', 'contacts.student_id')
            ->join('course_choice', 'students.id', '=', 'course_choice.student_id')
            ->where('students.id',$id)->first();
            // print_r($query);
        return view('student/studentedit', ['query'=>$query]);   
}

public function update(Request $req){
        DB::table('students')->where('id', $req->id)->update([
        'name'=>$req->name,
    ]);
        DB::table('contacts')->where('student_id', $req->id)->update([
        'email'=>$req->email,
        'phone'=>$req->phone,
        ]);

        if(DB::table('course_choice')->where('student_id', $req->id)->update([
        'course_id'=>$req->course_name,
        ])){
            echo 'insert';
        }
}




   
}
