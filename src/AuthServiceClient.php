<?php

declare(strict_types = 1);

namespace SmartWallet\AuthClient;

class AuthServiceClient implements AuthServiceClientInterface
{
    public function __construct(
        private string $authServiceUrl,
    ) {
    }

    public function checkToken(string $token): array
    {
        $url = "$this->authServiceUrl/check-token.php";

        // Create a stream
        $opts = [
            "http" => [
                "method" => "GET",
                "header" => "Authorization: $token\r\n"
            ]
        ];

        $context = stream_context_create($opts);

        $serverOutput = file_get_contents($url, false, $context);

        return json_decode($serverOutput, true);
    }
}