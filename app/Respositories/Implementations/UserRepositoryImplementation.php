<?php

namespace App\Repositories\Implementations;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class UserRepositoryImplementation implements UserRepositoryInterface
{
    public function __construct(
        private User $user
    ) {}

    public function getUserById($id, $relationships = [])
    {
        return $this->user->with($relationships)->find($id);
    }

    public function getFilteredUsers($filteredParams, $relationships = [])
    {
        $perPage = $filteredParams['per_page'] ?? 10;
        $fromCache = $filteredParams['from_cache'] ?? false;
        $currentPage = $filteredParams['page'] ?? 1;

        if ($fromCache) {
            $cachedUsers = Cache::get("users_page_{$currentPage}_per_page_{$perPage}");
            if ($cachedUsers) {
                return $cachedUsers;
            }
        }

        $users = $this->user->with(
            $relationships
        )->latest()->paginate($perPage);

        Cache::put("users_page_{$currentPage}_per_page_{$perPage}", $users, 3600);

        return $users;
    }

    public function createUserRecord($data)
    {
        return $this->user->create($data);
    }

    public function getUserByEmail($email, $relationships = [])
    {
        return $this->user->with($relationships)->where('email', $email)->first();
    }

    public function getUserByPhone($phone, $relationships = [])
    {
        return $this->user->with($relationships)->where('phone', $phone)->first();
    }
    public function getTrashedUserByEmail($email)
    {
        return $this->user->withTrashed()
            ->where('email', $email)
            ->first();
    }

    public function updateUserRecord($id, $updateData)
    {
        $this->user->where([
            'id' => $id
        ])->withTrashed()->update($updateData);

        return $this->getUserById($id);
    }
}
