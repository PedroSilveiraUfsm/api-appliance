<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Appliance;
use Illuminate\Http\Request;
use Validator;
class ApplianceController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$appliances = Appliance::all();
return response()->json([
"success" => true,
"message" => "appliance List",
"data" => $appliances
]);
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$input = $request->all();
$validator = Validator::make($input, [
'name' => 'required',
'detail' => 'required'
]);
if($validator->fails()){
return $this->sendError('Validation Error.', $validator->errors());       
}
$appliance = appliance::create($input);
return response()->json([
"success" => true,
"message" => "appliance created successfully.",
"data" => $appliance
]);
} 
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$appliance = appliance::find($id);
if (is_null($appliance)) {
return $this->sendError('appliance not found.');
}
return response()->json([
"success" => true,
"message" => "appliance retrieved successfully.",
"data" => $appliance
]);
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Appliance $appliance)
{
$input = $request->all();
$validator = Validator::make($input, [
'name' => 'required',
'detail' => 'required'
]);
if($validator->fails()){
return $this->sendError('Validation Error.', $validator->errors());       
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
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy(Appliance $appliance)
{
$appliance->delete();
return response()->json([
"success" => true,
"message" => "appliance deleted successfully.",
"data" => $appliance
]);
}
}