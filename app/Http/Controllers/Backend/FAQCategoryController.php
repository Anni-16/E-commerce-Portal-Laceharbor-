<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQCategory;

class FAQCategoryController extends Controller
{
    // Manage FAQCategory
    public function index()
    {
        $faqcategory = FAQCategory::orderBy('id', 'desc')->get();

        return view('backend.faq.category.index', compact('faqcategory'));
    }

    // Store Category
    public function store(Request $request)
    {
        $request->validate([
            'faq_cat_name' => 'required|string',
        ]);

        FAQCategory::create([
            'faq_cat_name' => $request->faq_cat_name,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Category added successfully.');
    }

    // Update Category
    public function update(Request $request, $id)
    {
        $request->validate([
            'faq_cat_name' => 'required|string',
        ]);

        $categories = FAQCategory::findOrFail($id);

        $categories->update([
            'faq_cat_name' => $request->faq_cat_name,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Category updated successfully.');
    }

    // Delete Category
    public function destroy($id)
    {
        $category = FAQCategory::findOrFail($id);

        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
}
