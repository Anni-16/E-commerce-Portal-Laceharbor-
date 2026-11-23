<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\GtmTag;

class GtmTagController extends Controller
{
       public function edit()
    {
        $gtmtag = GtmTag::first();

        if (!$gtmtag) {
            return redirect()->back()->with(
                'error',
                'Google Tag Manager data not found.'
            );
        }

        return view('backend.Seo.gtm-tag', compact('gtmtag'));
    }


    public function update(Request $request)
    {
        $gtmtag = GtmTag::first();

        if (!$gtmtag) {
            return redirect()->back()->with(
                'error',
                'Google Tag Manager record not found.'
            );
        }

        try {

            // Validate all fields
            $validated = $request->validate([
                'head_tag' => 'required|string',
                'body_tag' => 'required|string',
            ]);

            DB::beginTransaction();

            // Update database record
            $gtmtag->update($validated);

            DB::commit();

            return redirect()->back()->with(
                'success',
                'Google Tag Manager updated successfully!'
            );
        } catch (\Throwable $e) {

            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
