<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()->json([
        "success" => true,
        "message" => "Product List",
        "data" => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Request
     */
    public function create(Request $request)
    {
        $input = $request->all();

        $validator = Validator($input, [
            'name' => 'required',
            'detail' => 'required'
            ]);

        if($validator->fails()){
            throw new Exception('Create Error. '. $validator->errors());
        }

        $appliance = Product::create($input);
            return response()->json([
            "success" => true,
            "message" => "appliance created successfully.",
            "data" => $appliance
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $appliance = Product::find($id);

        return response()->json([
            "success" => true,
            "data" => $appliance
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, int $product)
    {
        $input = $request->all();
        $appliance = Product::find($product);

        if (is_null($appliance)) {
            throw new Exception('appliance not found.');
        }
        $validator = Validator($input, [
            'name' => 'required',
            'detail' => 'required'
            ]);
        if($validator->fails()){
            throw new Exception('Validation Error.' . $validator->errors());
        }

        $appliance->name = $input['name'];
        $appliance->detail = $input['detail'];
        $appliance->save();
        return response()->json([
            "success" => true,
            "message" => "appliance updated successfully.",
            "data" => $appliance
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $product)
    {
        $appliance = Product::find($product);

        if (is_null($appliance)) {
            throw new Exception('appliance not found.');
        }

        $appliance->delete();

        return response()->json([
            "success" => true,
            "message" => "Product nro:". $product ." deleted successfully.",
        ]);
    }
}
