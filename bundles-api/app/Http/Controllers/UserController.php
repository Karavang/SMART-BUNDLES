<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function show($id)
    {
        $userProfile = UserProfile::find($id);

        if (!$userProfile) {
            return response()->json(['message' => 'UserProfile not found'], 404);
        }

        return response()->json($userProfile);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'country' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'postcode' => 'nullable|string|max:20',
            'idCode' => 'nullable|string|max:50',
            'birthday' => 'nullable|string|max:10',
            'idPhoto' => 'nullable|string|max:255',
            'facebook' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'phones' => 'nullable|string|max:255',
            'mobile' => 'nullable|string|max:255',
            'home' => 'nullable|string|max:255',
            'interests' => 'nullable|json',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = $validator->validated();
        $userProfile = UserProfile::find($id);

        if ($userProfile) {
            $userProfile->update($data);
            $message = 'UserProfile updated successfully';
        } else {
            $userProfile = UserProfile::create(array_merge($data, ['id' => $id]));
            $message = 'UserProfile created successfully';
        }

        return response()->json([
            'message' => $message,
            'data' => $userProfile
        ], 200);
    }
}
