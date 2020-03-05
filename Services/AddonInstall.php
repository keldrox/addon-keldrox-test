<?php
// Alias
namespace AddonProductProperty\Services;

// Librerias
use util\tools;

/**
 * Clase para autoinstalar el modulo
 */
class AddonInstall
{
    /**
     * Instala los eventos
     *
     * @return void
     */
    public static function event()
    {
        return array(
            'front_office_footer_after_scripts' => array(
                array(
                    'execute' => '@AddonKeldroxTest\EventListener\FrontOfficeShowStucturedData',
                ),
            )
        );
    }
}
