<?php
namespace App\Http\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
  protected $product;

  public function __construct(Product $product)
  {
      parent::__construct($product);
      $this->product = $product;
  }
    

  public function stock()
  {
      return $this->obj->all()->mapWithKeys(function ($item) {
          return [$item->id => ['amount' => $item->amount, 'title' => $item->title]];
      });
  }
  public function hasStock($id)
  {
      return $this->obj->select('amount')->whereId($id)->get()->mapWithKeys(function ($item) {
          return ['amount' => $item->amount];
      });
  }
  
  public function updateAmount($amount, $id){
    $product = $this->find($id);
    $product->amount -= $amount;

    return $product->save();
  }
}
