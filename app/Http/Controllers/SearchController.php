<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Proyek;

class SearchController extends Controller
{
    public function globalSearch(Request $request)
    {
        $query = $request->input('query');

        // Search di 2 tabel saja (Users & Proyek)
        $users = User::where('name', 'LIKE', "%{$query}%")->select('id', 'name')->get();
        $projects = Proyek::where('nama_proyek', 'LIKE', "%{$query}%")->select('id', 'nama_proyek')->get();

        // Gabungkan hasil dalam satu array
        $results = [];

        foreach ($users as $user) {
            $results[] = ['name' => $user->name, 'url' => route('user.show', $user->id)];
        }

        foreach ($projects as $project) {
            $results[] = ['name' => $project->nama_proyek, 'url' => route('proyek.show', $project->id)];
        }

        return response()->json($results);
    }
}

