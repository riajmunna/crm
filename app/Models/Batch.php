<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Batch extends Model
{
    use HasFactory;
    private static $batch;

    public static function saveBatch($request)
    {
        self::$batch = new Batch();
        self::$batch->batch_id = $request->batch_id;
        self::$batch->created_by = Auth::user()->id;
        self::$batch->save();
    }
    public static function deleteBatch($id){
        self::$batch = Batch::find($id);
        self::$batch->delete();
    }

}
