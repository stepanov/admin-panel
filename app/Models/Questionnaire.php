<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'date_of_birth',
        'status',
        'avatar',
    ];

    protected $casts = [
        'id' => 'string',
    ];

    /**
     * Get user that owns the questionnaire
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get uploads associated with this user
     */
    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }
}
