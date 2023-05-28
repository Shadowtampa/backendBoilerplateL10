<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Services\ProductService;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->productService->index();
    }

    
    public function stock(){
        return $this->productService->stock();
    }

    public function hasStock($id){
        return $this->productService->hasStock($id);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return $this->productService->create($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->productService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return $this->productService->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {
        return $this->productService->update( $request,$id); 
    }

    public function updateAmount(Request $request, $id)
    {
        return $this->productService->updateAmount($request->amount,$id); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        return $this->productService->delete($id); 
    }
}
