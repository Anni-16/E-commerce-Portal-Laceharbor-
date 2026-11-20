<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\FAQCategory;
use Illuminate\Support\Facades\DB;

class FAQController extends Controller
{
    // Manage FAQ
    public function index()
    {
        $faqs = Faq::with('category')
            ->latest()
            ->get();

        return view('backend.faq.faqs.index', compact('faqs'));
    }

    // Add FAQ page
    public function addFaq()
    {
        $categories = FAQCategory::where('status', 1)
            ->orderBy('faq_cat_name')
            ->get();

        return view('backend.faq.faqs.add-faq', compact('categories'));
    }

    // Store FAQ
    public function storeFaq(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:faq_categories,id',
            'questions' => 'required|array|min:1',
            'questions.*.question' => 'required|string',
            'questions.*.answer' => 'required|string',
        ], [
            'category_id.required' => 'Please select a category.',
            'questions.required' => 'Please add at least one FAQ.',
            'questions.*.question.required' => 'Question is required.',
            'questions.*.answer.required' => 'Answer is required.',
        ]);

        DB::transaction(function () use ($validated) {

            foreach ($validated['questions'] as $item) {

                Faq::create([
                    'category_id' => $validated['category_id'],
                    'question' => $item['question'],
                    'answer' => $item['answer'],
                ]);
            }
        });

        return redirect()
            ->route('backend.manage-faq')
            ->with('success', 'FAQs added successfully.');
    }

    // View single FAQ
    public function viewFaq($id)
    {
        $faq = Faq::with('category')->findOrFail($id);

        return view('backend.faq.faqs.view-faq', compact('faq'));
    }

    // Edit FAQ
    public function editFaq($id)
    {
        $faq = Faq::with('category')->findOrFail($id);

        $categories = FAQCategory::where('status', 1)
            ->orderBy('faq_cat_name')
            ->get();

        return view(
            'backend.faq.faqs.edit-faq',
            compact('faq', 'categories')
        );
    }

    // Update FAQ
    public function updateFaq(Request $request, $id)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:faq_categories,id',
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq = Faq::findOrFail($id);

        $faq->update([
            'category_id' => $validated['category_id'],
            'question' => $validated['question'],
            'answer' => $validated['answer'],
        ]);

        return redirect()
            ->route('backend.manage-faq')
            ->with('success', 'FAQ updated successfully.');
    }

    // Delete FAQ
    public function deleteFaq($id)
    {
        $faq = Faq::findOrFail($id);

        $faq->delete();

        return redirect()
            ->route('backend.manage-faq')
            ->with('success', 'FAQ deleted successfully.');
    }
}