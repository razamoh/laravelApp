<?php

namespace App\Jobs;

use App\Mail\NewInquiryEmail;
use App\Models\Inquiry;
use App\Models\User;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class InquiryJob implements ShouldQueue
{
    use Batchable;
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * The number of tries the job should try to run if failed.
     *
     * @var int
     */
    public int $tries = 3;

    /**
     * Create a new job instance.
     * @param Inquiry $inquiry
     * @param User $user
     * @return void
     */
    public function __construct(public Inquiry $inquiry, public User $user)
    {
    }

    /**
     * Execute the job.
     * @param User 
     * @param Inquiry
     * @return Throwable
     * @return void
     */
    public function handle(): void
    {
        try {
            //If batch is cancelled
            if ($this->batch()->cancelled()) {
                return;
            }
            $email = new NewInquiryEmail($this->user, $this->inquiry);
            Mail::to($this->user->email)->send($email);
        } catch (\Throwable $th) {
            Log::error(' Error occured:: ' . $th->getMessage());
            throw $th;
        }
    }
}
