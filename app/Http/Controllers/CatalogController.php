<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Design;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index()
    {
        return view('catalog.index');
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'design' => 'required'
        ]);
        $design = Design::where('design_number', $request->design)->first();
        if ($design) {
            return redirect(route('catalogue.show', [$request->design]));
        }
        return back()->withErrors(['msg' => 'Diseño no encontrado']);
    }

    public function show($design)
    {
        $design = Design::where('design_number', $design)->first();

        return view('catalog.show', compact('design'));
    }

}
