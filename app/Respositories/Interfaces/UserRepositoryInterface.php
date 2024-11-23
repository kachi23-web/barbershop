<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function getUserById($id, $relationships = []);
    public function getFilteredUsers($filteredParams, $relationships = []);
    public function createUserRecord($data);
    public function getUserByEmail($email, $relationships = []);

    public function getUserByPhone($phone, $relationships = []);

    public function getTrashedUserByEmail($email);
    public function updateUserRecord($id, $updateData);
}
