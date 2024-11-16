<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PersonalAccessToken extends OrmApiBaseModel
{
    protected $table = 'personal_access_tokens';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            
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
            'tokenable_type' => 'sometimes:required',
            'tokenable_id' => 'sometimes:required',
            'name' => 'sometimes:required',
            'token' => 'sometimes:required',
            'abilities' => 'nullable',
            'last_used_at' => 'nullable',
            'expires_at' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'tokenable_type',
        'tokenable_id',
        'name',
        'token',
        'abilities',
        'last_used_at',
        'expires_at',
        'created_at',
        'updated_at'
    ];

    

    

    
}