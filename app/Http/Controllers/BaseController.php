<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller {

    protected $service;

    protected $dataObject;
   
    public function index(Request $request)
    {
        $perPage = $request->query('per_page',10);
        $page = $request->query('page',1);
        $sortBy = $request->query('sort_by', 'id');
        $sortDirection = $request->query('sort_dir', 'asc'); 
        $search = $request->query('search', ''); 
        $data = $this->service->getAll($perPage, $page, $sortBy, $sortDirection, $search);
        return response()->json($data);
    }

    public function store(Request $request){
        $dto = $this->dataObject::from($request);
        $data = $this->service->save($dto);
        return response()->json(['data' => $data], 201);
    }

    public function show(string $id)
    {
        $data = $this->service->get($id);
        return response()->json(['data' => $data], 200);
    }

    public function update(Request $request, $id)
    {
        $dto = $this->dataObject::from($request);
        $data = $this->service->update($dto, $id);
        return response()->json(['data' => $data, 'message' => 'Resource updated successfully'], 200);
    }

    public function destroy(string $id){
        $this->service->delete($id);
        return response()->json(['message' => 'Resource deleted successfully'], 200);
    }

}