<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $casts = [
        'raw_data' => 'array',
        'id' => 'string',
    ];

    protected $perPage = 50;

    /**
     * Get questionnaire associated with this log record
     */
    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }
}
