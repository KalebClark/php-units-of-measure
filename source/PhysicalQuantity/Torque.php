<?php
/**
 * Created by PhpStorm.
 * User: kalebclark
 * Date: 5/28/17
 * Time: 10:10 AM
 */

namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;

class Torque extends AbstractPhysicalQuantity
{
    protected static $unitDefinitions;

    protected static function initialize()
    {
        // Pounds
        // Pound Force Foot
        $footpoundforce = UnitOfMeasure::nativeUnitFactory('lbf.ft');
        $footpoundforce->addAlias('Pound Force Foot');
        $footpoundforce->addAlias('lbf-ft');
        static::addUnit($footpoundforce);

        // Pound Force Inch
        $newUnit = UnitOfMeasure::linearUnitFactory('lbf.in', 0.083333333333);
        $newUnit->addAlias('Pound Force Inch');
        $newUnit->addAlias('lbf-in');
        static::addUnit($newUnit);

        // Ounces

        // Ounce Force Foot
        $newUnit = UnitOfMeasure::linearUnitFactory('ozf.ft', 0.062499999262);
        $newUnit->addAlias('Ounce Force Foot');
        $newUnit->addAlias('ozf-ft');
        static::addUnit($newUnit);

        // Ounce Force Inch
        $newUnit = UnitOfMeasure::linearUnitFactory('ozf.in', 0.0052083332719);
        $newUnit->addAlias('Ounce Force Inch');
        $newUnit->addAlias('ozf-in');
        static::addUnit($newUnit);

        // Kilograms

        // Kilogram Force Meter
        $newUnit = UnitOfMeasure::linearUnitFactory('kgf.m', 7.2330135756);
        $newUnit->addAlias('Kilogram Force Meter');
        $newUnit->addAlias('kgf-m');
        static::addUnit($newUnit);

        // kilogram force centimeter
        $newUnit = UnitOfMeasure::linearUnitFactory('kgf.cm', 0.072330135756);
        $newUnit->addAlias('Kilogram Force Centimeter');
        $newUnit->addAlias('kgf-cm');
        static::addUnit($newUnit);

        // Newtons

        // Newton Centimeter
        $newUnit = UnitOfMeasure::linearUnitFactory('n.cm', 0.0073756212117);
        $newUnit->addAlias('Newton Centimeter');
        $newUnit->addAlias('n-cm');
        static::addUnit($newUnit);

        // Newton Meter
        $newUnit = UnitOfMeasure::linearUnitFactory('n.m', 0.73756212117);
        $newUnit->addAlias('Newton Meter');
        $newUnit->addAlias('n-m');
        static::addUnit($newUnit);

        // Grams

        // Gram Force Centimeter
        $newUnit = UnitOfMeasure::linearUnitFactory('gf.cm', 0.000072330135756);
        $newUnit->addAlias('Gram Force Centimeter');
        $newUnit->addAlias('gf-cm');
        static::addUnit($newUnit);

        // Gram Force Meter
        $newUnit = UnitOfMeasure::linearUnitFactory('gf.m', 0.0072330135756);
        $newUnit->addAlias('Gram Force Meter');
        $newUnit->addAlias('gf-m');
        static::addUnit($newUnit);

        // Dyne

        // Dyne Force Centimeter
        $newUnit = UnitOfMeasure::linearUnitFactory('dyn.cm', 7.3756212117e-8);
        $newUnit->addAlias('Dyne Force Centimeter');
        $newUnit->addAlias('dyn-cm');
        static::addUnit($newUnit);

        // Dyne Force Meter
        $newUnit = UnitOfMeasure::linearUnitFactory('dyn.m', 0.0000073756212117);
        $newUnit->addAlias('Dyne Force Meter');
        $newUnit->addAlias('dyn-m');
        static::addUnit($newUnit);

    }
}