<?php

namespace App;

use App\Mail\ConfirmEmail;
use App\Events\UserWasCreated;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','confirm_token','status'
    ];

    /**
     * The attribute is a list of events to be fired.
     *
     * @var array
     */
    protected $dispatchesEvents =[
        'created' => UserWasCreated::class
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'username';
    }

    /**
     * A user has a profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * A user has a session row.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function online()
    {
        return $this->hasOne(Online::class);
    }

    /**
     * Reactivate users profile.
     *
     * @return mixed
     */
    public function reactivateAccount()
    {
        return auth()->user()->update([
            'status' => 'active'
        ]);
    }

    /**
     * Deactivate users profile.
     *
     * @return mixed
     */
    public function deactivateAccount()
    {
        auth()->user()->update([
            'status' => 'deactivated'
        ]);
    }

    /**
     * Sets confirm_token to null, meaning account is verified.
     *
     * @return bool
     */
    public function verifyEmail()
    {
       return $this->update(['confirm_token' => null]);
    }

    /**
     * Sets confirm_token to random string, meaning account is not verified.
     *
     * @return bool
     */
    public function unVerifyEmail()
    {
        $token = generateRandomString(30);
        $this->update(['confirm_token' => $token]);

        Mail::to($this->email)->send(new ConfirmEmail($token));

        return $token;
    }

    /**
     * Returns true or false.
     *
     * @return bool
     */
    public function isOnline()
    {
        return (is_null($this->online))?false:true;
    }

    /**
     * Scopes active users only.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeIsActive()
    {
        return $this->where('status','active');
    }
}
