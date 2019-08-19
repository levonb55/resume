<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
{
    public function store(Request $request) {
        return response()->json($request->all());
        $inputQuantity = count($request->all()) - 1;
        $errors = [];

        for($i = 1; $i <= $inputQuantity; $i++) {
            $validator = Validator::make($request->input('experience'.$i), [
                'title' => 'required|string|min:2|max:255',
                'employer' => 'required|string|min:2|max:255',
                'city' => 'nullable|string|min:2|max:255',
                'state' => 'nullable|string|min:2|max:255',
                'start_date' => 'required|date',
                'end_date' => 'nullable|date|after:start_date',
                'description' => 'nullable|string|min:10|max:1000'
            ]);

            if($validator->errors()->all()) {
                $errors['experience'.$i][] = $validator->errors()->all();
            }
        }

//        return $errors;
        $arr = [
            'fname' => 'John',
            'lname' => 'Doe'
        ];
        var_dump($errors);
        return response()->json($errors);


        $arr = [
          'fname' => 'John',
          'lname' => 'Doe'
        ];
        return response()->json($arr);
        if(count($errors)) {
            return response()->json($errors);
        } else {
            return response()->json('Success');
        }

//        $validator = Validator::make($request->all(), [
//            'title' => 'required|string|min:2|max:255',
//            'employer' => 'required|string|min:2|max:255',
//            'city' => 'nullable|string|min:2|max:255',
//            'state' => 'nullable|string|min:2|max:255',
//            'start' => 'required|date',
//            'end' => 'nullable|date',
//            'description' => 'nullable|string|min:10|max:1000'
//        ]);

        if (!$validator) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }

        return response()->json($request->all());
    }
}
