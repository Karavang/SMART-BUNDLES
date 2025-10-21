<?php

namespace App\Services;

use App\Models\UserProfile;

class UserService
{
    public function findOrFail(int $id): UserProfile
    {
        return UserProfile::findOrFail($id);
    }

    public function updateOrCreate(int $id, array $data): UserProfile
    {
        $userProfile = UserProfile::find($id);

        if ($userProfile) {
            $userProfile->update($data);
        } else {
            $userProfile = UserProfile::create(array_merge($data, ['id' => $id]));
        }

        return $userProfile;
    }
}
