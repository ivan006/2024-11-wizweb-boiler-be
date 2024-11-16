<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends OrmApiBaseModel
{
    protected $table = 'posts';

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
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'name' => 'sometimes:required'
        ];
    }

    protected $fillable = [
        'created_at',
        'updated_at',
        'name'
    ];

    

    

    
}