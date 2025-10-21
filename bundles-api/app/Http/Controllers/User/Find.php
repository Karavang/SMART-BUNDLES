<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class Find extends Controller
{
    public function __construct(
        protected UserService $userService
    ) {}

    public function __invoke(int $id): JsonResponse
    {
        $userProfile = $this->userService->findOrFail($id);

        return response()->json($userProfile);
    }
}
