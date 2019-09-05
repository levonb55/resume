<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $experiences = auth()->user()->experiences;
        return view('experiences.index', compact('experiences'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $experienceCount = Experience::countExperience();
        return view('experiences.create', compact('experienceCount'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) {
        $collection = collect($request->all());
        $experiences = $collection->slice(1)->all();
        $errors = [];

        foreach($experiences as $key => $experience) {
            $validator = Validator::make($experience, [
                'title' => 'required|string|min:2|max:255',
                'employer' => 'required|string|min:2|max:255',
                'city' => 'required|string|min:2|max:255',
                'state' => 'required|string|min:2|max:255',
                'start_date' => 'required|date',
                'end_date' => 'sometimes|nullable|date|after:start_date',
                'description' => 'required|string|min:10|max:1000'
            ]);

            if($validator->fails()) {
                $errors[$key] = $validator->getMessageBag()->toArray();
            }
        }

        if(count($errors)) {

            return response()->json(['errors' => $errors], 422);

        } else {
            foreach($experiences as $experience) {
                Experience::create([
                    'user_id' => auth()->id(),
                    'title' => $experience['title'],
                    'employer' => $experience['employer'],
                    'city' => $experience['city'],
                    'state' => $experience['state'],
                    'start_date' => $experience['start_date'],
                    'end_date' => $experience['end_date'] ?? null,
                    'description' => $experience['description']
                ]);
            }

            return response()->json('Success');
        }

    }

    public function edit(Experience $experience)
    {
        return view('experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:2|max:255',
            'employer' => 'required|string|min:2|max:255',
            'city' => 'required|string|min:2|max:255',
            'state' => 'required|string|min:2|max:255',
            'start_date' => 'required|date',
            'end_date' => 'sometimes|nullable|date|after:start_date',
            'description' => 'required|string|min:10|max:1000'
        ]);

        $experience->update(request(['title', 'employer', 'city', 'state', 'start_date', 'end_date', 'description']));

        return redirect()->route('experience.index');
    }
}
