<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GeneralSettingController extends Controller
{
    public function edit()
    {
        $generals = GeneralSetting::first();

        if (!$generals) {
            return redirect()->back()->with(
                'error',
                'General Setting page data not found.'
            );
        }

        return view('backend.WebsiteSetting.general-setting', compact('generals'));
    }


    public function update(Request $request)
    {
        $generals = GeneralSetting::first();

        if (!$generals) {
            return redirect()->back()->with(
                'error',
                'General Setting page record not found.'
            );
        }

        // Validate all fields
        $validated = $request->validate([

            'brand_name' => 'required|string',
            'website_url' => 'required|string',
            'Website_currecry' => 'required|string',
            'copy_rights' => 'required|string',

            'logo_alt_tag' => 'required|string',
            'website_logo' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1024',

            'favicon_alt_tag' => 'required|string',
            'website_favicon' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1024',
        ]);

        $uploadPath = public_path('uploads/logo');

        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        DB::beginTransaction();

        try {

            // Update all text fields
            $fields = [
                'brand_name',
                'website_url',
                'Website_currecry',
                'copy_rights',
                'logo_alt_tag',
                'favicon_alt_tag',
            ];

            foreach ($fields as $field) {
                $generals->$field = $validated[$field];
            }

            // Website logo upload
            if ($request->hasFile('website_logo')) {

                $file = $request->file('website_logo');

                $filename = 'logo_' . uniqid() . '.' .
                    $file->getClientOriginalExtension();

                $file->move($uploadPath, $filename);

                $oldImage = $generals->website_logo;

                $generals->website_logo = 'uploads/logo/' . $filename;

                if ($oldImage && File::exists(public_path($oldImage))) {
                    File::delete(public_path($oldImage));
                }
            }

            // Website favicon upload
            if ($request->hasFile('website_favicon')) {

                $file = $request->file('website_favicon');

                $filename = 'favicon_' . uniqid() . '.' .
                    $file->getClientOriginalExtension();

                $file->move($uploadPath, $filename);

                $oldImage = $generals->website_favicon;

                $generals->website_favicon = 'uploads/logo/' . $filename;

                if ($oldImage && File::exists(public_path($oldImage))) {
                    File::delete(public_path($oldImage));
                }
            }

            // Save database record
            $generals->save();

            DB::commit();

            return redirect()->back()->with(
                'success',
                'General Settings updated successfully!'
            );
        } catch (\Throwable $e) {

            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
