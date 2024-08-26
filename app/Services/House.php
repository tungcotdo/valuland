<?php

namespace App\Services;

class House
{
    public $_SUBDIVISION = [
        '1' => 'Park 1',
        '2' => 'Park 2',
        '3' => 'Park 3'
    ];

    public $_ROOM = [
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6'
    ];

    public $_STYLE = [
        '1' => "Liền kề",
        '2' => "Biệt thự",
        '3' => "CC Studio",
        '4' => "CC 1PN",
        '5' => "CC 1PN+",
        '6' => "CC 2PN, 1WC",
        '7' => "CC 2PN, 2WC",
        '8' => "CC 2PN+, 2WC",
        '9' => "CC 3PN, 2WC"
    ];

    public $_DIRECTION = [
        '1' =>	'Bắc',
        '2' =>	'Nam',
        '3' =>	'Đông',
        '4' =>	'Tây',
        '5' =>	'Đông Nam',
        '6' =>	'Đông Bắc',
        '7' =>	'Tây Bắc',
        '8' =>	'Tây Nam',
        '9' =>	'Đông Nam - Đông Bắc',
        '10' =>	'Đông Bắc - Tây Bắc',
        '11' =>	'Đông Nam - Tây Nam',
        '12' =>	'Tây Bắc - Tây Nam'
    ];
}