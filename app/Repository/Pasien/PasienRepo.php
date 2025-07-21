<?php

namespace App\Repository\Pasien;

use App\Contracts\Pasien\PasienInterface;
use App\Models\Pasien;


class PasienRepo implements PasienInterface
{
    public function index(array $request)
    {
        $attributes ??= request()->all();
        return Pasien::with('reference');
    }

    public function store(array $attributes)
    {
        $attributes ??= request()->all();
        return  Pasien::updateOrCreate([
            "id" => $attributes['id'] ?? null,
        ], [
            "name"                   => $attributes["name"],
            "sex"                    => $attributes["sex"],
            "dob"                    => $attributes["dob"],
            'address'                    => $attributes["address"],
        ]);
    }
}
