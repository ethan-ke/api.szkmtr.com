<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\MainController;
use App\Http\Requests\Frontend\ContactRequest;
use App\Models\FrontendUserContact;
use Illuminate\Http\JsonResponse;

class ContactInformationController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return custom_response($this->user()->contact()->orderByDesc('id')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ContactRequest $request
     * @return JsonResponse
     */
    public function store(ContactRequest $request): JsonResponse
    {
        $item = $request->validated();
        $this->user()->contact()->create($item);
        return custom_response(null, '10101', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param FrontendUserContact $contact
     * @return JsonResponse
     */
    public function show(FrontendUserContact $contact): JsonResponse
    {
        return custom_response($contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ContactRequest $request
     * @param FrontendUserContact $contact
     * @return JsonResponse
     */
    public function update(ContactRequest $request, FrontendUserContact $contact): JsonResponse
    {
        $contact->update($request->validated());
        return custom_response(null, '10103');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
