<?php

declare(strict_types=1);

namespace App\Models;

/**
 * inteface InquiryInterface
 *
 * @package \App\Models
 */
interface InquiryInterface
{
    /**
     * get message.
     *
     * @return $this
     *
    */
    public function create(string $subject, string $message): self;
    /**
     * get message.
     * @var Model
     * @return string
     *
    */
    public function getMessage(): string;

    /**
     * get Subject.
     *
     * @return string
     *
    */
    public function getSubject(): string;
}
