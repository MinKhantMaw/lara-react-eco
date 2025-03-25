<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VariationType extends Model
{
    public $timestamps = false;

    /**
     * Get all of the options for the VariationType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany(VariationTypeOption::class, 'variation_type_id', 'id');
    }
}
