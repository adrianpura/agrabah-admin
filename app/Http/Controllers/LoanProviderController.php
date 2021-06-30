<?php

namespace App\Http\Controllers;

use App\LoanProvider;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LoanProvider  $loanProvider
     * @return \Illuminate\Http\Response
     */
    public function show(LoanProvider $loanProvider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoanProvider  $loanProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(LoanProvider $loanProvider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoanProvider  $loanProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoanProvider $loanProvider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoanProvider  $loanProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoanProvider $loanProvider)
    {
        //
    }

    public function profileStore(Request $request)
    {
        $number = LoanProvider::count() + 1;
        $provider = new LoanProvider();
        $provider->account_id = $number;
        $provider->user_id = Auth::user()->id;
        if($provider->save()){
            $profile = new Profile();
            $profile->first_name = $request->input('first_name');
            $profile->middle_name = $request->input('middle_name');
            $profile->last_name = $request->input('last_name');
            $profile->bank_name = $request->input('bank_name');
            $profile->branch_name = $request->input('branch_name');
            $profile->address_line = $request->input('address_line');
            $profile->account_name = $request->input('account_name');
            $profile->account_number = $request->input('account_number');
            $profile->tin = $request->input('tin');
            $profile->contact_person = $request->input('contact_person');
            $profile->contact_number = $request->input('contact_number');
            $profile->designation = $request->input('designation');
            if($provider->profile()->save($profile)){
                $user = User::find($provider->user_id);
                $user->name = $profile->first_name.' '.$profile->last_name;
                if($user->save()){
                    return redirect()->route('home');
                }
            }
        }


    }
}