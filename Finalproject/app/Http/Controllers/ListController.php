<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ListOrder;
use App\Http\Controllers\Controller;

class ListController extends Controller
{ 
    public function index(){
        $object = ListOrder::all();
        return view('listapp.index', compact('object'));
    }

    public function create(){
        return view('listapp.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'fullname'=>'required',
            'codename'=>'required',
            'address'=>'required'
        ]);
        $object = new ListOrder ;
        $object->name = $request->name;
        $object->fullname =$request->fullname;
        $object->codename =$request->codename;
        $object->address =$request->address;
        $object->save();
        return redirect()->route('listapp.index')->with('success','Mutant has been update');
    }
    public function edit(listapp $listapp){
        return view('listapp.edit',compact('listapp'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'fullname'=>'required',
            'codename'=>'required',
            'address'=>'required'
        ]);
        $item = ListOrder::find($id);
        $item->name = $request->name;
        $item->fullname =$request->fullname;
        $item->codename =$request->codename;
        $item->address =$request->address;
        $item->save();
        return redirect()->route('listapp.index')->with('success','Mutant has been update');
    }
    public function destory(listapp $listapp){
        $item->delete();
        return redirect()->route('listapp.index')->with('success','alert alert alert data has been destroy ');
    }
}