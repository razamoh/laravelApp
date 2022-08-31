<?php
declare(strict_types=1);

namespace App\Repository;

use App\Models\Inquiry;

/**
 * inteface IInquiryReposiotry
 *
 * @package \App\Repositories
 */
interface InquiryRepositoryInterface
{
    public function create(Inquiry $inquiry): void;
}