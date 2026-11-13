<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function edit()
    {
        $contact = Contact::first();

        if (!$contact) {
            return redirect()->back()->with(
                'error',
                'Contact page data not found.'
            );
        }

        return view('backend.staticpages.contact-us', compact('contact'));
    }

    public function update(Request $request)
    {
        $contact = Contact::first();

        if (!$contact) {
            return redirect()->back()->with(
                'error',
                'Contact page record not found.'
            );
        }

        // Validate all fields
        $validated = $request->validate([

            'contact_title' => 'required|string',
            'contact_description' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',

            'meta_title' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_description' => 'required|string',
        ]);

        DB::beginTransaction();

        try {

            // Update all text fields
            $fields = [
                'contact_title',
                'contact_description',
                'address',
                'email',
                'phone',

                'meta_title',
                'meta_keywords',
                'meta_description',
            ];


            foreach ($fields as $field) {
                $contact->$field = $validated[$field];
            }

            // Save database record
            $contact->save();

            DB::commit();

            return redirect()->back()->with(
                'success',
                'Contact page updated successfully!'
            );
        } catch (\Throwable $e) {

            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
