<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class DemoLaravel12Ideas extends Controller
{
    public function __invoke(Request $request)
    {
        // streamlined policies
        Gate::authorize('viewAny', User::class);

        // fillable vs. guarded
        $user->create($request->safe());
        $user->forceFill($request->safe()->all())->create();

        // return 200;
        return HttpStatus::ok;
    }
}
