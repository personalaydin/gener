<?php

namespace App\Models\Entities;

use App\Models\Scopes\DefaultOrderScope;
use App\Models\Traits\ActionsTrait;
use App\Models\Traits\GalleryTrait;
use App\Models\Traits\MetaTrait;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\Activitylog\Traits\LogsActivity;

class PageGallery extends Model
{
    use ActionsTrait;
    use GalleryTrait;
    use LogsActivity;
    use Translatable;
    use MetaTrait;
    use NodeTrait;

    
    


    /**
     * Set model meta properties
     */
    public $modelMeta = [
        'name' => 'page_gallery',
    ];

    /**
     * Set translatable fields
     */
    public $translatedAttributes = [
        'title',
        'excerpt',
    ];

    /**
     * Set logable fields
     */
    protected static $logAttributes = [
        'image',
    ];

    /**
     * Set fillable fields
     */
    protected $fillable = [
        'entity_id',
        'group',
        'image',
    ];

    /**
     * Set gallery attributes
     */
    public $galleryAttributes = [
        'image' => [
            [
                'maxW' => 1900,
                'maxH' => 900,
                'template' => 'big',
            ],
            [
                'w' => 480,
                'h' => 480,
                'template' => 'thumbnail',
            ],
        ],
    ];

    /**
     * Boot
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new DefaultOrderScope());
    }

    /**
     * @param null $locale
     * @return string
     */
    public function getTitle($locale = null)
    {
        return is_null($this->translate($locale)) ? null : $this->translate($locale)->title;
    }

    /**
     * @param null $locale
     * @return string
     */
    public function getExcerpt($locale = null)
    {
        return is_null($this->translate($locale)) ? null : $this->translate($locale)->excerpt;
    }
}
