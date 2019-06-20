<?php

namespace App\Services;

use App\Settings;
use Illuminate\Support\Facades\Storage;
use App\Services\Contracts\SettingsServiceInterface;

class SettingsService implements SettingsServiceInterface
{
    public function get(string $key) :string
    {
        $settingsItem = Settings::where('key', $key)->first();
        if ($settingsItem)
            return $settingsItem->value;
        else 
            return '';
    }

    public function set(string $key, string $value) :void
    {
        $settingsItem = Settings::where('key', $key)->first();
        if (!$settingsItem)
        {
            $settingsItem = new Settings;
            $settingsItem->key = $key;
        }
        $settingsItem->value = $value;
        $settingsItem->save();
    }
}