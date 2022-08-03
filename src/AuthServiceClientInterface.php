<?php

declare(strict_types = 1);

namespace SmartWallet\AuthClient;

interface AuthServiceClientInterface
{
    public function checkToken(string $token): array;
}