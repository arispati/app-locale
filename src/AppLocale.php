<?php

namespace Arispati\AppLocale;

class AppLocale
{
    /**
     * App instance
     */
    protected $app;

    /**
     * Class constructor
     */
    public function __construct()
    {
        if (app() instanceof \Illuminate\Foundation\Application) {
            // if current framework is Laravel
            $this->app = app();
        } else {
            // if current framework is Lumen
            $this->app = app('translator');
        }
    }

    /**
     * Set locale
     *
     * @param string $locale
     * @return void
     */
    public function setLocale(string $locale): void
    {
        $this->app->setLocale($locale);
    }

    /**
     * Get locale
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->app->getLocale();
    }
}
