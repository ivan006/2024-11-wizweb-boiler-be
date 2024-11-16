<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LocationSuburb extends OrmApiBaseModel
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
            'town_id' => 'sometimes:required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'town_id',
        'created_at',
        'updated_at'
    ];

    public function town(): BelongsTo
    {
        return $this->belongsTo(LocationTown::class, 'town_id');
    }


}
