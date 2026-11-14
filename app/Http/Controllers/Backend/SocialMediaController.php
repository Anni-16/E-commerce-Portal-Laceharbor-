<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocialMediaController extends Controller
{
     public function edit()
    {
        $socialMedia = SocialMedia::first();

        if (!$socialMedia) {
            return redirect()->back()->with(
                'error',
                'Social media data not found.'
            );
        }

        return view('backend.staticpages.social-media', compact('socialMedia'));
    }

       public function update(Request $request)
    {
        $socialMedia = SocialMedia::first();

        if (!$socialMedia) {
            return redirect()->back()->with(
                'error',
                'Social media record not found.'
            );
        }

        // Validate all fields
        $validated = $request->validate([

            'instagram' => 'nullable|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'threads' => 'nullable|string',
            'pinterest' => 'nullable|string',
        ]);

        DB::beginTransaction();

        try {

            // Update all text fields
            $fields = [
                'instagram',
                'facebook',
                'twitter',
                'threads',
                'pinterest',
            ];


            foreach ($fields as $field) {
                $socialMedia->$field = $validated[$field];
            }

            // Save database record
            $socialMedia->save();

            DB::commit();

            return redirect()->back()->with(
                'success',
                'Social media updated successfully!'
            );
        } catch (\Throwable $e) {

            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
