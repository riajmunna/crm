<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Agent extends Model
{
    private static $agent;
    use HasFactory;

    public static function saveAgent($request){
        self::$agent = new Agent();
        self::$agent->agent_name = $request->agent_name;
        self::$agent->agent_phone = $request->agent_phone;
        self::$agent->agent_email = $request->agent_email;
        self::$agent->agent_address = $request->agent_address;
        self::$agent->agent_password = bcrypt($request->agent_password);
        self::$agent->created_by = Auth::user()->id;
        self::$agent->save();
    }
}
