<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::first();

        if (!$about) {
            return redirect()->back()->with(
                'error',
                'About page data not found.'
            );
        }

        return view('backend.staticpages.about', compact('about'));
    }

    public function update(Request $request)
    {
        $about = About::first();

        if (!$about) {
            return redirect()->back()->with(
                'error',
                'About page record not found.'
            );
        }

        // Validate all fields
        $validated = $request->validate([

            'banner_title' => 'required|string',
            'banner_heading' => 'required|string',
            'banner_alt_text' => 'required|string',
            'banner_subheading' => 'required|string',

            'banner_image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1024',

            'about_title' => 'required|string',
            'about_heading' => 'required|string',
            'about_alt_text' => 'required|string',
            'about_subheading' => 'required|string',
            'about_title_2' => 'required|string',
            'about_heading_2' => 'required|string',
            'about_description' => 'required|string',

            'about_image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1024',

            'our_mission_title' => 'required|string',
            'our_description' => 'required|string',

            'what_we_do_title' => 'required|string',
            'what_we_do_heading' => 'required|string',
            'what_we_do_description' => 'required|string',

            'our_pro_title' => 'required|string',
            'our_pro_heading' => 'required|string',
            'our_pro_description' => 'required|string',
            'our_pro_tagline' => 'required|string',

            'meta_title' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_description' => 'required|string',
        ]);

        $uploadPath = public_path('uploads/about');

        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        DB::beginTransaction();

        try {

            // Update all text fields
            $fields = [
                'banner_title',
                'banner_heading',
                'banner_alt_text',
                'banner_subheading',

                'about_title',
                'about_heading',
                'about_alt_text',
                'about_subheading',
                'about_title_2',
                'about_heading_2',
                'about_description',

                'our_mission_title',
                'our_description',

                'what_we_do_title',
                'what_we_do_heading',
                'what_we_do_description',

                'our_pro_title',
                'our_pro_heading',
                'our_pro_description',
                'our_pro_tagline',

                'meta_title',
                'meta_keywords',
                'meta_description',
            ];

            foreach ($fields as $field) {
                $about->$field = $validated[$field];
            }

            // Banner image upload
            if ($request->hasFile('banner_image')) {

                $file = $request->file('banner_image');

                $filename = 'banner_' . uniqid() . '.' .
                    $file->getClientOriginalExtension();

                $file->move($uploadPath, $filename);

                $oldImage = $about->banner_image;

                $about->banner_image = 'uploads/about/' . $filename;

                if ($oldImage && File::exists(public_path($oldImage))) {
                    File::delete(public_path($oldImage));
                }
            }

            // About image upload
            if ($request->hasFile('about_image')) {

                $file = $request->file('about_image');

                $filename = 'about_' . uniqid() . '.' .
                    $file->getClientOriginalExtension();

                $file->move($uploadPath, $filename);

                $oldImage = $about->about_image;

                $about->about_image = 'uploads/about/' . $filename;

                if ($oldImage && File::exists(public_path($oldImage))) {
                    File::delete(public_path($oldImage));
                }
            }

            // Save database record
            $about->save();

            DB::commit();

            return redirect()->back()->with(
                'success',
                'About page updated successfully!'
            );

        } catch (\Throwable $e) {

            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
