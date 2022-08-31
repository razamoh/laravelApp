<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InquiryRequest;
use App\Models\Inquiry;
use App\Repositories\InquiryRepository ;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;


class InquiryController extends Controller
{
    /**
     * Sucess Message 
     * @var
     */
    public const SUCCESS = 'Your request is submitted.';
    /**
     * Failed Message 
     * @var
     */
    public const FAILED = 'Request submission is failed. Please try again.';
    /**
     * Create a new Inquiry instance.
     *
     * @return void
     */
    public function __construct(public InquiryRepository $inquiryRepository)
    {}

    /**
     * Validate the Inquiry Request.
     *
     * @param \App\Http\Requests\InquiryRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(InquiryRequest $request) : JsonResponse
    {
        //Prepare the request params and create an instance of Inquiry
        $newInquiry = new Inquiry(
            $request->subject,
            $request->message
        );
        
        $this->inquiryRepository->create($newInquiry);

        return Response::json([
            'success' => true,
            'data' => self::SUCCESS
        ], 201);
    }
}
