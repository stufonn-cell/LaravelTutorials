<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductApiController extends Controller
{
    public function index(): JsonResponse
    {
    $products = Product::all();

    return response()->json($products, 200);
    }

    public function show(string $id): JsonResponse
    {
        $product = Product::findOrFail($id);

        return response()->json($product, 200);
    }

    public function store(Request $request): JsonResponse
    {
        $product = Product::create($request->all());

        return response()->json(new ProductResource($product), 201);
    }
}