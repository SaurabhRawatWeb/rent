<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'slug',
        'subdomain',
        'legal_name',
        'email',
        'phone',
        'website',
        'logo',
        'favicon',
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'country',
        'postal_code',
        'tax_number',
        'gst_number',
        'registration_number',
        'timezone',
        'currency',
        'locale',
        'date_format',
        'status',
        'is_active',
        'onboarding_completed_at',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'onboarding_completed_at' => 'datetime',
        ];
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
