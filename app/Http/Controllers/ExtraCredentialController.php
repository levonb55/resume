<?php

namespace App\Http\Controllers;

use App\Models\ExtraCredential;
use Illuminate\Http\Request;

class ExtraCredentialController extends Controller
{

    const EXTRA = 1;
    const NON_EXTRA = 0;

    public function addCustomSection(Request $request)
    {
        $section = auth()->user()->extraCredentials()->create([
            'title' => $request->section,
            'extra' => self::NON_EXTRA
        ]);

        return response()->json(['id' => $section->id, 'title' =>  $section->title]);
    }

    public function destroy(ExtraCredential $custom)
    {
        $custom->delete();
        return response()->json('Success');
    }

}
