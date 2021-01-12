<?php


namespace App\Http\Controllers\Api;

use App\Module\Shorten\Shortener;
use App\Http\Request\Validate;
use App\Http\Controllers\Controller;

class ShortenerController extends Controller
{
    protected function handlerReqest()
    {

    }

    protected function checkLink($link)
    {

    }
    /**
     * @param Validate $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function action(Validate $request):\Illuminate\Http\JsonResponse
    {
        $this->data[] = $request->input('link');

        return $this->response();
    }
}
