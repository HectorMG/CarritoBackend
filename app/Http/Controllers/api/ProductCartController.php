<?php

namespace App\Http\Controllers\api;

use App\Cart_Product;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        $precio_total = $product->price * $request->cantidad;

        Cart_Product::create([
            'product_id' => $request->product_id,
            'cart_id' => $request->cart_id,
            'cantidad' => $request->cantidad,
            'precio_total' => $precio_total
        ]);

        return response()->json([
            'message' => 'El producto se agregó a tu carrito',
            'id' => $request->product_id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart_Product  $cart_Product
     * @return \Illuminate\Http\Response
     */
    public function show($cart_Product)
    {
        $products_cart = Cart_Product::where('cart_id',"=",$cart_Product)->get();
        if(count($products_cart))
        {
            for ($i=0; $i < count($products_cart) ; $i++) { 
                $products_cart[$i]->cart;
                $products_cart[$i]->product;
                $products_cart[$i]->product->store;
                $products_cart[$i]->product->category;
            }
            return response()->json([
                'productsCart' => $products_cart
            ],Response::HTTP_OK);
        }else{
            return response()->json([
                'message' => 'Tu carrito está vacío'
            ]);
        }
    }


    public function buscarVendido($id,$id_cart)
    {
        $product_cart = Cart_Product::where('product_id',"=",$id)->where('cart_id',"=",$id_cart)->get();
        if(count($product_cart))
        {
            return response()->json([
                'id_vendido' => $product_cart[0]->product_id
            ]);
        }else{
            return response()->json([
                'message' => 'No se encontró'
            ]);
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart_Product  $cart_Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cart_Product)
    {
        $product_cart = Cart_Product::find($cart_Product);
        if($product_cart)
        {
            $product_cart->cantidad = $request->cantidad;
            $product_cart->precio_total = $product_cart->product->price * $product_cart->cantidad;
            $product_cart->update();
            
            return $this->show($product_cart->cart_id);
        }
    }

    public function removeProduct($id,$cart_id)
    {
        $product_cart = Cart_Product::where('product_id',"=",$id)->where('cart_id',"=",$cart_id)->get();
        if (count($product_cart)) {
            $product_cart[0]->delete();
            return $this->show($cart_id);
        }
        return response()->json([
            'error' => 'Algo salio mal'
        ],Response::HTTP_NOT_FOUND);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart_Product  $cart_Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart_Product = Cart_Product::where('cart_id','=',$id)->get();
        $user = new AuthController();

        
        for ($i=0; $i < count($cart_Product); $i++) 
        { 
            $user->update($cart_Product[$i]->cart->user_id,$cart_Product[$i]->precio_total);
            $cart_Product[$i]->delete();
        }
        return response()->json([
            "message" => "Compra Realizada"
        ]);
    }
}
