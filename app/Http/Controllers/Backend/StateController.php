<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class StateController extends Controller
{
    // Manage State
    public function index()
    {
        $states = State::with('country')
            ->latest()
            ->get();

        $countries = Country::orderBy('country_name')->get();

        return view(
            'backend.WebsiteSetting.Locations.manage-state',
            compact('states', 'countries')
        );
    }


    // Add State / Import Excel CSV
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_id' => 'required|exists:country,id',

            'state_name' => 'required_without:state_file|nullable|string|max:255',

            'state_file' => 'required_without:state_name|nullable|file|mimes:csv,xlsx,xls|max:5120',

            'status' => 'nullable|in:1',

        ], [
            'country_id.required' => 'Please select a country.',
            'country_id.exists' => 'Selected country does not exist.',
            'state_name.required_without' => 'Please enter a state name or upload a file.',
            'state_file.required_without' => 'Please enter a state name or upload a file.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {

            DB::beginTransaction();

            $status = $request->has('status') ? 1 : 0;


            // Single State Insert
            if ($request->filled('state_name')) {

                $stateName = trim($request->state_name);

                $exists = State::where('country_id', $request->country_id)
                    ->whereRaw('LOWER(state_name) = ?', [mb_strtolower($stateName)])
                    ->exists();

                if ($exists) {

                    DB::rollBack();

                    return back()
                        ->with('error', 'This state already exists in selected country.')
                        ->withInput();
                }

                State::create([
                    'country_id' => $request->country_id,
                    'state_name' => $stateName,
                    'status' => $status,
                ]);
            }


            // CSV / Excel Import
            if ($request->hasFile('state_file')) {

                $file = $request->file('state_file');

                // Correct Excel Import Method
                $rows = Excel::toArray([], $file);

                $rows = $rows[0] ?? [];

                $imported = 0;
                $skipped = 0;

                foreach ($rows as $index => $row) {

                    $stateName = trim((string) ($row[0] ?? ''));

                    // Skip empty rows
                    if ($stateName === '') {
                        continue;
                    }

                    // Skip header row
                    if (
                        $index === 0 &&
                        in_array(mb_strtolower($stateName), [
                            'state',
                            'state name',
                            'statename'
                        ])
                    ) {
                        continue;
                    }

                    // Check duplicate state
                    $exists = State::where('country_id', $request->country_id)
                        ->whereRaw('LOWER(state_name) = ?', [mb_strtolower($stateName)])
                        ->exists();

                    if ($exists) {
                        $skipped++;
                        continue;
                    }

                    State::create([
                        'country_id' => $request->country_id,
                        'state_name' => $stateName,
                        'status' => $status,
                    ]);

                    $imported++;
                }

                if ($imported === 0) {

                    DB::rollBack();

                    return back()->with(
                        'error',
                        'No new states imported. All states may already exist or the file is empty.'
                    );
                }

                DB::commit();

                return back()->with(
                    'success',
                    "$imported states imported successfully. $skipped duplicate states skipped."
                );
            }

            DB::commit();

            return back()->with('success', 'State added successfully.');

        } catch (\Throwable $e) {

            DB::rollBack();

            return back()->with(
                'error',
                'Something went wrong while saving states: ' . $e->getMessage()
            );
        }
    }


    // Update State
    public function update(Request $request, $id)
    {
        $request->validate([
            'country_id' => 'required|exists:country,id',
            'state_name' => 'required|string|max:255',
            'status' => 'nullable|in:1',
        ]);

        $state = State::findOrFail($id);

        $stateName = trim($request->state_name);

        $exists = State::where('country_id', $request->country_id)
            ->whereRaw('LOWER(state_name) = ?', [mb_strtolower($stateName)])
            ->where('id', '!=', $id)
            ->exists();

        if ($exists) {
            return back()
                ->with('error', 'This state already exists in selected country.')
                ->withInput();
        }

        $state->update([
            'country_id' => $request->country_id,
            'state_name' => $stateName,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return back()->with('success', 'State updated successfully.');
    }


    // Delete State
    public function destroy($id)
    {
        $state = State::findOrFail($id);

        $state->delete();

        return back()->with('success', 'State deleted successfully.');
    }
}
