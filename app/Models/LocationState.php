<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LocationState extends OrmApiBaseModel
{
    //protected $table = '';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'country' => []
        ];
    }

    public function spouseRelationships()
    {
        return [
        ];
    }

    public function childRelationships()
    {
        return [
            'substates' => []
        ];
    }

    public function rules()
    {
        return [
            'name' => 'sometimes:required',
            'country_id' => 'sometimes:required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'country_id',
        'created_at',
        'updated_at'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(LocationCountry::class, 'country_id');
    }

    public function substates(): HasMany
    {
        return $this->hasMany(LocationSubstate::class, 'state_id');
    }


}
