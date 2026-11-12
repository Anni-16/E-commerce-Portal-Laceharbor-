<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShippingDelivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShippingController extends Controller
{
    public function edit()
    {
        $shipping = ShippingDelivery::first();

        if (!$shipping) {
            return redirect()->back()->with(
                'error',
                'Shipping page data not found.'
            );
        }

        return view('backend.staticpages.shipping-delivery', compact('shipping'));
    }

    public function update(Request $request)
    {
        $shipping = ShippingDelivery::first();

        if (!$shipping) {
            return redirect()->back()->with(
                'error',
                'Shipping page record not found.'
            );
        }

        // Validate all fields
        $validated = $request->validate([

            'shipping_title' => 'required|string',
            'shipping_date' => 'required|string',
            'shipping_description' => 'required|string',

            'meta_title' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_description' => 'required|string',
        ]);

        DB::beginTransaction();

        try {

            // Update all text fields
            $fields = [
                'shipping_title',
                'shipping_date',
                'shipping_description',

                'meta_title',
                'meta_keywords',
                'meta_description',
            ];

                
            foreach ($fields as $field) {
                $shipping->$field = $validated[$field];
            }

            // Save database record
            $shipping->save();

            DB::commit();

            return redirect()->back()->with(
                'success',
                'Shipping page updated successfully!'
            );
        } catch (\Throwable $e) {

            DB::rollBack();

            return redirect()->back()
                ->withInput()
                ->with('error', 'Update failed: ' . $e->getMessage());
        }
    }
}
