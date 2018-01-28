<?php namespace Bantenprov\HlSekolah\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The HlSekolah facade.
 *
 * @package Bantenprov\HlSekolah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class HlSekolah extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hl-sekolah';
    }
}
