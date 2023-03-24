<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\ProductGalleryRequest;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;
use App\Models\ProductGallery;

class ProductGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (request()->ajax()) {

            $query = ProductGallery::with(['product']);
            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                   <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle me-1 mb-1"
                                type="button" data-bs-toggle="dropdown">
                                Aksi
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('product.edit', $item->id) . '">
                                Sunting
                                </a>
                                <form action="' . route('product.destroy', $item->id) . '" method="POST">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="dropdown-item text-danger">
                                    Hapus
                                </button>
                                </form>
                            </div>
                        </div>
                   </div>
                   ';
                })
                ->editColumn('photos', function ($item) {
                    return $item->photos ? '<img src="' . Storage::url($item->photos) . '" style="max-height: 80px;" />' : '';
                })
                ->rawColumns(['action', 'photos'])
                ->make();
        }
        return view('pages.admin.product-gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = User::all();
        $categories = Category::all();
        return view('pages.admin.product-gallery.create', [
            'users' => $users,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductGalleryRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        Product::create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::all();
        $categories = Category::all();
        $item = Product::findOrFail($id);
        return view('pages.admin.product-gallery.edit', [
            'item' => $item,
            'users' => $users,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductGalleryRequest $request, string $id)
    {
        $data = $request->all();

        $item = Product::findOrFail($id);
        $data['slug'] = Str::slug($request->name);


        $item->update($data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $item = Product::findOrFail($id);
        $item->delete();
        return redirect()->route('product.index');
    }
}
