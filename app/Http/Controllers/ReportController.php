<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    // Show the form to create a new report
    public function create()
    {
        return view('pages.home');
    }

    // Store the new report
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'item' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        Report::create($request->all());

        return redirect()->route('reports.create')->with('success', 'Laporan Anda telah dikirim!');
    }

    // Show a single report
    public function show($id)
    {
        $report = Report::findOrFail($id);
        return view('pages.reports.show', compact('report'));
    }

    // Respond to a report
    public function respond(Request $request, $id)
    {
        $request->validate([
            'response' => 'required|string',
        ]);
    
        $report = Report::findOrFail($id);
        $report->response = $request->input('response');
        $report->save();
    
        // Perbaiki route di sini
        return redirect()->route('reports.show', $id)->with('success', 'Tanggapan telah dikirim!');
    }
    
    

    // Delete a report
    public function delete($id)
    {
        // Ensure only admin can delete reports
        if (!Auth::user()->isAdmin()) {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus laporan.');
        }

        $report = Report::findOrFail($id);
        $report->delete();

        return redirect()->back()->with('success', 'Laporan berhasil dihapus!');
    }
    
}
