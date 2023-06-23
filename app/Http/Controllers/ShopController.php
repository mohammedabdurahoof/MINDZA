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
        request()->image->move(public_path('images/shop'), $imageName . '.' . request()->image->getClientOriginalExtension());
        request()->image1->move(public_path('images/shop'), $imageName . '-1.' . request()->image1->getClientOriginalExtension());
        request()->image2->move(public_path('images/shop'), $imageName . '-2.' . request()->image2->getClientOriginalExtension());
        request()->image3->move(public_path('images/shop'), $imageName . '-3.' . request()->image3->getClientOriginalExtension());
        request()->image4->move(public_path('images/shop'), $imageName . '-4.' . request()->image4->getClientOriginalExtension());
        Image::make(public_path('images/shop/' . $imageName . '-1.' . request()->image1->getClientOriginalExtension()))->resize(136, 112)->crop(98, 99)->save(public_path('images/shop/' . $imageName . '-s1.' . request()->image1->getClientOriginalExtension()));
        Image::make(public_path('images/shop/' . $imageName . '-2.' . request()->image2->getClientOriginalExtension()))->resize(136, 112)->crop(98, 99)->save(public_path('images/shop/' . $imageName . '-s2.' . request()->image2->getClientOriginalExtension()));
        Image::make(public_path('images/shop/' . $imageName . '-3.' . request()->image3->getClientOriginalExtension()))->resize(136, 112)->crop(98, 99)->save(public_path('images/shop/' . $imageName . '-s3.' . request()->image3->getClientOriginalExtension()));
        Image::make(public_path('images/shop/' . $imageName . '-4.' . request()->image4->getClientOriginalExtension()))->resize(136, 112)->crop(98, 99)->save(public_path('images/shop/' . $imageName . '-s4.' . request()->image4->getClientOriginalExtension()));

        $imageNameArray = [
            $imageName . '.' . request()->image->getClientOriginalExtension(),
            $imageName . '-1.' . request()->image->getClientOriginalExtension(),
            $imageName . '-2.' . request()->image->getClientOriginalExtension(),
            $imageName . '-3.' . request()->image->getClientOriginalExtension(),
            $imageName . '-4.' . request()->image->getClientOriginalExtension(),
            $imageName . '-s1.' . request()->image->getClientOriginalExtension(),
            $imageName . '-s2.' . request()->image->getClientOriginalExtension(),
            $imageName . '-s3.' . request()->image->getClientOriginalExtension(),
            $imageName . '-s4.' . request()->image->getClientOriginalExtension(),
        ];
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
        $data['images'] = $shop->images;
        if (request()->image) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            File::delete(public_path('images/shop/' . $shop->images[0]));
            request()->image->move(public_path('images/shop'), $imageName);
            $data['images'][0] = $imageName;
        }
        if (request()->image1) {
            $imageName = time();
            File::delete(public_path('images/shop/' . $shop->images[1]));
            File::delete(public_path('images/shop/' . $shop->images[5]));
            request()->image1->move(public_path('images/shop'), $imageName . '-1.' . request()->image1->getClientOriginalExtension());
            Image::make(public_path('images/shop/' . $imageName . '-1.' . request()->image1->getClientOriginalExtension()))->resize(136, 112)->crop(98, 99)->save(public_path('images/shop/' . $imageName . '-s1.' . request()->image1->getClientOriginalExtension()));
            $data['images'][1] = $imageName . '-1.' . request()->image1->getClientOriginalExtension();
            $data['images'][5] = $imageName . '-s1.' . request()->image1->getClientOriginalExtension();
        }
        if (request()->image2) {
            $imageName = time();
            File::delete(public_path('images/shop/' . $shop->images[2]));
            File::delete(public_path('images/shop/' . $shop->images[6]));
            request()->image2->move(public_path('images/shop'), $imageName . '-2.' . request()->image2->getClientOriginalExtension());
            Image::make(public_path('images/shop/' . $imageName . '-2.' . request()->image2->getClientOriginalExtension()))->resize(136, 112)->crop(98, 99)->save(public_path('images/shop/' . $imageName . '-s2.' . request()->image2->getClientOriginalExtension()));
            $data['images'][2] = $imageName . '-2.' . request()->image2->getClientOriginalExtension();
            $data['images'][6] = $imageName . '-s2.' . request()->image2->getClientOriginalExtension();
        }
        if (request()->image3) {
            $imageName = time();
            File::delete(public_path('images/shop/' . $shop->images[3]));
            File::delete(public_path('images/shop/' . $shop->images[7]));
            request()->image3->move(public_path('images/shop'), $imageName . '-3.' . request()->image3->getClientOriginalExtension());
            Image::make(public_path('images/shop/' . $imageName . '-3.' . request()->image3->getClientOriginalExtension()))->resize(136, 112)->crop(98, 99)->save(public_path('images/shop/' . $imageName . '-s3.' . request()->image3->getClientOriginalExtension()));
            $data['images'][3] = $imageName . '-3.' . request()->image3->getClientOriginalExtension();
            $data['images'][7] = $imageName . '-s3.' . request()->image3->getClientOriginalExtension();
        }
        if (request()->image4) {
            $imageName = time();
            File::delete(public_path('images/shop/' . $shop->images[4]));
            File::delete(public_path('images/shop/' . $shop->images[8]));
            request()->image4->move(public_path('images/shop'), $imageName . '-4.' . request()->image4->getClientOriginalExtension());
            Image::make(public_path('images/shop/' . $imageName . '-4.' . request()->image4->getClientOriginalExtension()))->resize(136, 112)->crop(98, 99)->save(public_path('images/shop/' . $imageName . '-s4.' . request()->image4->getClientOriginalExtension()));
            $data['images'][4] = $imageName . '-4.' . request()->image4->getClientOriginalExtension();
            $data['images'][8] = $imageName . '-s4.' . request()->image4->getClientOriginalExtension();
        }
        // dd($data);

        $shop->update($data);
        return redirect()->route('shop.index')
            ->with('success', 'Teacher updated successfully');
    }
    public function destroy(Shop $shop)
    {
        File::delete(public_path('images/shop/' . $shop->images[0]));
        File::delete(public_path('images/shop/' . $shop->images[1]));
        File::delete(public_path('images/shop/' . $shop->images[2]));
        File::delete(public_path('images/shop/' . $shop->images[3]));
        File::delete(public_path('images/shop/' . $shop->images[4]));
        File::delete(public_path('images/shop/' . $shop->images[5]));
        File::delete(public_path('images/shop/' . $shop->images[6]));
        File::delete(public_path('images/shop/' . $shop->images[7]));
        File::delete(public_path('images/shop/' . $shop->images[8]));

        $shop->delete();
        return redirect()->route('shop.index')
            ->with('success', 'Product deleted successfully');
    }
}
