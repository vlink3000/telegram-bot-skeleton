<?php

namespace App\Domain\User\Entity;

use Carbon\Carbon;

class User
{
    /**
     * @var int
     */
    private $userTelegramId;
    /**
     * @var string
     */
    private $userName;
    /**
     * @var string
     */
    private $message;
    /**
     * @var string
     */
    private $languageCode;
    /**
     * @var Carbon
     */
    private $lastRequestAt;

    /**
     * @return int
     */
    public function getUserTelegramId(): int
    {
        return $this->userTelegramId;
    }

    /**
     * @param int $userTelegramId
     */
    public function setUserTelegramId(int $userTelegramId): void
    {
        $this->userTelegramId = $userTelegramId;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * @param string $languageCode
     */
    public function setLanguageCode(string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }

    /**
     * @return Carbon
     */
    public function getLastRequestAt(): Carbon
    {
        return $this->lastRequestAt;
    }

    /**
     * @param Carbon $lastRequestAt
     */
    public function setLastRequestAt(Carbon $lastRequestAt): void
    {
        $this->lastRequestAt = $lastRequestAt;
    }
}