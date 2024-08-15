<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StringToNumberRequest;
use Illuminate\Http\JsonResponse;

class StringToNumberController extends Controller
{
    private int $minValue = 100;
    private int $maxValue = 1000;

    public function convert(StringToNumberRequest $request): JsonResponse
    {
        $inputString = $request->input('input_string');

        $hash = crc32($inputString);
        $number = $this->minValue + ($hash % ($this->maxValue - $this->minValue + 1));

        return response()->json(['number' => $number]);
    }
}
