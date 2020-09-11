<?php

namespace App\Http\Controllers;

use App\Helpers\CampaignCalc;
use App\Models\Company;
use App\Models\SmsLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{

    public function calc()
    {
        $companies = Company::all()->toArray();
        $smsLocations = SmsLocation::all()->toArray();
        if (request()->isMethod('get')) {
            return view('campaign.calc', ['companies' => $companies, 'smsLocations' => $smsLocations]);
        } elseif (request()->isMethod('post')) {
            $campaignCalc = new CampaignCalc(request('company_id'));
            $res = $campaignCalc->checkBalance(request('message_count'));
            return view('campaign.calc', ['companies' => $companies, 'smsLocations' => $smsLocations, 'res' => $res]);
        } else {
            return response('Method Not Allowed', 405);
        }

    }

    public function example()
    {
        return view('campaign.example');
    }

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
