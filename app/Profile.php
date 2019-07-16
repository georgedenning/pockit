<?php

namespace Pockit;

class Profile
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id', 'name', 'value',
    ];
}
