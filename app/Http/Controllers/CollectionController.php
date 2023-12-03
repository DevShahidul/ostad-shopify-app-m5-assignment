<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CollectionController extends Controller
{
    public function index(Request $request): View{
        $shop = $request->user();
        $collections = Collection::where('shop_id', $shop->id)->get();
        return view('collections.index', compact('collections'));
    }

    public function create(Request $request): View{
        $shop = $request->user();
        $collections = Collection::where('shop_id', $shop->id)->get();
        return view('collections.create', compact('collections'));
    }

    public function store( Request $request): RedirectResponse {
        // $collectionId = $request->collectionId;
        $shop = $request->user();
        $collection = new Collection();

        $collection->name = $request->name;
        $collection->description = $request->description;
        $collection->shop_id = $shop->id;

        $collection->save();

        return Redirect::away(URL::shopifyRoute('collection.index'));

    }
}
