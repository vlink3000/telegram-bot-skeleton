<?php declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\User\Entity\User;

interface UserRepositoryInterface
{
    /**
     * @return array
     */
    public function getLogs(): array;

    /**
     * @return void
     */
    public function truncate(): void;
}