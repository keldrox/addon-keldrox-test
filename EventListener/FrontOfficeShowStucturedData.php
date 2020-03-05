<?php
// Alias
namespace AddonStructuredData\EventListener;

// Librerias
use AddonStructuredData\Services\GetCategoryListMyself;
use AddonStructuredData\Services\GetManufacturerMyself;
use AddonStructuredData\Services\Services;

/**
 * Clase FrontOfficeShowStucturedData
 * Muestra los datos estructurados en el pie
 */
class FrontOfficeShowStucturedData
{
    /**
     * Muestra los datos estructurados
     * @return string
     */
    public function __invoke(): string
    {
		// Retornamos
        return '<script type="text/javascript">alert("hola");</script>';
    }
}
