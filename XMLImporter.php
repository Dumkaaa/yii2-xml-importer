<?php

/**
 * @copyright Copyright Victor Demin, 2015
 */

namespace dumkaaa\xmlimporter;

use dumkaaa\xmlimporter\XMLReader;
use dumkaaa\xmlimporter\ImportInterface;

/**
 * @author Victor Demin <demin@trabeja.com>
 */
class XMLimporter {

    private $_data;

    /**
     * @param XMLReader $reader
     */
    public function setData(XMLReader $reader) {
        $this->_data = $reader->readFile();
    }

    /**
     * @return array
     */
    public function getData() {
        return $this->_data;
    }

    /**
     * @param ImportInterface $strategy
     */
    public function import(ImportInterface $strategy) {
        return $strategy->import($this->_data);
    }

}
