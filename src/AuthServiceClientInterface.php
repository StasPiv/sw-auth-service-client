<?php

declare(strict_types = 1);

namespace SmartWaller\AuthClient;

interface AuthServiceClientInterface
{
    public function checkToken(string $token): array;
}