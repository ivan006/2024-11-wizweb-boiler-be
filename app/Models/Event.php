<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends OrmApiBaseModel
{
    protected $table = 'events';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
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
            'attendances' => []
        ];
    }

    public function fieldExtraInfo()
    {
        return [
            'image' => [
                'ontologyType' => 'file'
            ],
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
            'image' => 'nullable',
            'start_datetime' => 'sometimes:required',
            'end_datetime' => 'sometimes:required',
            'school_id' => 'sometimes:required',
            'creator_id' => 'nullable',
            'updater_id' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable',

            'location_google_id' => 'nullable',
            'location_address_street_address' => 'nullable',
            'location_address_building_address' => 'nullable',
            'location_address_place_name' => 'nullable',
            'location_coordinates_longitude' => 'nullable',
            'location_coordinates_latitude' => 'nullable',
            'location_admin_division_country_id' => 'nullable',
            'location_admin_division_state_id' => 'nullable',
            'location_admin_division_substate_id' => 'nullable',
            'location_admin_division_town_id' => 'nullable',
            'location_admin_division_suburb_id' => 'nullable',
        ];
    }

    protected $fillable = [
        'name',
        'image',
        'start_datetime',
        'end_datetime',
        'school_id',
        'creator_id',
        'updater_id',
        'created_at',
        'updated_at',

        'location_google_id',
        'location_address_street_address',
        'location_address_building_address',
        'location_address_place_name',
        'location_coordinates_longitude',
        'location_coordinates_latitude',
        'location_admin_division_country_id',
        'location_admin_division_state_id',
        'location_admin_division_substate_id',
        'location_admin_division_town_id',
        'location_admin_division_suburb_id',
    ];

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

        public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class, 'event_id');
    }


}
