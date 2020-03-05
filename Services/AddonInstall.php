<?php
namespace AddonKeldroxTest\Services;

class AddonInstall
{
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
