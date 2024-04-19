<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\ElectoralCommissioner;
use Illuminate\Http\RedirectResponse;

class ElectoralCommissionerController extends Controller
{
    // public function index(): Response
    // {
    //   return response('hellow , World');
    // }
    
    
    public function index(): View

    {
        // $electoralCommissioners = ElectoralCommissioner::all();
       return View('dashboard', [
        'electoralCommissioners' => ElectoralCommissioner::all(),
    ]);
    }


    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([

            'name' => 'required|string|max:255',
            'password' => 'required|string|max:255'

        ]);
        $request->user()->electoral_commissioner()->create($validated);
        return redirect(route('electoral_commissioner.index'));
    }

}
