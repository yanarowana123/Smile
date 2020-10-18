<?php


namespace App\Traits;

trait Multilingual
{
    public function getAttribute($key)
    {
        $locale = $this->getLocale();
        $attribute = $key . '_' . $locale;
        if (array_key_exists($attribute, $this->getAttributes()))
            return parent::getAttribute($attribute);

        return parent::getAttribute($key);
    }

    private function getLocale()
    {
        $locale = app()->getLocale();
        if ($locale == 'kk')
            $locale = 'kz';

        if($locale == 'admin')
            $locale = config('app.fallback_locale');
        return $locale;
    }

}
