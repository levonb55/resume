<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    public function index() {
        $education = auth()->user()->education()->orderBy('order')->get();
        return view('education.index', compact('education'));
    }

    public function create() {
        $educationCount = auth()->user()->education->count();
        return view('education.create', compact('educationCount'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $errors = [];

        foreach ($request->all() as $key => $education) {
            $validator = $this->makeValidation($education);

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

    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $this->makeValidation($request->all())->validate();

        $education->update(request(['school', 'location', 'degree', 'study', 'graduation_year', 'description']));

        return redirect()->route('education.index');
    }

    public function destroy(Education $education)
    {
        $education->delete();
        return back();
    }

    public function makeValidation($education)
    {
        return Validator::make($education, [
            'school' => 'required|string|min:2|max:255',
            'location' => 'required|string|min:2|max:255',
            'degree' => 'required|string|min:2|max:255',
            'study' => 'required|string|min:2|max:255',
            'graduation_year' => 'nullable|integer',
            'description' => 'nullable|string|min:10|max:1000'
        ]);
    }

    public function reorderEducation(Request $request)
    {
        $orders = $request->input('order');
        if ($orders) {
            foreach ($orders as $order) {
                if ($exp = Education::where('id', $order['id'])->first()) {
                    $exp->order = intval($order['order']);
                    $exp->save();
                }
            }
        }

        return response()->json('Reordered');
    }
}
