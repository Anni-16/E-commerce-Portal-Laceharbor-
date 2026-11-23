<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MetaSeo;

class MetaSeoController extends Controller
{
    public function edit()
    {
        $metaseo = MetaSeo::first();

        if (!$metaseo) {
            return redirect()->back()->with(
                'error',
                'All Pages Seo data not found.'
            );
        }

        return view('backend.Seo.allpagesseo', compact('metaseo'));
    }


    public function update(Request $request)
    {
        $metaseo = MetaSeo::first();

        if (!$metaseo) {
            return redirect()->back()->with(
                'error',
                'All Pages SEO record not found.'
            );
        }

        try {

            // Validate all fields
            $validated = $request->validate([
                'home_meta_title' => 'required|string',
                'home_meta_keyword' => 'required|string',
                'home_meta_description' => 'required|string',

                'pro_meta_title' => 'required|string',
                'pro_meta_keyword' => 'required|string',
                'pro_meta_description' => 'required|string',

                'faq_meta_title' => 'required|string',
                'faq_meta_keyword' => 'required|string',
                'faq_meta_description' => 'required|string',

                'size_meta_title' => 'required|string',
                'size_meta_keyword' => 'required|string',
                'size_meta_description' => 'required|string',

                'pro_cat_meta_title' => 'required|string',
                'pro_cat_meta_keyword' => 'required|string',
                'pro_cat_meta_description' => 'required|string',
            ]);

            DB::beginTransaction();

            // Update database record
            $metaseo->update($validated);

            DB::commit();

            return redirect()->back()->with(
                'success',
                'All Pages SEO updated successfully!'
            );
        } catch (\Throwable $e) {

            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
