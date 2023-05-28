<?php

namespace App\Http\Interfaces;

use Illuminate\Http\Request;


interface ProductInterface extends BaseInterface
{
  public function stock();
  public function hasStock($id);
}