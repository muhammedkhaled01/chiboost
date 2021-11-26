<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

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

    public function divisions()
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
        return view('landing-page.divisions', compact('ranks'));
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
        Division::create($data);
        return redirect()->back();
    }

    public function netwins()
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
        return view('landing-page.netwins', compact('ranks'));
    }

    public function placements()
    {
        return view('landing-page.placements');
    }
}
