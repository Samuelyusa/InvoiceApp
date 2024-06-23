<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function preview($id)
    {
        $invoice = Invoice::find($id);
        return view('invoice.index', compact('invoice'));
    }
}
