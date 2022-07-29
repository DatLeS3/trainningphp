<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trainning;

class TrainningController extends Controller
{
    public function store(Request $request) //tao 
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'priority' => 'nullable|integer|min:1|max:3',
            'done' => 'boolean'
        ]);

        $trainning = trainning::create($data);
        //return Json not view
        return response()->json([
            'status' => true,
            'message' => 'trainning created',
            'data' => $trainning,
        ], 201); //tu sua chua, add status
    }

    public function index(Request $request) // hien thi
    {
        $trainning2 = trainning::all();
        return response()->json([
            'status' => true,
            'message' => 'trainning retrieved',
            'data' => $trainning2,
        ]);
    }

    public function show(Request $request, $id) //tim thay
    {
        $trainning = trainning::find($id);
        return response()->json([
            'status' => true,
            'message' => 'trainning found',
            'data' => $trainning,
        ]);
    }

    public function update(Request $request, $id) //cap nhat
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'priority' => 'nullable|integer|min:1|max:3',
            'done' => 'boolean'
        ]);

        $trainning = trainning::find($id);

        if ($trainning) {
            $trainning->update($data);
            return response()->json([
                'status' => true,
                'message' => 'trainning update',
                'data' => $trainning,
            ],200   );
        }else{
            return response()->json([
                'status' => false,
                'message' => 'trainning not found',
                'data' => null,
            ],404);
        }
    }

    public function delete(Request $request, $id) //xoa
    {
        $trainning = trainning::find($id);

        if ($trainning) {
            $trainning->delete();

            return response()->json([
                'status' => true,
                'message' => 'trainning deleted',
                'data' => $trainning,
            ],200   );

        }else{

            return response()->json([
                'status' => false,
                'message' => 'trainning not found',
                'data' => null,
            ],404);
        }
    }
}
