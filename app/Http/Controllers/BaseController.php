<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller {

    protected $service;
   
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

    public function post(Request $request){
        $data = $this->service->save($request);
        return response()->json(['data' => $data], 201);
    }

    public function show(string $id)
    {
        $data = $this->service->get($id);
        return response()->json(['data' => $data], 200);
    }

    public function put(Request $request, $id)
    {
        $data = $this->service->update($request, $id);
        return response()->json(['data' => $data, 'message' => 'Resource updated successfully'], 200);
    }

    public function destroy(string $id){
        $this->service->delete($id);
        return response()->json(['message' => 'Resource deleted successfully'], 200);
    }

}