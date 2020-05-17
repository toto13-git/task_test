<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;

class ShopController extends Controller
{
  //主従関係がある

  public function index()
  {
    //主 -> 従に指定する
    //shopsはareaモデルで設定したメソッド
    $area_tokyo = Area::find(1)->shops;
    // dd($area_tokyo);

    //従 -> 主 に指定する
    // araeaはshopモデルで指定したメソッド
    $shop = Shop::find(3)->area->name;
    // dd($area_tokyo, $shop);

    //多対多
    $shop_route = Shop::find(1)->routes()->get();
    dd($area_tokyo, $shop, $shop_route);
  }
}
