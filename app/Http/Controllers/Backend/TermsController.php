<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TermsServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TermsController extends Controller
{
     public function edit()
    {
        $terms = TermsServices::first();

        if (!$terms) {
            return redirect()->back()->with(
                'error',
                'Terms and conditions data not found.'
            );
        }

        return view('backend.staticpages.terms-conditions', compact('terms'));
    }

        public function update(Request $request)
    {
        $terms = TermsServices::first();

        if (!$terms) {
            return redirect()->back()->with(
                'error',
                'Terms and conditions record not found.'
            );
        }

        // Validate all fields
        $validated = $request->validate([

            'terms_title' => 'required|string',
            'terms_date' => 'required|string',
            'terms_description' => 'required|string',

            'meta_title' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_description' => 'required|string',
        ]);

        DB::beginTransaction();

        try {

            // Update all text fields
            $fields = [
                'terms_title',
                'terms_date',
                'terms_description',

                'meta_title',
                'meta_keywords',
                'meta_description',
            ];


            foreach ($fields as $field) {
                $terms->$field = $validated[$field];
            }

            // Save database record
            $terms->save();

            DB::commit();

            return redirect()->back()->with(
                'success',
                'Terms and conditions updated successfully!'
            );
        } catch (\Throwable $e) {

            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
