<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaticPageRequest;
use App\Http\Requests\UpdateStaticPageRequest;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $staticPage =  StaticPage::where('slug', $request->slug)->first();

            if (in_array($request->slug, ['about-us', 'contact-us'])) {
                $page = 'static_pages.' . $request->slug;
            } else {
                $page = 'static_pages.page';
            }
            return view($page, compact('staticPage'));
        } catch (\Throwable $th) {
            return  $staticPage =  StaticPage::where('slug', $request->slug)->first();
        }
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
    public function store(StoreStaticPageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StaticPage $staticPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StaticPage $staticPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaticPageRequest $request, StaticPage $staticPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StaticPage $staticPage)
    {
        //
    }
}
