<?php

namespace App\Http\Controllers;

use App\Models\Marketplace;
use Illuminate\Http\Request;

class addNewAccountController extends Controller
{
    public function index()
    {
        return view('admin-dashboard.add-new-account');
    }

    public function saveAccounts(Request $request)
    {
        $this->validate(request(), [
            'price' => 'required',
        ]);
        $marketplace = Marketplace::create($request->all());
        return redirect()->back()->with(['success' => 'The account has been added successfully']);

    }
}
