<?php

namespace App\Services\Interfaces;

interface TokenServiceInterface
{
    public function createTokenRecord($data);
    public function getTokenByCode($code, $relationships = []);
    public function deleteTokenRecord($id);
}
