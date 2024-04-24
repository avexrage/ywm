<?php

namespace App\Enums;

enum StatusKawin: string {
    case Single = 'Belum Kawin';
    case Married = 'Kawin';
    case Widowed = 'Cerai Mati';
    case Divorced = 'Cerai Hidup';
}
