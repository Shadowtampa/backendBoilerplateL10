<?php


namespace App\Http\Services;

use App\Http\Interfaces\ProductInterface;
use App\Http\Repositories\ProductRepository;
use Illuminate\Http\Request;
class ProductService implements ProductInterface 
{

  protected $productRepository;

  public function __construct(ProductRepository $productRepository)
  {
    $this->productRepository = $productRepository;
  }
  

  public function index(){
    return  $this->productRepository->all();
  }

  public function stock()
  {
    return $this->productRepository->stock();
  }

  public function hasStock($id)
  {
    return $this->productRepository->hasStock($id);
  }

  public function show($id)
  {
    return $this->productRepository->find($id);
  }

  public function create($request)
  {
    return $this->productRepository->save($request->all());
  }

  public function update($request, $id)
{
    return $this->productRepository->update($request->all(), $id);
}

public function updateAmount($amount, $id)
{

  return $this->productRepository->updateAmount($amount, $id);
}

public function delete($id)
{
    return $this->productRepository->destroy($id);
}


}