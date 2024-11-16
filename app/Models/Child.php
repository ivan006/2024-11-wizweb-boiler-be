<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Child extends OrmApiBaseModel
{
    protected $table = 'children';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'family' => [],
            'creator' => [],
            'updater' => []
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
            'attendances' => []
        ];
    }

    public function rules()
    {
        return [
            'name' => 'sometimes:required',
            'family_id' => 'sometimes:required',
            'creator_id' => 'nullable',
            'updater_id' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'family_id',
        'creator_id',
        'updater_id',
        'created_at',
        'updated_at'
    ];

        public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class, 'family_id');
    }

        public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

        public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updater_id');
    }

        public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class, 'child_id');
    }

    
}