<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class ShopController extends Controller
{
    public function index()
    {
        $shop = Shop::all();
        return view('admin.windows.shop.index', compact('shop'));
    }

    public function create()
    {
        return view('admin.windows.shop.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // dd($request->post());
        $imageName = time();
        request()->image->move(public_path('images/shop'), $imageName. '.' . request()->image->getClientOriginalExtension());
        request()->image1->move(public_path('images/shop'), $imageName. '-1.' . request()->image->getClientOriginalExtension());
        request()->image2->move(public_path('images/shop'), $imageName. '-2.' . request()->image->getClientOriginalExtension());
        request()->image3->move(public_path('images/shop'), $imageName. '-3.' . request()->image->getClientOriginalExtension());
        request()->image4->move(public_path('images/shop'), $imageName. '-4.' . request()->image->getClientOriginalExtension());
        Image::make(request()->image1)->resize(300, 300)->save( public_path('/img/product_img/') );


        $imageNameArray =[
            $imageName. '.' . request()->image->getClientOriginalExtension(),
            $imageName. '-1.' . request()->image->getClientOriginalExtension(),
            $imageName. '-2.' . request()->image->getClientOriginalExtension(),
            $imageName. '-3.' . request()->image->getClientOriginalExtension(),
            $imageName. '-4.' . request()->image->getClientOriginalExtension(),
            $imageName. '-s1.' . request()->image->getClientOriginalExtension(),
            $imageName. '-s2.' . request()->image->getClientOriginalExtension(),
            $imageName. '-s3.' . request()->image->getClientOriginalExtension(),
            $imageName. '-s4.' . request()->image->getClientOriginalExtension(),
        ] ;
        Shop::create($request->post() + ['images' => $imageNameArray]);
        return redirect()->route('shop.index')->with('success', 'Product has been added successfully.');
    }
    public function show(Shop $teacher)
    {
        return view('products.show', compact('teacher'));
    }

    public function edit(Shop $shop)
    {
        return view('admin.windows.shop.edit', compact('shop'));
    }
    public function update(Request $request, Shop $shop)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // dd(request()->image);
        $data = $request->all();
        if (request()->image) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            File::delete(public_path('images/teacher/' . $shop->image));
            request()->image->move(public_path('images/teacher'), $imageName);
            $data['image'] = $imageName;
        }

        if (request()->image1) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            File::delete(public_path('images/teacher/' . $shop->image));
            request()->image->move(public_path('images/teacher'), $imageName);
            $data['image'] = $imageName;
        }
        if (request()->image2) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            File::delete(public_path('images/teacher/' . $shop->image));
            request()->image->move(public_path('images/teacher'), $imageName);
            $data['image'] = $imageName;
        }
        if (request()->image3) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            File::delete(public_path('images/teacher/' . $shop->image));
            request()->image->move(public_path('images/teacher'), $imageName);
            $data['image'] = $imageName;
        }
        if (request()->image4) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            File::delete(public_path('images/teacher/' . $shop->image));
            request()->image->move(public_path('images/teacher'), $imageName);
            $data['image'] = $imageName;
        }
        
        $shop->update($data);
        return redirect()->route('shop.index')
            ->with('success', 'Teacher updated successfully');
    }
    public function destroy(Shop $teacher)
    {
        $teacher->delete();
        return redirect()->route('shop.index')
            ->with('success', 'Product deleted successfully');
    }
}
