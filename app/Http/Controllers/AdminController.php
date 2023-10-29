<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Customer;
use App\Models\Field;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fieldCount = Field::count();
        $adCount = Admin::count();
        $custCount = Customer::count();
//        $timeCount = Time::count();
        $ordCount = Order::count();
        return view('admin.index', [
            'fieldCount' => $fieldCount,
            'custCount' => $custCount,
            'adCount' => $adCount,
            'ordCount' => $ordCount,
//            'timeCount' => $timeCount
        ]);
    }

    public function customers() {
        $customers = Customer::paginate(10);
        return view('Admin.customers', [
            'customers' => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    // Function login
    public function login() {
        return view('dashboard.login');
    }

    public function loginProcess(Request $request) {
        $account = $request->only(['email', 'password']);
//        $check = Auth::guard('admins')->attempt($account);
//        dd($check);
        if(Auth::guard('admins')->attempt($account)) {
            $admin = Auth::guard('admins')->user();
            Auth::guard('admins')->login($admin);
            session(['admins' => $admin]);
//            dd($account);
            return Redirect::route('Admin.index');
        } else {
            return Redirect::back();
        }
    }
}
