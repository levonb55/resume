<?php

namespace App\Http\Controllers;

use App\Models\Experience;
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
                'title' => 'nullable|string|min:2|max:255',
//                'employer' => 'required_with:title|string|min:2|max:255',
                'employer' => 'required_with:title',
                'city' => 'nullable|string|min:2|max:255',
                'state' => 'nullable|string|min:2|max:255',
//                'start_date' => 'required_with:title|date',
                'start_date' => 'required_with:title',
                'end_date' => 'nullable|date|after:start_date',
                'description' => 'nullable|string|min:10|max:1000'
            ]);

            if($validator->fails()) {
                $errors['experience'.$i] = $validator->getMessageBag()->toArray();
            }
        }

        if(count($errors)) {
            return response()->json(['errors' => $errors], 422);
        } elseif ($request->input('experience1')['title']) {

            for($i = 1; $i <= $inputQuantity; $i++) {
                Experience::create([
                    'user_id' => auth()->id(),
                    'title' => $request->input('experience'.$i)['title'],
                    'employer' => $request->input('experience'.$i)['employer'],
                    'city' => $request->input('experience'.$i)['city'],
                    'state' => $request->input('experience'.$i)['state'],
                    'start_date' => $request->input('experience'.$i)['start_date'],
                    'end_date' => $request->input('experience'.$i)['end_date'],
                    'description' => $request->input('experience'.$i)['description']
                ]);
            }

            return response()->json('Success');
        } else {
            return response()->json('Success');
        }

    }
}
