<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SizeGuide;
use Illuminate\Http\Request;

class SizeGuideController extends Controller
{
    // Manage Size Guide
    public function index()
    {
        $sizeguides = SizeGuide::orderBy('id', 'desc')->get();

        return view('backend.ProductSetting.SizeGuide.index', compact('sizeguides'));
    }

    // Add Size Guide
    public function addSizeGuide()
    {
        return view('backend.ProductSetting.SizeGuide.add-sizeguide');
    }

    // Store Size Guide
    public function storeSizeGuide(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'images_alt_tag' => 'required|string',
            'images' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1024',
        ]);

        $imagePath = null;

        if ($request->hasFile('images')) {

            $image = $request->file('images');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $uploadPath = public_path('uploads/SizeGuide');

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $image->move($uploadPath, $imageName);

            $imagePath = 'uploads/SizeGuide/' . $imageName;
        }

        SizeGuide::create([
            'name' => $request->name,
            'images_alt_tag' => $request->images_alt_tag,
            'images' => $imagePath,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->route('backend.manage-size-guide')
            ->with('success', 'Size Guide added successfully!');
    }

    // View Size Guide
    public function viewSizeGuide($id)
    {
        $sizeguide = SizeGuide::findOrFail($id);

        return view('backend.ProductSetting.SizeGuide.view-sizeguide', compact('sizeguide'));
    }

    // Edit Size Guide
    public function editSizeGuide($id)
    {
        $sizeguide = SizeGuide::findOrFail($id);

        return view('backend.ProductSetting.SizeGuide.edit-sizeguide', compact('sizeguide'));
    }

    // Update Size Guide
    public function updateSizeGuide(Request $request, $id)
    {
        $sizeguide = SizeGuide::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'images_alt_tag' => 'required|string',
            'images' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1024',
        ]);

        // Existing image
        $imagePath = $sizeguide->images;

        // Upload new image if selected
        if ($request->hasFile('images')) {

            $image = $request->file('images');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $uploadPath = public_path('uploads/SizeGuide');

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $image->move($uploadPath, $imageName);

            // Delete old image
            if ($sizeguide->images && file_exists(public_path($sizeguide->images))) {
                unlink(public_path($sizeguide->images));
            }

            $imagePath = 'uploads/SizeGuide/' . $imageName;
        }

        // Update Size Guide Data
        $sizeguide->update([
            'name' => $request->name,
            'images_alt_tag' => $request->images_alt_tag,
            'images' => $imagePath,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->route('backend.manage-size-guide')
            ->with('success', 'Size Guide updated successfully!');
    }

    // Delete Size Guide
    public function deleteSizeGuide($id)
    {
        try {

            // Find Size Guide
            $sizeguide = SizeGuide::findOrFail($id);

            // Delete Size Guide Image
            if (!empty($sizeguide->images)) {

                $imagePath = public_path($sizeguide->images);

                if (file_exists($imagePath) && is_file($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Delete Size Guide Record
            $sizeguide->delete();

            return redirect()->route('backend.manage-size-guide')
                ->with('success', 'Size Guide deleted successfully!');

        } catch (\Exception $e) {

            return redirect()->route('backend.manage-size-guide')
                ->with('error', 'Something went wrong! Size Guide could not be deleted.');
        }
    }
}
