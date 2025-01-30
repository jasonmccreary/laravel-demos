<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DemoLaravel12Ideas extends Controller
{
    public function __invoke(Request $request)
    {
        // streamlined policies
        Gate::authorize('viewAny', User::class);

        // fillable vs. guarded
        $request->user()->create($request->safe());
        $request->user()->forceFill($request->safe()->all())->create();

        // return 200;
        return HttpStatus::ok;
    }
}
