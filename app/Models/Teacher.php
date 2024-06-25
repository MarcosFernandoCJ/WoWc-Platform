<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Teacher
 *
 * @property $id
 * @property $id_user
 * @property $id_institution
 * @property $created_at
 * @property $updated_at
 *
 * @property Institution $institution
 * @property User $user
 * @property Teachers_Course[] $teachersCourses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Teacher extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_user', 'id_institution'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institution()
    {
        return $this->belongsTo(\App\Models\Institution::class, 'id_institution', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_user', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachersCourses()
    {
        return $this->hasMany(\App\Models\Teachers_Course::class, 'id', 'id_teacher');
    }
    
}
