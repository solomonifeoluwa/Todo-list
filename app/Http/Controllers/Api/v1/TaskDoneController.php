<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TodoResource;
use App\Models\Todo;
use Illuminate\Http\Request;

class TaskDoneController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Todo $todo)
    {
        $todo->done = $request->done;
        $todo->save();

        return TodoResource::make($todo);
    }
}
