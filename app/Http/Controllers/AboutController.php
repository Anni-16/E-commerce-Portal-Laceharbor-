<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    // Edit Page
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

    // Update Function
    public function update(Request $request)
    {
        $about = About::first();

        if (!$about) {
            return redirect()->back()->with(
                'error',
                'About page data not found.'
            );
        }

        // Validation
        $validated = $request->validate([

            'banner_title' => 'required|string',
            'banner_heading' => 'required|string',
            'banner_subheading' => 'required|string',
            'banner_alt_text' => 'required|string',

            'about_title' => 'required|string',
            'about_heading' => 'required|string',
            'about_alt_text' => 'required|string',
            'about_subheading' => 'required|string',
            'about_title_2' => 'required|string',
            'about_heading_2' => 'required|string',
            'about_description' => 'required|string',

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

            'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',

            'about_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
        ]);

        // Remove image fields from text data
        unset($validated['banner_image']);
        unset($validated['about_image']);

        // Upload Folder
        $uploadPath = public_path('upload/about');

        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        $oldBannerImage = $about->banner_image;
        $oldAboutImage = $about->about_image;

        $newBannerImage = null;
        $newAboutImage = null;

        try {

            // Banner Image Upload
            if ($request->hasFile('banner_image')) {

                $bannerFile = $request->file('banner_image');

                $bannerName = 'banner_' . Str::uuid() . '.' .
                    $bannerFile->getClientOriginalExtension();

                $bannerFile->move($uploadPath, $bannerName);

                $newBannerImage = 'upload/about/' . $bannerName;

                $validated['banner_image'] = $newBannerImage;
            }

            // About Image Upload
            if ($request->hasFile('about_image')) {

                $aboutFile = $request->file('about_image');

                $aboutName = 'about_' . Str::uuid() . '.' .
                    $aboutFile->getClientOriginalExtension();

                $aboutFile->move($uploadPath, $aboutName);

                $newAboutImage = 'upload/about/' . $aboutName;

                $validated['about_image'] = $newAboutImage;
            }

            // Database Update
            DB::transaction(function () use ($about, $validated) {

                $about->fill($validated);

                $about->save();

            });

            // Delete Old Banner Image
            if (
                $newBannerImage &&
                $oldBannerImage &&
                str_starts_with($oldBannerImage, 'upload/about/')
            ) {
                $oldPath = public_path($oldBannerImage);

                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            // Delete Old About Image
            if (
                $newAboutImage &&
                $oldAboutImage &&
                str_starts_with($oldAboutImage, 'upload/about/')
            ) {
                $oldPath = public_path($oldAboutImage);

                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            return redirect()
                ->route('backend.edit-about-page')
                ->with('success', 'About Us page updated successfully!');

        } catch (\Throwable $e) {

            // Remove newly uploaded images if update fails
            if ($newBannerImage && File::exists(public_path($newBannerImage))) {
                File::delete(public_path($newBannerImage));
            }

            if ($newAboutImage && File::exists(public_path($newAboutImage))) {
                File::delete(public_path($newAboutImage));
            }

            report($e);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Something went wrong while updating About Us page.');
        }
    }
}
