<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the users for the comapny.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
