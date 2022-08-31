<?php
//declare(strict_types=1);

namespace App\Repository;

use App\Models\User ;
use Illuminate\Support\Collection;

/**
 * Class UserRepository
 *
 * @package \App\Repositories
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
