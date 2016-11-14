<?php

/**
 * @copyright Copyright Victor Demin, 2015
 * */

namespace dumkaaa\xmlimporter;

/**
 * @author Victor Demin <demin@trabeja.com>
 */
interface ImportInterface {

    /**
     * @param array $data
     */
    public function import(&$data);
}
