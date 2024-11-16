<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LocationTown extends OrmApiBaseModel
{
    //protected $table = '';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'substate' => []
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
            'suburbs' => []
        ];
    }

    public function rules()
    {
        return [
            'name' => 'sometimes:required',
            'substate_id' => 'sometimes:required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'substate_id',
        'created_at',
        'updated_at'
    ];

    public function substate(): BelongsTo
    {
        return $this->belongsTo(LocationSubstate::class, 'substate_id');
    }

    public function suburbs(): HasMany
    {
        return $this->hasMany(LocationSuburb::class, 'town_id');
    }


}
