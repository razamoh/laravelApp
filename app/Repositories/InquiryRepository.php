<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Jobs\InquiryJob;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Bus;

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
    public function __construct(public UserRepositoryInterface $userRepository)
    {
    }

    /**
     * Create Job and push it to Batch.
     * 
     * @param Inquiry $inquiry
     */
    public function create(Inquiry $inquiry): void
    {
        $jobs = $this->userRepository->all()->map(function ($user) use ($inquiry) {
            return new InquiryJob($inquiry, $user);
        });

        Bus::batch($jobs)->dispatch();
    }
}
