<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class PageGalleryTranslation extends Model
{
    use LogsActivity;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'excerpt',
    ];

    /**
     * Set logable fields
     */
    protected static $logAttributes = [
        'page_gallery_id',
        'locale',
        'title',
        'excerpt',
    ];
}
