<?php

namespace App\Services;

use App\Models\Detail;

class UserService
{
    public function saveUserDetails($user)
    {
        $details = [
            ['key' => 'full_name', 'value' => trim("{$user->firstname} {$user->middlename} {$user->lastname}"), 'user_id' => $user->id],
            ['key' => 'middle_initial', 'value' => strtoupper(substr($user->middlename, 0, 1)), 'user_id' => $user->id],
            ['key' => 'avatar', 'value' => $user->photo ?? null, 'user_id' => $user->id],
            ['key' => 'gender', 'value' => $this->mapGender($user->prefixname), 'user_id' => $user->id],
        ];

        foreach ($details as $data) {
            Detail::updateOrCreate(
                ['key' => $data['key'], 'user_id' => $user->id],
                $data
            );
        }
    }

    protected function mapGender($prefix)
    {
        return match ($prefix) {
            'Mr.' => 'Male',
            'Mrs.', 'Ms.', 'Miss' => 'Female',
            default => 'Other',
        };
    }
}
