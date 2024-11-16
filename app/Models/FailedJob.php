<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FailedJob extends OrmApiBaseModel
{
    protected $table = 'failed_jobs';

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
            'uuid' => 'sometimes:required',
            'connection' => 'sometimes:required',
            'queue' => 'sometimes:required',
            'payload' => 'sometimes:required',
            'exception' => 'sometimes:required',
            'failed_at' => 'sometimes:required'
        ];
    }

    protected $fillable = [
        'uuid',
        'connection',
        'queue',
        'payload',
        'exception',
        'failed_at'
    ];

    

    

    
}