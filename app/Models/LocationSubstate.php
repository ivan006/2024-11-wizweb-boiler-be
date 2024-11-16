<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LocationSubstate extends OrmApiBaseModel
{
    //protected $table = '';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'state' => []
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
            'towns' => []
        ];
    }

    public function rules()
    {
        return [
            'name' => 'sometimes:required',
            'state_id' => 'sometimes:required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'state_id',
        'created_at',
        'updated_at'
    ];

    public function state(): BelongsTo
    {
        return $this->belongsTo(LocationState::class, 'state_id');
    }

    public function towns(): HasMany
    {
        return $this->hasMany(LocationTown::class, 'substate_id');
    }


}
