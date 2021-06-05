<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trace extends Model
{
    protected $appends = [
        'trace',
        'status',
        'receiver',
        'dispatch'
    ];

    public function info()
    {
        return $this->morphMany(ModelInfo::class, 'model');
    }

    public function getTraceAttribute()
    {
        $data = $this->morphMany(ModelInfo::class, 'model')->where('type', 'status')->first();
        return $data->value_0;
    }

    public function getStatusAttribute()
    {
        $data = $this->morphMany(ModelInfo::class, 'model')->where('type', 'status')->first();
        return $data->value_0.': '. $data->value_1;
    }

    public function getReceiverAttribute()
    {
        return $this->morphMany(ModelInfo::class, 'model')->where('type', 'receiver')->first();
    }

    public function getDispatchAttribute()
    {
        return $this->morphMany(ModelInfo::class, 'model')->where('type', 'dispatch')->first();
    }
}
