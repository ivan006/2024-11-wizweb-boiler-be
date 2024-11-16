<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PrivateEvent extends OrmApiBaseModel
{
    //protected $table = 'events';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'family' => [],
            'creator' => [],
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
        ];
    }

    public function fieldExtraInfo()
    {
        return [
            'start_datetime' => [
                'ontologyType' => 'time'
            ],
            'end_datetime' => [
                'ontologyType' => 'time'
            ],
        ];
    }

    public function rules()
    {
        return [
            'name' => 'sometimes:required',
            'description' => 'nullable',
            'start_datetime' => 'sometimes:required',
            'end_datetime' => 'sometimes:required',
            'family_id' => 'sometimes:required',
            'creator_id' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
        ];
    }

    protected $fillable = [
        'name',
        'description',
        'start_datetime',
        'end_datetime',
        'family_id',
        'creator_id',
        'created_at',
        'updated_at',
    ];

    public function family(): BelongsTo
    {
        return $this->belongsTo(School::class, 'family_id');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }


}
