<?php

namespace App\Http\Controllers;

use App\Models\Appliance;
use Exception;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Appliances = Appliance::all();
        return response()->json([
        "success" => true,
        "message" => "Appliance List",
        "data" => $Appliances
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
            'detail' => 'required',
            'voltage' => 'required',
            'label' => 'required'
            ]);

        if($validator->fails()){
            throw new Exception('Create Error. '. $validator->errors());
        }

        $appliance = Appliance::create($input);
            return response()->json([
            "success" => true,
            "message" => "appliance created successfully.",
            "data" => $appliance
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appliance  $Appliance
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $appliance = Appliance::find($id);

        return response()->json([
            "success" => true,
            "data" => $appliance
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appliance  $Appliance
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, int $Appliance)
    {
        $input = $request->all();
        $appliance = Appliance::find($Appliance);

        if (is_null($appliance)) {
            throw new Exception('appliance not found.');
        }
        $validator = Validator($input, [
            'name' => 'required',
            'detail' => 'required',
            'voltage' => 'required',
            'label' => 'required'
            ]);
        if($validator->fails()){
            throw new Exception('Validation Error.' . $validator->errors());
        }

        $appliance->name = $input['name'];
        $appliance->detail = $input['detail'];
        $appliance->voltage = $input['voltage'];
        $appliance->label = $input['label'];
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
    public function destroy(int $Appliance)
    {
        $appliance = Appliance::find($Appliance);

        if (is_null($appliance)) {
            throw new Exception('appliance not found.');
        }

        $appliance->delete();

        return response()->json([
            "success" => true,
            "message" => "Appliance nro:". $Appliance ." deleted successfully.",
        ]);
    }
}
