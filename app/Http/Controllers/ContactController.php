<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;



class ContactController extends Controller
{
    public function create()
    {
        return view('pages.home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact.create')->with('success', 'Pesan Anda telah dikirim!');
    }

    // Tambahkan metode ini
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('pages.contact.show', compact('contact'));
    }

    // Tambahkan metode ini
    public function respond(Request $request, $id)
    {
        $request->validate([
            'response' => 'required|string',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->response = $request->input('response');
        $contact->save();

        return redirect()->route('contact.show', $id)->with('success', 'Tanggapan telah dikirim!');
    }

    public function delete($id)
    {
        // Pastikan hanya admin yang dapat menghapus kontak
        if (!Auth::user()->isAdmin()) {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus kontak.');
        }

        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Data Kontak berhasil dihapus!');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('pages.contact.edit', compact('contact'));
    }

    // Tambahkan metode ini
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
    
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
    
        return Redirect::to('/dashboard')->with('success', 'Data Kontak berhasil diperbarui!');
    }
    
}
