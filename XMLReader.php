<?php

/**
 * @copyright Copyright Victor Demin, 2015
 */

namespace dumkaaa\xmlimporter;

use Exception;

/**
 * @author Victor Demin <demin@trabeja.com>
 */
class XMLReader {

    /**
     */
    public $filename;

    /**
     * @var array 
     */
    public $fgetcsvOptions = ['length' => 0, 'delimiter' => ',', 'enclosure' => '"', 'escape' => "\\"];

    /**
     * @var integer
     */
    public $startFromLine = 1;

    /**
     * @throws Exception
     */
    public function __construct() {
        $arguments = func_get_args();
        if (!empty($arguments)) {
            foreach ($arguments[0] as $key => $property) {
                if (property_exists($this, $key)) {
                    $this->{$key} = $property;
                }
            }
        }

        if ($this->filename === null) {
            throw new Exception(__CLASS__ . ' filename is required.');
        }
    }

    /**
     * @throws Exception
     * @return $array  filtered data
     */
    public function readFile() {
        if (!file_exists($this->filename)) {
            throw new Exception(__CLASS__ . ' couldn\'t find the XML file.');
        }


        libxml_use_internal_errors(true);
        return simplexml_load_file($this->filename);
    }

}
