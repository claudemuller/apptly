<?php

namespace Apptly\Http\Controllers;

use Apptly\Client;
use Illuminate\Http\Request;

use Apptly\Http\Requests;
use Apptly\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return Response::json($clients);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $client = Client::find($id);
        return Response::json($client);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Client::destroy($id);

        return Response::json('success', 200);
    }
}
