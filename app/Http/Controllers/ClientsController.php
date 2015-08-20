<?php

namespace Apptly\Http\Controllers;

use Apptly\Client;
use Illuminate\Http\Request;

use Apptly\Http\Requests;
use Apptly\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

/**
 * Class: ClientsController
 *
 * @see
 */
class ClientsController extends Controller
{
    /**
     * Index method that shows all clients
     *
     * @return  Response
     */
    public function index()
    {
        $clients = Client::all();

        return Response::json($clients);
    }

    /**
     * Store method to save a client
     *
     * @param Request $request
     * @return  Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show a single client
     *
     * @param mixed $id
     * @return  Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return Response::json($client);
    }

    /**
     * Update a single client
     *
     * @param Request $request
     * @param mixed $id
     * @return  Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Destroy a single client
     *
     * @param mixed $id
     * @return  Response
     */
    public function destroy($id)
    {
        Client::destroy($id);

        return Response::json('success', 200);
    }
}
