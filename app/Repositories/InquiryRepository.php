<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Inquiry;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Bus;
use App\Repositories\IInquiryReposiotry;
use Illuminate\Bus\Dispatcher;

/**
 * Class InquiryRepository
 *
 * @package \App\Repositories
 */
class InquiryRepository implements InquiryRepositoryInterface
{
    /**      
     * BaseRepository constructor.      
     *         
     * @param UserRepositoryInterface $userRepository      
    */ 
    public function __construct(public UserRepositoryInterface $userRepository )
    {}


    public function create(Inquiry $inquiry): void 
    {

    } 
}
