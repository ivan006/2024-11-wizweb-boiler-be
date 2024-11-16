<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SchoolFamilyEnrollment extends OrmApiBaseModel
{
    protected $table = 'school_family_enrollment';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'family' => [],
            'school' => [],
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
            
        ];
    }

    public function rules()
    {
        return [
            'family_id' => 'sometimes:required',
            'school_id' => 'sometimes:required',
            'creator_id' => 'nullable',
            'updater_id' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'family_id',
        'school_id',
        'creator_id',
        'updater_id',
        'created_at',
        'updated_at'
    ];

        public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class, 'family_id');
    }

        public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }

        public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

        public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updater_id');
    }

    

    
}