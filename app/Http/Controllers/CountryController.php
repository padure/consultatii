<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $countries = Country::orderBy('name', 'asc')->paginate(Country::NR_PER_PAGE);
        return view('admin.countries.index', ['countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request):RedirectResponse
    {
        Country::create($request->all());
        return redirect()->back()->with('success', 'Inregistrare cu success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country):View
    {
        return view('admin.countries.show', ['country' => $country]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country):View
    {
        return view('admin.countries.edit', ['country' => $country]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country):RedirectResponse
    {
        $country->update($request->all());

        return redirect()->back()->with('success', 'Actualizare cu success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country):RedirectResponse
    {
        $country->delete();
        return redirect()->back()->with('success', 'Stergere cu success!');
    }
}
