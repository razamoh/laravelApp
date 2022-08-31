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
     * @var Model        
     * @return string
     *       
    */ 
    public function getMessage(): string;

    /**      
     * get Subject.      
     * @var Model        
     * @return string
     *       
    */ 
    public function getSubject(): string;
}