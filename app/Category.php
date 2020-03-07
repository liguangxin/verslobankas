<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ofcold\NovaSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Category extends Model implements HasMedia
{
    use SortableTrait;
    use HasMediaTrait;

    protected $guarded = ['id'];

    public $timestamps = false;
}
