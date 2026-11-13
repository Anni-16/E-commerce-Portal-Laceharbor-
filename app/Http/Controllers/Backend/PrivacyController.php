<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrivacyController extends Controller
{
    public function edit()
    {
        $privacy = PrivacyPolicy::first();

        if (!$privacy) {
            return redirect()->back()->with(
                'error',
                'Privacy policy data not found.'
            );
        }

        return view('backend.staticpages.privacy-policy', compact('privacy'));
    }

    public function update(Request $request)
    {
        $privacy = PrivacyPolicy::first();

        if (!$privacy) {
            return redirect()->back()->with(
                'error',
                'Privacy policy record not found.'
            );
        }

        // Validate all fields
        $validated = $request->validate([

            'privacy_title' => 'required|string',
            'privacy_date' => 'required|string',
            'privacy_description' => 'required|string',

            'meta_title' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_description' => 'required|string',
        ]);

        DB::beginTransaction();

        try {

            // Update all text fields
            $fields = [
                'privacy_title',
                'privacy_date',
                'privacy_description',

                'meta_title',
                'meta_keywords',
                'meta_description',
            ];


            foreach ($fields as $field) {
                $privacy->$field = $validated[$field];
            }

            // Save database record
            $privacy->save();

            DB::commit();

            return redirect()->back()->with(
                'success',
                'Privacy policy updated successfully!'
            );
        } catch (\Throwable $e) {

            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
