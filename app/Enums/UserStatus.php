<?php

namespace App\Enum;

enum UserStatus: string{
    case pengguna = 'pengguna';
    case admin = 'admin';
    case petugas = 'petugas';
}
