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
        $experiences = auth()->user()->experiences()->orderBy('order')->get();
        return view('experiences.index', compact('experiences'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $experienceCount = auth()->user()->experiences->count();
        return view('experiences.create', compact('experienceCount'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $collection = collect($request->all());
        $experiences = $collection->slice(1)->all();
        $errors = [];

        foreach ($experiences as $key => $experience) {
            $validator = $this->makeValidation($experience);

            if ($validator->fails()) {
                $errors[$key] = $validator->getMessageBag()->toArray();
            }
        }

        if (count($errors)) {

            return response()->json(['errors' => $errors], 422);

        } else {
            $experienceCount = auth()->user()->experiences->count();
            foreach($experiences as $experience) {
                Experience::create([
                    'user_id' => auth()->id(),
                    'title' => $experience['title'],
                    'employer' => $experience['employer'],
                    'city' => $experience['city'],
                    'state' => $experience['state'],
                    'start_date' => $experience['start_date'],
                    'end_date' => $experience['end_date'] ?? null,
                    'description' => $experience['description'],
                    'order' => ++$experienceCount
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
        $this->makeValidation($request->all())->validate();

        $experience->update(request(['title', 'employer', 'city', 'state', 'start_date', 'end_date', 'description']));

        return redirect()->route('experience.index');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return back();
    }

    public function makeValidation($experience)
    {
        return Validator::make($experience, [
            'title' => 'required|string|min:2|max:255',
            'employer' => 'required|string|min:2|max:255',
            'city' => 'required|string|min:2|max:255',
            'state' => 'required|string|min:2|max:255',
            'start_date' => 'required|date',
            'end_date' => 'sometimes|nullable|date|after:start_date',
            'description' => 'nullable|string|min:10|max:1000'
        ]);
    }

    public function reorderExperience(Request $request)
    {
        $orders = $request->input('order');
        if ($orders) {
            foreach ($orders as $order) {
                if ($exp = Experience::where('id', $order['id'])->first()) {
                    $exp->order = intval($order['order']);
                    $exp->save();
                }
            }
        }

        return response()->json('Reordered');
    }
}
