<?php
declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class BaseRepository
 *
 * @package \App\Repositories
 */
class BaseRepository implements BaseRepositoryInterface
{

    /**      
     * BaseRepository constructor.      
     * @var Model        
     * @param Model $model      
    */ 
    public function __construct(public Model $model)
    {}

    /**
    * Read All Entities in the model
    * @return Collection
    */
    public function all(): Collection
    {
        return $this->model->all();
    }
} 