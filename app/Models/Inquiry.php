<?php

namespace App\Models;

class Inquiry implements InquiryInterface
{
    private string $subject ;
    private string $message;

    public function __construct()
    {
    }

    public function create(string $subject, string $message): self
    {
        $this->subject = $subject;
        $this->message = $message;
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
        return $this->msgContent;
    }
}
