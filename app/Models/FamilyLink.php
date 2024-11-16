<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FamilyLink extends OrmApiBaseModel
{
    protected $table = 'family_links';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'user' => [],
            'family' => []
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
            'family_id' => 'sometimes:required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'user_id',
        'family_id',
        'created_at',
        'updated_at'
    ];

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

        public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class, 'family_id');
    }




}
