<?php

namespace App\Http\Controllers;
use App\Models\table1;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
   
    public function index()
    {
        $companies = table1::orderBy('id','desc')->paginate(5);
        return view('companies.index', compact('companies'));
    }

   
    public function create()
    {
        return view('companies.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        
        table1R::create($request->post());

        return redirect()->route('companies.index')->with('success','Company has been created successfully.');
    }

    public function show(table1 $company)
    {
        return view('companies.show',compact('company'));
    }

    
    public function edit(table1 $company)
    {
        return view('companies.edit',compact('company'));
    }

   
    public function update(Request $request, table1 $company)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        
        $company->fill($request->post())->save();

        return redirect()->route('companies.index')->with('success','Company Has Been updated successfully');
    }

   
    public function destroy(table1 $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success','Company has been deleted successfully');
    }
}