<?php

namespace App\Http\Controllers;

use App\Models\Boosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-dashboard.admin-dashboard');
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
        $requests = Boosting::whereType($id)->leftJoin('users', 'user_id', '=', 'users.id')->select('boostings.*', 'users.name as username', 'users.phone as phone')->orderBy('boostings.id', 'desc')->get();
        $pageName = strtolower($id);
        return view('admin-dashboard.admin-boosting', compact('requests', 'pageName'));
    }

    public function search(Request $request, $id)
    {
        $request->validate([
            'q' => 'required'
        ]);
        $q = $request->q;
        $filteredCodes = Boosting::where('id', 'like', '%' . $q . '%')->get();

        if ($filteredCodes) {
            $requests = Boosting::whereType($id)->leftJoin('users', 'user_id', '=', 'users.id')->select('boostings.*', 'users.name as username', 'users.phone as phone')->orderBy('boostings.id', 'desc')->get();
            $pageName = strtolower($id);
            return view('admin-dashboard.admin-boosting', compact('requests', 'pageName'))->with([
                'codes' => $filteredCodes
            ]);
        } else {
        }
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
        Boosting::find($id)->delete();
        session()->flash('delete', 'Item has been deleted successfully');
        return redirect()->back();
    }
}
