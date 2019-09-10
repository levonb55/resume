<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    public function index() {
        return view('education.index');
    }

    public function create() {
        return view('education.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $errors = [];

        foreach ($request->all() as $key => $education) {
            $validator = Validator::make($education, [
                'school' => 'required|string|min:2|max:255',
                'location' => 'required|string|min:2|max:255',
                'degree' => 'required|string|min:2|max:255',
                'study' => 'required|string|min:2|max:255',
                'graduation_year' => 'nullable|integer',
                'description' => 'nullable|string|min:10|max:1000'
            ]);

            if ($validator->fails()) {
                $errors[$key] = $validator->getMessageBag()->toArray();
            }
        }

        if (count($errors)) {

            return response()->json(['errors' => $errors], 422);

        } else {
            $educationCount = auth()->user()->education->count();
            foreach($request->all() as $education) {
                auth()->user()->education()->create([
                    'school' => $education['school'],
                    'location' => $education['location'],
                    'degree' => $education['degree'],
                    'study' => $education['study'],
                    'graduation_year' => $education['graduation_year'],
                    'description' => $education['description'],
                    'order' => ++$educationCount
                ]);
            }

            return response()->json('Success');
        }
    }
}
