<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Http\Request as HttpRequest;

use Illuminate\Support\Facades\Auth;


class RequestController extends Controller
{
     public function index()
    {
        $requests = Request::with('user')->get();
        return response()->json($requests);
    }

    public function store(HttpRequest $request)
    {
        $newRequest = Request::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'PENDING',
        ]);

        return response()->json($newRequest, 201);
    }

    public function update(HttpRequest $request, $id)
    {
        $existingRequest = Request::findOrFail($id);
        $existingRequest->update($request->only(['status']));
        return response()->json($existingRequest);
    }

    public function destroy($id)
    {
        $existingRequest = Request::findOrFail($id);
        $existingRequest->delete();
        return response()->json(null, 204);
    }
}
