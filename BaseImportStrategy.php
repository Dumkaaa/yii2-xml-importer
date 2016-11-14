<?php

/**
 * @copyright Copyright Victor Demin, 2015
 */

namespace dumkaaa\xmlimporter;

/**
 * Base Strategy
 * @author Victor Demin <demin@trabeja.com>
 */
class BaseImportStrategy {

    /**
     * Attribute configs on how to import data.
     * @var array
     */
    public $configs;

    /**
     * Should always return boolean
     * @var callable|Expression 
     */
    public $skipImport;

}
