<?php

namespace App\Services\Contracts;

Interface SettingsServiceInterface 
{
    public function get(string $key) :string;

    public function set(string $key, string $value) :void;
}