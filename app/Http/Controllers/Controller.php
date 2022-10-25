<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function sendResponse($result, $message, $api) {
        $response = [
            "code" => 200,
            "success" => true,
            "message" => $message,
        ];

        if ($api === "materials") {
            $response["materials"] = $result;
        } else {
            $response["types"] = $result;
        }
        
        return response()->json($response, 200);
    }

    protected function sendError($error, $errorMessages = [], $code = 404) {
        $response = [
            "code" => $code,
            "success" => false,
            "message" => $error,
        ];

        if (!empty($errorMessages)) {
            $response["data"] = $errorMessages;
        }

        return response()->json($response, $code);
    }

}
