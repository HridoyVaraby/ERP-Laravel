<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Collector;

use App\Company;

use Image;

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
        $single_company_info = Company::findOrFail(1);
        return view('pages/company_details', compact('single_company_info'));
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
            'collector_name' => 'required',
            'collector_address' => 'required',
            'collector_phone' => 'required|numeric|unique:collectors,collector_phone',
        ]);
        
        Collector::insert( [
            'collector_name' => $request->collector_name,
            'collector_address' => $request->collector_address,
            'collector_phone' => $request->collector_phone,
            'collector_email' => $request->collector_email,
            'collection_area' => $request->collection_area,
        ] );
        return back()->with('status', 'Collector Created Successfully!');
    }

    function addcompanyinsert(Request $request)
    {
        Company::find($request->id)->update([
            'company_name' => $request->company_name,
            'company_email' => $request->company_email,
            'company_phone' => $request->company_phone,
            'company_address' => $request->company_address,
        ]);
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $filename = time() . '.' . $logo->getClientOriginalExtension();
            $location = public_path('assets/images/' . $filename);
            Image::make($logo)->resize(200, 50)->save($location);

            Company::find($request->id)->update([
                'logo' => $request->logo,
            ]);
        }

        return back()->with('updatestatus', 'Details updated Successfully!');
    }




}
