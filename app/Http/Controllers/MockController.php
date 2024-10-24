<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MockController extends Controller
{
    public function provider1Tasks()
    {

        $data = [
            [
                "id" => 1,
                "value" => 3,
                "estimated_duration" => 4
            ],
            [
                "id" => 2,
                "value" => 6,
                "estimated_duration" => 12
            ],
            [
                "id" => 3,
                "value" => 5,
                "estimated_duration" => 9
            ],
            [
                "id" => 4,
                "value" => 5,
                "estimated_duration" => 5
            ],
            [
                "id" => 5,
                "value" => 7,
                "estimated_duration" => 7
            ],
            [
                "id" => 6,
                "value" => 3,
                "estimated_duration" => 5
            ],
            [
                "id" => 7,
                "value" => 4,
                "estimated_duration" => 8
            ],
            [
                "id" => 8,
                "value" => 6,
                "estimated_duration" => 3
            ],
            [
                "id" => 9,
                "value" => 2,
                "estimated_duration" => 30
            ],
            [
                "id" => 10,
                "value" => 5,
                "estimated_duration" => 40
            ],
            [
                "id" => 11,
                "value" => 4,
                "estimated_duration" => 33
            ],
       [
                "id" => 12,
                "value" => 3,
                "estimated_duration" => 15
            ],
            [
                "id" => 13,
                "value" => 2,
                "estimated_duration" => 10
            ],

            [
                "id" => 14,
                "value" => 5,
                "estimated_duration" => 1
            ],

            [
                "id" => 15,
                "value" => 4,
                "estimated_duration" => 19
            ],

            [
                "id" => 16,
                "value" => 3,
                "estimated_duration" => 1
            ],

            [
                "id" => 17,
                "value" => 2,
                "estimated_duration" => 5
            ],

            [
                "id" => 18,
                "value" => 2,
                "estimated_duration" => 10
            ],


        ];

        return response()->json($data);
    }

    public function provider2Tasks()
    {
        $data = [
            [
                "id" => 1,
                "zorluk" => 3,
                "sure" => 5
            ],
            [
                "id" => 2,
                "zorluk" => 2,
                "sure" => 3
            ],
            [
                "id" => 3,
                "zorluk" => 1,
                "sure" => 2
            ],
            [
                "id" => 4,
                "zorluk" => 4,
                "sure" => 7
            ],
            [
                "id" => 5,
                "zorluk" => 5,
                "sure" => 8
            ],
            [
                "id" => 6,
                "zorluk" => 2,
                "sure" => 4
            ],
            [
                "id" => 7,
                "zorluk" => 3,
                "sure" => 6
            ],
            [
                "id" => 8,
                "zorluk" => 1,
                "sure" => 3
            ],

            [
                "id" => 9,
                "zorluk" => 1,
                "sure" => 3
            ],
            [
                "id" => 10,
                "zorluk" => 4,
                "sure" => 10
            ],
            [
                "id" => 11,
                "zorluk" => 1,
                "sure" => 25
            ],
            [
                "id" => 12,
                "zorluk" => 3,
                "sure" => 30
            ],
             [
                "id" => 13,
                "zorluk" => 5,
                "sure" => 40
            ],

        ];

        return response()->json($data);

}
}
