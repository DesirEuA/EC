<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('top');
//});
Route::get("/",function(){

    return view("image");
});



Route::get("/top",function(){
    $items = DB::select("SELECT * FROM items");
    return view("toppage",[
        "items" => $items
    ]);
});

Route::get("/detail/{item_id}",function($itemId){
    $items = DB::select("SELECT * FROM items where id = ?",[$itemId]);


    if(count($items)){
        return view("detail",[
            "item" => $items[0]
        ]);
    }else{
        return abort(404);
    }
});

Route::get("/add",function(){
    $items = DB::select("SELECT * FROM items");
    return redirect("/cart");
});

// [GET] /cart カートの表示
Route::get("/cart",function(){

    $cartItems = request()->session()->get("CART",[]);
    return view("cart",[
        "items" => $cartItems
    ]);
});

// [POST] /cart/{item_id} カートの追加
Route::post("/cart/{item_id}",function($itemId){
    $items = DB::select("SELECT * FROM items where id = ?",[$itemId]);
    if(count($items)){
        $cartItems = request()->session()->get("CART",[]);
        $cartItems[] = $items[0];
        request()->session()->put("CART",$cartItems);
        return redirect("/cart");
    }else{
        return abort(404);
    }
});

// [POST] /cart/{item_id} カートの全削除
//Route::get("/cart/d",function(){
        //request()->session()->forget("CART");
        //return redirect("/cart");
//});
//購入後全削除
Route::get("/cart/de",function(){
    request()->session()->forget("CART");
    return redirect("/top");
});
// [POST] /cart/delete/{index} カートの個別削除
Route::post("/cart/delete/{index}",function($index){


    session()->forget("CART.$index");
    return redirect('/cart');
});

//購入画面
Route::get("buy",function(){
    return view("buy");
});

//購入処理
Route::post("buy",function(){
    $validator = Validator::make(request()->all(), [
        'name' => ['required'],
        'email' => ['required'],
    ])->validate();
    return redirect("thanks");
});
//購入後画面
Route::get("thanks",function(){
    return view("thanks");
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
