<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) {

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

            if($validator->fails()) {
                $errors['experience'.$i] = $validator->getMessageBag()->toArray();
            }
        }

        if(count($errors)) {
            return response()->json($errors);
        } else {
            return response()->json('Success');
        }

    }
}
