<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends OrmApiBaseModel
{
    protected $table = 'jobs';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'user' => [],
            'school' => []
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
            'user_id' => 'sometimes:required',
            'school_id' => 'sometimes:required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'user_id',
        'school_id',
        'created_at',
        'updated_at'
    ];

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

        public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }




}
