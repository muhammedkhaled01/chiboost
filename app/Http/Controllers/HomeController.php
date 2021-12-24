<?php

namespace App\Http\Controllers;

use App\Events\NewNotification;
use App\Models\Boosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('index');
    }

    public function index()
    {
        return view('landing-page.home');
    }

    public function show($id)
    {
        $ranks = [
            [
                'name' => 'iron',
                'items' => [4, 3, 2, 1]
            ],
            [
                'name' => 'bronze',
                'items' => [4, 3, 2, 1]
            ],
            [
                'name' => 'silver',
                'items' => [4, 3, 2, 1]
            ],
            [
                'name' => 'gold',
                'items' => [4, 3, 2, 1]
            ],
            [
                'name' => 'platinum',
                'items' => [4, 3, 2, 1]
            ],
            [
                'name' => 'diamond',
                'items' => [4, 3, 2, 1]
            ],
            [
                'name' => 'master',
                'items' => [5]
            ],
            [
                'name' => 'grandMaster',
                'items' => [5]
            ],
            [
                'name' => 'challenger',
                'items' => [5]
            ],
        ];
        if (strtolower($id) == 'divisions') {
            return view('landing-page.divisions', compact('ranks', 'id'));
        } elseif (strtolower($id) == 'netwins') {
            return view('landing-page.netwins', compact('ranks', 'id'));
        } elseif (strtolower($id) == 'placements') {
            return view('landing-page.placements', compact('ranks', 'id'));
        } else {
            return redirect()->route('home');
        }
    }


    public function saveDivisions(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        if (isset($data['options'])) {
            $data['options'] = implode(',', $data['options']);
        }
        if (isset($data['roleType'])) {
            $data['roleType'] = implode(',', $data['roleType']);
        }
        $boosting = Boosting::create($data);
//        event(new NewNotification());
        return redirect()->back()->with('boosting', $boosting);
    }

//    public function marketplace()
//    {
////        $requests = DB::table('marketplaces')->get();
//        return view('landing-page.marketplace');
//    }


}
