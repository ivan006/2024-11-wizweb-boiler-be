<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PasswordResetToken extends OrmApiBaseModel
{
    protected $table = 'password_reset_tokens';

    public $timestamps = false;

    protected $primaryKey = '';

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
            'email' => 'sometimes:required',
            'token' => 'sometimes:required',
            'created_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'email',
        'token',
        'created_at'
    ];

    

    

    
}