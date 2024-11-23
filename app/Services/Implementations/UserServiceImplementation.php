<?php

namespace App\Services\Implementations;

use App\Exceptions\{
    BadRequestException
};
use App\Http\Resources\V1\UserResource;
use App\Repositories\Interfaces\TokenRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\Interfaces\MailServiceInterface;
use App\Services\Interfaces\OtpServiceInterface;
use App\Services\Interfaces\UserServiceInterface;
use App\Services\Interfaces\WalletServiceInterface;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\DB;

class UserServiceImplementation implements UserServiceInterface
{
    public function __construct(
        private UserRepositoryInterface $userRepositoryInterface,
        private OtpServiceInterface $otpServiceInterface,
        private TokenRepositoryInterface $tokenRepositoryInterface,
        private MailServiceInterface $mailServiceInterface,
        private WalletServiceInterface $walletServiceInterface
    ) {}

    public function getUserById($id, $relationships = [])
    {
        $user = $this->userRepositoryInterface->getUserById($id, $relationships);
        return new UserResource($user);
    }

    public function getFilteredUsers($filteredParams, $relationships = [])
    {
        $users = $this->userRepositoryInterface->getFilteredUsers($filteredParams, $relationships);
        return [
            UserResource::collection($users),
            paginationMetaGenerator($users),
            paginationLinksGenerator($users)
        ];
    }

    public function createUserRecord($data)
    {
        $user = DB::transaction(function () use ($data) {

            $user = $this->userRepositoryInterface->createUserRecord($data);

            $this->walletServiceInterface->create($user->id, 0);

            $this->otpServiceInterface->sendOTP([
                'email' => $user->email,
                'user_id' => $user->id
            ]);

            return $user;
        });


        return new UserResource($user);
    }

    public function getUserByEmail($email, $relationships = [])
    {
        $user = $this->userRepositoryInterface->getUserByEmail($email, $relationships);
        return new UserResource($user);
    }

    public function getUserByPhone($phone, $relationships = [])
    {
        $user = $this->userRepositoryInterface->getUserByPhone($phone, $relationships);
        return new UserResource($user);
    }

    public function verifyUserAccount($code)
    {
        $token = $this->tokenRepositoryInterface->getTokenByCode($code);

        if (is_null($token)) {
            return false;
        }

        DB::transaction(function () use ($token) {
            $this->userRepositoryInterface->updateUserRecord(
                $token->user_id,
                [
                    'email_verified_at' => now()
                ]
            );

            $this->tokenRepositoryInterface->deleteTokenRecord($token->id);
        });

        return true;
    }

    public function updateUserRecord($id, $updateData)
    {
        $user = $this->userRepositoryInterface->updateUserRecord($id, $updateData);

        return new UserResource($user);
    }
    public function getTrashedUserByEmail($email)
    {
        return $this->userRepositoryInterface->getTrashedUserByEmail($email);
    }
}
