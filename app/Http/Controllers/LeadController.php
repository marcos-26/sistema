<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function lead()
    {
        $lead = Lead::all();
        return view('lead', ['lead' => $lead]);
    }
}
