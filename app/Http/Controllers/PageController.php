<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Collector;

class PageController extends Controller
{
    function addborrower()
    {
        return view('pages/add_borrower');
    }

    function addcollector()
    {
        return view('pages/add_collector');
    }

    function addpayment()
    {
        return view('pages/add_payments');
    }

    function addloan()
    {
        return view('pages/add_loan');
    }

    function adduser()
    {
        return view('pages/add_user');
    }

    function companydetails()
    {
        return view('pages/company_details');
    }

    function listborrower()
    {
        return view('pages/list_borrowers');
    }

    function listcollector()
    {
        $collectors = Collector::orderby('id','desc')->paginate(10);
        return view('pages/list_collectors', compact('collectors'));
    }

    function listloan()
    {
        return view('pages/list_loan');
    }

    function listpayment()
    {
        return view('pages/list_payments');
    }

    function listuser()
    {
        return view('pages/list_users');
    }

    function editprofile()
    {
        return view('pages/edit_profile');
    }
    
    //Insert - Delete - Update Collector

    function addcollectorinsert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        
        Collector::insert( [
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'area' => $request->area,
        ] );
        return back()->with('status', 'Collector Created Successfully!');
    }




}
