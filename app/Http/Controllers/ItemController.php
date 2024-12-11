<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //
    public function index(){
        $items = Item::latest()->paginate(6);
        return view('items.index')->with('items', $items);
    }

    public function createLost(){
        return view('items.createlost');
    }

    public function storeLost(){
        $attrs = request()->validate([
            'name' => ['required'],
            'location' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
            'date_lost_found' => ['required'],
            'imgurl' => ['required'],
            'user_id' => ['required'],
            'student_id' => ['required'],
            'contact_number' => ['required']
        ]);

        $attrs=['name'].=' Talamban';

        $item = Item::create(
            $attrs
        );

        return redirect('/browse');
    }

    public function createFound(){
        return view('items.createfound');
    }

    public function storeFound(){
        $attrs = request()->validate([
            'name' => ['required'],
            'location' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
            'date_lost_found' => ['required'],
            'imgurl' => ['required'],
            'user_id' => ['required'],
            'student_id' => ['required'],
            'contact_number' => ['required']
        ]);

        $attrs=['name'].=' Talamban';

        $item = Item::create(
            $attrs
        );

        return redirect('/browse');
    }

    public function show(Item $item) {
        return view('items.show', ['item' => $item]);
    }

    public function edit(Item $item){
        return view('items.edit', ['item' => $item]);
    }

    public function update(Item $item){
        $attrs = request()->validate([
            'name' => ['required'],
            'location' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
            'date_lost_found' => ['required'],
            'imgurl' => ['required'],
            'user_id' => ['required'],
            'student_id' => ['required'],
            'contact_number' => ['required']
        ]);

        $item->update($attrs);

        return redirect('/items/' . $item->id);
    }

    public function destroy(Item $item){
        $item->delete();

        return redirect('/browse');
    }

    public function search(Request $request){
        $search = $request->search;

        $items = Item::where('name', 'LIKE', '%'.$search.'%')->paginate(6);

        return view('items.index', [
            'items' => $items
        ]);
    }
}
