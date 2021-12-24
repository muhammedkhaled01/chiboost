<?php

namespace App\Http\Controllers;

use App\Models\Marketplace;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $accounts = Marketplace::select()->latest()->get();
        return view('landing-page.marketplace', compact('accounts'));
    }
}
