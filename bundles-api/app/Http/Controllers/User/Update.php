<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class Update extends Controller
{
    public function __construct(
        protected UserService $userService
    ) {}

    public function __invoke(UserUpdateRequest $request, int $id): JsonResponse
    {
        $userProfile = $this->userService->updateOrCreate($id, $request->validated());

        return response()->json([
            'message' => 'UserProfile saved successfully',
            'data' => $userProfile
        ]);
    }
}
