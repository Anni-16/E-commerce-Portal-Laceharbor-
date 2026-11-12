<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ReturnsExchanges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReturnsController extends Controller
{
    public function edit()
    {
        $returns = ReturnsExchanges::first();

        if (!$returns) {
            return redirect()->back()->with(
                'error',
                'Returns page data not found.'
            );
        }

        return view('backend.staticpages.returns-exchanges', compact('returns'));
    }

    public function update(Request $request)
    {
        $returns = ReturnsExchanges::first();

        if (!$returns) {
            return redirect()->back()->with(
                'error',
                'Returns page record not found.'
            );
        }

        // Validate all fields
        $validated = $request->validate([

            'returns_title' => 'required|string',
            'returns_date' => 'required|string',
            'returns_description' => 'required|string',

            'meta_title' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_description' => 'required|string',
        ]);

        DB::beginTransaction();

        try {

            // Update all text fields
            $fields = [
                'returns_title',
                'returns_date',
                'returns_description',

                'meta_title',
                'meta_keywords',
                'meta_description',
            ];


            foreach ($fields as $field) {
                $returns->$field = $validated[$field];
            }

            // Save database record
            $returns->save();

            DB::commit();

            return redirect()->back()->with(
                'success',
                'Returns page updated successfully!'
            );
        } catch (\Throwable $e) {

            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
