<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class BooleanStringChar implements CastsAttributes {
    public function get(Model $model, string $key, mixed $value, array $attributes) {
        return $value == "Y" ? true: false;
    }
    public function set(Model $model, string $key, mixed $value, array $attributes) {
        return $value ? "Y": "N";
    }
}