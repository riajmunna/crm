<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    private static $user,$image,$imageName,$imgUrl,$directory;

    public static function saveUser($request)
    {
        self::$user = new User();
        self::$user->name = $request->name;
        self::$user->phone = $request->phone;
        self::$user->email = $request->email;
        self::$user->address = $request->address;
        self::$user->employee_registration_number = $request->employee_registration_number;
        self::$user->batch_id = $request->batch_id;
        self::$user->password = bcrypt($request->password);
        self::$user->user_type = $request->user_type;
        self::$user->created_by = Auth::user()->id;
        self::$user->save();
    }

    public static function editUser($request)
    {
        self::$user = User::find($request->user_id);
        self::$user->name = $request->name;
        self::$user->phone = $request->phone;
        self::$user->email = $request->email;
        if(self::$user->profile_photo_path){
            if(file_exists(self::$user->profile_photo_path)){
                unlink(self::$user->profile_photo_path);
            }
        }
        self::$user->profile_photo_path = self::saveImage($request);
        self::$user->save();
    }

    private static function saveImage($request){
        self::$image = $request->file('profile_photo_path');
        self::$imageName = rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'userImage/asset/image/';
        self::$imgUrl = self::$directory . self::$imageName;
        self::$image->move(self::$directory, self::$imageName);
        return self::$imgUrl;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'user_login',
        'user_logout',
        'employee_total_working_time',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
