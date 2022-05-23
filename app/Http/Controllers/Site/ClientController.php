<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use PHPUnit\Framework\Test;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
   
        return response()->json(Client::all(), 200);

    }
    
    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\ClientRequest  $request
     */
   
    public function create(ClientRequest $request)
    {  

 



        Auth::guard('client')->attempt(['phone' => $request->phone, 'password' => $request->password]);
        $token=auth()->guard('client')->user()->createToken('Laravel')->accessToken;
        
        
        return response()->json(['token'=>$token], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

 
         $request->validate([
         'phone'=>'required'
        ]);

        $client=$request->all();
        if($request->password){
            $client['password'] = Hash::make($request->password);
        }

        $client = Client::create($client);
        $token=$client->createToken('Laravel')->accessToken;
        return response()->json(['token'=>$token],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return $client;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return response()->json(200) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return response()->json(200);
    }
}
