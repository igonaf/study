<?php

/**
 * Description of Discipline
 *
 * @author igor
 */
require_once 'IDiscipline.class.php';

class Discipline implements IDiscipline {

    private $_name;

    function __construct($name) {
        $this->_name = $name;
    }

    public function getName() {
        return $this->_name;
    }

}
