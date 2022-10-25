<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Http\Resources\TypeResource;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    protected $types;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->types = Type::all();
        $typeResource = TypeResource::collection($this->types);
        return $this->sendResponse($typeResource, "Successfully Get Types!", "types");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeRequest $request)
    {
        $type = new Type();
        $typeCount = Type::all()->count();

        $type->type_id = "TYP-" . str_pad($typeCount+1, 3, "0", STR_PAD_LEFT) . "-" . strtoupper(substr($request->name, 0, 3));
        $type->material_id = $request->material_id;
        $type->name = $request->name;

        $type->save();

        return $this->sendResponse(new TypeResource($type), "Successfully Post Type!", "types");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type = Type::where('type_id', '=', $type->type_id);
        $type->delete();
        return $this->sendResponse([], "Successfully Delete Type!", "types");
    }
}
