<?php

namespace App\Http\Controllers;

use App\Models\Lead;

class LeadController extends Controller
{
    public function lead()
    {
        $leads = Lead::all();
        $paginate = Lead::paginate();
        return view('lead', compact('leads', 'paginate'));
    }
}
