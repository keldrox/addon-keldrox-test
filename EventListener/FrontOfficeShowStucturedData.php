<?php
namespace AddonKeldroxTest\EventListener;

class FrontOfficeShowStucturedData
{
    public function __invoke(): string
    {
        return '<script type="text/javascript">alert("hola");</script>';
    }
}
