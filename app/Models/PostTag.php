<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PostTag extends OrmApiBaseModel
{
    protected $table = 'post_tags';

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
            'post_id' => 'sometimes:required',
            'tag_id' => 'sometimes:required'
        ];
    }

    protected $fillable = [
        'created_at',
        'updated_at',
        'post_id',
        'tag_id'
    ];

    

    

    
}