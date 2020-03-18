<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function eta(Request $request) {
        
        $students = config('students.students');
        $data = $request->all();


        $results = [
            'error' => '',
            'response' => []
        ];

        // dd($results);

        if($data['eta'] == 'Tutti') {
            $results['response'] = $students;
            return response()->json($results);
        } else {    

                foreach ($students as $student) {
                    if($data['eta'] == $student['eta']) {
                        $results['response'][] = $student;
                    }
                }
                return response()->json($results);
                // $results['error'] = 'Non ci sono studenti con quell\'età';
                // return response()->json($results);

        }

      

        

        



    }
}
