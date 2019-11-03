<?php


namespace App\Services;

use App\Models\Actuality;
use Illuminate\Support\Collection;

class ActualityService
{
    public function getActualities(): Collection
    {
        return Actuality::all();
    }
}