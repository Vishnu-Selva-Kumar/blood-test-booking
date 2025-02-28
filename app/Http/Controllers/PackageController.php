<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Package;
use Carbon\Carbon;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $category = null)
    {
        if ($category) {
            $categoryDetails = Category::where('slug', $category)->firstOrFail();
        } else {

            $categoryDetails = null;
        }

        return $categoryDetails;

        $packages = Package::paginate(9);
        $categories = Category::query()->whereActive()->latest()->get()->take(25);
        return view('packages', compact('packages', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePackageRequest $request)
    {
        try {
            $validatedData = $request->validated();

            if (isset($validatedData['appointment_at'])) {
                $validatedData['appointment_at'] = date('Y-m-d', strtotime($validatedData['appointment_at']));
            }

            Booking::create($validatedData);
            return redirect()->back()->with('success', 'Booking successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create package: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $slug)
    {

        $package = Package::where('slug', $slug)->firstOrFail();

        return view('package-details', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)

    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
    }
}
