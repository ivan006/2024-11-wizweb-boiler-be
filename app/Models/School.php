<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class School extends OrmApiBaseModel
{
    protected $table = 'schools';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
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
            'attendances' => [],
            'events' => [],
            'jobs' => [],
            'school_family_enrollments' => []
        ];
    }

    public function fieldExtraInfo()
    {
        return [
            'image' => [
                'ontologyType' => 'file'
            ]
        ];
    }

    public function rules()
    {
        return [
            'name' => 'sometimes:required',
            'image' => 'nullable',
            'creator_id' => 'nullable',
            'updater_id' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'image',
        'about_us',
        'creator_id',
        'updater_id',
        'created_at',
        'updated_at'
    ];

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
        return $this->hasMany(Attendance::class, 'school_id');
    }

        public function events(): HasMany
    {
        return $this->hasMany(Event::class, 'school_id');
    }

        public function jobs(): HasMany
    {
        return $this->hasMany(Job::class, 'school_id');
    }

        public function school_family_enrollments(): HasMany
    {
        return $this->hasMany(SchoolFamilyEnrollment::class, 'school_id');
    }


}
