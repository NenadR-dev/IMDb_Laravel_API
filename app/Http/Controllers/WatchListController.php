<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\WatchListRequest;
use App\Services\WatchlistService;

class WatchListController extends Controller
{
    private $watchlistService;

    public function __construct(WatchlistService $service) {
        $this->watchlistService = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Auth::user()->with('watched')->first();
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
    public function store(WatchListRequest $request)
    {
        $user = Auth::user();
        $user->Watched()->attach([$request->get('movieId') => ['watched' => $request->get('watched')]]);
        return $user->Watched()->find($request->get('movieId'))->only('pivot');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Auth::user()->with('watchlist')->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WatchListRequest $request, $id)
    {
        return $this->watchlistService->updateWatchlist($id, $request->only('watched'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        $user->Watched()->where('movie_id',$id)->detach();
        return $user->Watched()->first();
    }
}
