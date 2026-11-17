<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    // Manage Banner
    public function index()
    {
        $banners = Banner::orderBy('id', 'desc')->get();

        return view('backend.banner.index', compact('banners'));
    }

    // Add Banner Page
    public function addBanner()
    {
        return view('backend.banner.add-banner');
    }

    // Store Banner
    public function storeBanner(Request $request)
    {
        // Validate form data
        $request->validate([
            'banner_title'        => 'required|string',
            'banner_link'          => 'required|string',
            'banner_alt_text'     => 'required|string',
            'banner_image'      => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1024',
        ]);

        // Upload Blog Image
        $imagePath = null;

        if ($request->hasFile('banner_image')) {

            $image = $request->file('banner_image');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $uploadPath = public_path('uploads/banner');

            // Create folder if not exists
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Move image to folder
            $image->move($uploadPath, $imageName);

            $imagePath = 'uploads/banner/' . $imageName;
        }

        // Save Blog Data
        Banner::create([

            'banner_title'        => $request->banner_title,
            'banner_link'          => $request->banner_link,
            'banner_alt_text'      => $request->banner_alt_text,
            'banner_image'        => $imagePath,
            'status'       => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->route('backend.manage-banner')
            ->with('success', 'Banner added successfully!');
    }

    // View Banner
    public function viewBanner($id)
    {
        $banner = Banner::findOrFail($id);

        return view('backend.banner.view-banner', compact('banner'));
    }

    // Edit Banner
    public function editBanner($id)
    {
        $banner = Banner::findOrFail($id);

        return view('backend.banner.edit-banner', compact('banner'));
    }

    // Update Banner
    public function updateBanner(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        // Validate form data
        $request->validate([
            'banner_title'       => 'required|string',
            'banner_link'         => 'required|string',
            'banner_alt_text'    => 'required|string',
            'banner_image'     => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1024',
        ]);

        // Existing image
        $imagePath = $banner->banner_image;

        // Upload new image if selected
        if ($request->hasFile('banner_image')) {

            $image = $request->file('banner_image');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $uploadPath = public_path('uploads/banner');

            // Create folder if not exists
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            // Upload image
            $image->move($uploadPath, $imageName);

            // Delete old image
            if ($banner->banner_image && file_exists(public_path($banner->banner_image))) {
                unlink(public_path($banner->blog_image));
            }

            $imagePath = 'uploads/banner/' . $imageName;
        }

        // Update banner data
        $banner->update([
            'banner_title'       => $request->banner_title,
            'banner_link'         => $request->banner_link,
            'banner_alt_text'     => $request->banner_alt_text,
            'banner_image'       => $imagePath,
            'status'      => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->route('backend.manage-banner')
            ->with('success', 'Banner updated successfully!');
    }
    // Delete Banner
    public function deleteBanner($id)
    {
        try {

            // Find Banner
            $banner = Banner::findOrFail($id);

            // Delete Banner Image
            if (!empty($banner->banner_image)) {

                $imagePath = public_path($banner->banner_image);

                if (file_exists($imagePath) && is_file($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Delete Banner Record
            $banner->delete();

            return redirect()->route('backend.manage-banner')
                ->with('success', 'Banner deleted successfully!');
        } catch (\Exception $e) {

            return redirect()->route('backend.manage-banner')
                ->with('error', 'Something went wrong! Banner could not be deleted.');
        }
    }
}
