<?php

namespace App\Models;

class Inquiry implements InquiryInterface
{

    public function __construct(public string $subject , public string $msgContent)
    {}


    /**      
     * get Subject.      
     *         
     * @return string
     *       
    */ 
    public function getSubject(): string {
        return $this->subject;
    }


    /**      
     * get Message.      
     *         
     * @return string
     *       
    */ 
    public function getMessage(): string {
        return $this->msgContent;
    }
}