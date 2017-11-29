<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "user_profiles";
    protected $dates = ['date_of_birth'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'location','date_of_birth'
    ];

    /**
     * A profile belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Show display name, otherwise display username.
     *
     * @return mixed
     */
    public function getDisplayNameAttribute()
    {
        if($this->name) {
            return $this->name;
        }

        return $this->user->username;
    }

    /**
     * Return users age.
     *
     * @return bool|string
     */
    public function getAgeAttribute()
    {
        if ($this->date_of_birth) {
            return $this->date_of_birth->age;
        }

        return "N/A";
    }
}
