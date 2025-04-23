<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inventaris;
use Illuminate\View\View;

class InventarisController extends Controller
{
    public function index(): View
    {
        $inventaris = Inventaris::all();
        return view('inventaris.index', compact('inventaris'));
    }
}
