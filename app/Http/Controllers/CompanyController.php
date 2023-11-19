<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $company;
    public function __construct(){
        $this->company = Company::first();
    }
    public function index()
    {
        return view('crm.company.index',[
            'companies' => Company::all()
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $company = Company::findOrFail($id)->first();
        return view('crm.company.show',[
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findOrFail($id);
        return view('crm.company.edit',[
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = Company::find($id)->first();

        $company->update($request->except(['_token','_method']));

        return redirect()->back()->with('company', 'Данные компании успешно обновлены');
    }
    public function requisites(Request $request, string $id){
        
        $company = Company::find($id)->first();
        
        $company->bankRequisite()->update($request->except(['_token','_method']));

        return redirect()->back()->with('requisite', 'Данные банковских реквизитов обновлены');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
