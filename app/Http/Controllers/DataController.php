<?php

namespace App\Http\Controllers;

use App\Models\DataEntry; 
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DataController extends Controller
{
    public function index()
    {
        $samples = DataEntry::all();
        return view('data.index', compact('samples'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,txt',
        ]);

        $file = $request->file('file');
        $data = Excel::toArray([], $file)[0];
        unset($data[0]); 

        foreach ($data as $row) {
            DataEntry::create([
                'name' => $row[0],
                'type' => $row[1],
                'location' => $row[2],
            ]);
        }

        return redirect()->back()->with('success', 'File uploaded!');
    }
}