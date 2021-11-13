<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $text = trim($request->get('texto'));
        $clientList = DB::table('client')
                        ->select('id', 'first', 'last', 'email', 'phone', 'location', 'hobby')
                        ->where('first', 'LIKE', '%'.$text.'%')
                        ->orWhere('last', 'LIKE', '%'.$text.'%')
                        ->orderBy('first', 'asc')
                        ->paginate(10);
        return View('client.index', compact('clientList', 'text'));
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->first=$request->input('first');
        $client->last=$request->input('last');
        $client->email=$request->input('email');
        $client->phone=$request->input('phone');
        $client->location=$request->input('location');
        $client->hobby=$request->input('hobby');
        $client->save();
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->first=$request->input('first');
        $client->last=$request->input('last');
        $client->email=$request->input('email');
        $client->phone=$request->input('phone');
        $client->location=$request->input('location');
        $client->hobby=$request->input('hobby');
        $client->save();
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('client.index');
    }
}
