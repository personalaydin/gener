<?php

namespace App\Models\Traits;

use Route;

trait ActionsTrait
{
    public function getViewLink()
    {
        if (Route::has('admin.'.$this->modelMeta['name'].'.show')) {
            return route('admin.'.$this->modelMeta['name'].'.show', $this);
        }
    }

    public function getEditLink()
    {
        if (Route::has('admin.'.$this->modelMeta['name'].'.edit')) {
            return route('admin.'.$this->modelMeta['name'].'.edit', $this);
        }
    }

    public function getDeleteLink()
    {
        if (Route::has('admin.'.$this->modelMeta['name'].'.delete-confirmation')) {
            return route('admin.'.$this->modelMeta['name'].'.delete-confirmation', $this);
        }
    }

    public function getHardDeleteLink()
    {
        if (Route::has('admin.'.$this->modelMeta['name'].'.hard-delete-confirmation')) {
            return route('admin.'.$this->modelMeta['name'].'.hard-delete-confirmation', $this);
        } else {
            $this->getDeleteLink();
        }
    }

    public function getRestoreLink()
    {
        if (Route::has('admin.'.$this->modelMeta['name'].'.restore-confirmation')) {
            return route('admin.'.$this->modelMeta['name'].'.restore-confirmation', $this);
        }
    }

    public function getGalleryLink($group = null)
    {
        if (Route::has('admin.'.$this->modelMeta['name'].'.gallery-index')) {
            $parameters = [
                $this->modelMeta['name'] => $this,
            ];

            if (!is_null($group)) {
                $parameters['group'] = $group;
            }

            return route('admin.'.$this->modelMeta['name'].'.gallery-index', $parameters);
        }
    }

    public function getGalleryHardDeleteLink()
    {
        if (Route::has('admin.'.$this->modelMeta['name'].'.gallery-hard-delete')) {
            return route('admin.'.$this->modelMeta['name'].'.gallery-hard-delete', $this);
        }
    }
}
