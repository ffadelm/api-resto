<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\ProductsResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Ambil semua data produk dari database
        $products = Products::all();

        // Return data dalam bentuk JSON menggunakan resource ProductsResource
        return ProductsResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari request menggunakan Validator
        $validator = Validator::make($request->all(), [
            'kode' => 'required|string',
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,heic,heif,webp|max:2048',
        ]);

        // Jika validasi gagal, kembalikan respons JSON dengan pesan error
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
        }

        // Jika validasi berhasil, simpan data ke database
        $photo = $request->file('gambar');
        $photo->storeAs('public/images', $photo->hashName());

        Products::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar' => $photo->hashName(),
        ]);

        // Kembalikan respons JSON dengan pesan sukses
        return response()->json(['message' => 'produk berhasil ditambahkan'], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $product
     * @return \App\Http\Resources\ProductsResource
     */
    public function show(Products $product)
    {
        // Return data produk dalam bentuk JSON menggunakan resource ProductsResource
        return new ProductsResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Products $product)
    {
        // Validasi data yang diterima dari request menggunakan Validator
        $validator = Validator::make($request->all(), [
            'kode' => 'required|string',
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'gambar' => 'image|mimes:jpg,png,jpeg,heic,heif,webp|max:2048',
        ]);

        // Jika validasi gagal, kembalikan respons JSON dengan pesan error
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
        }

        // Jika ada file gambar yang diunggah, simpan gambar baru dan hapus gambar lama
        if ($request->hasFile('gambar')) {
            $photo = $request->file('gambar');
            $photo->storeAs('public/images', $photo->hashName());

            Storage::delete('public/images/' . $product->gambar);

            $product->gambar = $photo->hashName();
        }

        // Update data produk dengan data baru dari request
        $product->kode = $request->kode;
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->save();

        // Kembalikan respons JSON dengan pesan sukses
        return response()->json(['message' => 'Data berhasil diupdate'], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Products $product)
    {
        // Hapus gambar terkait dari penyimpanan
        Storage::delete('public/images/' . $product->gambar);

        // Hapus data produk dari database
        $product->delete();

        // Kembalikan respons JSON dengan pesan sukses
        return response()->json(['message' => 'produk berhasil dihapus'], Response::HTTP_OK);
    }
}
