<?php

namespace App\Query;

class GetCartDetailsQuery
{
    private string $sessionId;

    public function __construct(string $sessionId)
    {
        $this->sessionId = $sessionId;
    }

    public function getSessionId(): string
    {
        return $this->sessionId;
    }
}
