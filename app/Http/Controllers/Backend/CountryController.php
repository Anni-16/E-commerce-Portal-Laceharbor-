<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Country;

class CountryController extends Controller
{

    // Manage country
    public function index()
    {
        $country = Country::orderBy('id', 'desc')->get();

        return view('backend.WebsiteSetting.Locations.manage-country', compact('country'));
    }

    // Store Country
    public function store(Request $request)
    {
        $request->validate([
            'country_name' => 'required_without:country_file|string|nullable|unique:country,country_name',
            'country_file' => 'required_without:country_name|file|mimes:csv,txt,xlsx,xls|max:5120',
            'status' => 'nullable',
        ], [
            'country_name.unique' => 'This country name already exists. Please enter a different name.',
        ]);

        // Single Country Add
        if ($request->filled('country_name')) {

            Country::create([
                'country_name' => $request->country_name,
                'status' => $request->has('status') ? 1 : 0,
            ]);

            return redirect()->back()->with('success', 'Country added successfully.');
        }

        // CSV / Excel Upload
        if ($request->hasFile('country_file')) {

            $file = $request->file('country_file');

            $extension = strtolower($file->getClientOriginalExtension());

            $countries = [];

            if ($extension == 'csv' || $extension == 'txt') {

                $handle = fopen($file->getRealPath(), 'r');

                $header = fgetcsv($handle);

                while (($row = fgetcsv($handle)) !== false) {

                    if (!empty($row[0])) {
                        $countries[] = [
                            'country_name' => trim($row[0]),
                            'status' => 1,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }

                fclose($handle);
            } else {

                $rows = Excel::toArray([], $file);

                foreach ($rows[0] as $index => $row) {

                    // Skip header row
                    if ($index == 0) {
                        continue;
                    }

                    if (!empty($row[0])) {
                        $countries[] = [
                            'country_name' => trim($row[0]),
                            'status' => 1,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }
            }

            if (!empty($countries)) {

                foreach (array_chunk($countries, 500) as $chunk) {
                    Country::insert($chunk);
                }

                return redirect()->back()->with('success', 'Countries imported successfully.');
            }

            return redirect()->back()->with('error', 'No valid country names found in file.');
        }

        return redirect()->back();
    }

    // Update Country
    public function update(Request $request, $id)
    {
        $request->validate([
            'country_name' => 'required|string|unique:country,country_name,' . $id,
        ], [
            'country_name.unique' => 'This country name already exists. Please enter a different name.',
        ]);

        $countries = Country::findOrFail($id);

        $countries->update([
            'country_name' => $request->country_name,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Country updated successfully.');
    }

    // Delete Country
    public function destroy($id)
    {
        $country = Country::findOrFail($id);

        $country->delete();

        return redirect()->back()->with('success', 'Country deleted successfully.');
    }
}
