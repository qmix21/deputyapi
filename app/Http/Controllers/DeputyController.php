<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Deputy;
use Illuminate\Http\Request;

class DeputyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // URL :   310e1921074643.au.deputy.com
    //Access token : 1857fbcbcf95cf85025e024e13c3535f
    public function index()
    {
        $accessToken = "1857fbcbcf95cf85025e024e13c3535f";
        $url = "https://310e1921074643.au.deputy.com/api/v1/";
        $client = new \GuzzleHttp\Client(['base_uri'=>'https://310e1921074643.au.deputy.com/api/v1/me']);
        $headers =[
            'Authorization' => 'Bearer '. $accessToken,
            'Accept' => 'application/json',
        ];
        $res = $client->request('GET','supervise/empshiftinfo/1',['headers' => $headers]);
        $res->getStatusCode(); // 200
        $res->getBody(); // { "type": "User", ....
        return $res;
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
     * @param  \App\DeputyController  $deputyController
     * @return \Illuminate\Http\Response
     */
    public function show(DeputyController $deputyController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DeputyController  $deputyController
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        ////supervise/timesheet/end

        //TimesheetId : The timesheet you are finishing
        //MealbreakMinute : Total number of minutes as mealbreak
        $timesheetID = $request->timesheet;
        $mealbreak = $request->mealbreak;

        $accessToken = "1857fbcbcf95cf85025e024e13c3535f";
        $client = new \GuzzleHttp\Client(['base_uri'=>'https://310e1921074643.au.deputy.com/api/v1/']);
        $headers =[
            'Authorization' => 'Bearer '. $accessToken,
            'Accept' => 'application/json',
        ];
        $res = $client->request('POST','supervise/empshiftinfo/1',['headers' => $headers,'TimesheetId'=>$timesheetID,'MealbreakMinute'=>$mealbreak]);
        return $res;


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeputyController  $deputyController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeputyController $deputyController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeputyController  $deputyController
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeputyController $deputyController)
    {
        //
    }
}
