<?php

namespace App\Models;

class Inquiry implements InquiryInterface
{
    protected string $subject ;
    protected string $content;

    public function __construct()
    {
    }

    public function create(string $subject, string $message): self
    {
        $this->subject = $subject;
        $this->content = $message;
        return $this;
    }


    /**
     * get Subject.
     *
     * @return string
     *
    */
    public function getSubject(): string
    {
        return $this->subject;
    }


    /**
     * get Message.
     *
     * @return string
     *
    */
    public function getMessage(): string
    {
        return $this->content;
    }
}
