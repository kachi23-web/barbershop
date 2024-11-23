<?php

namespace App\Services\Interfaces;

interface UserServiceInterface
{
    public function getUserById($id, $relationships = []);
    public function getFilteredUsers($filteredParams, $relationships = []);
    public function createUserRecord($data);
    public function getUserByEmail($email, $relationships = []);
    public function getUserByPhone($email, $relationships = []);
    public function verifyUserAccount($code);
    public function updateUserRecord($id, $updateData);
    public function getTrashedUserByEmail($email);
}
