<?php
/**
 * Description of Discipline
 *
 * @author igor
 */
require_once 'IDiscipline.class.php';

class Discipline implements IDiscipline {
    private $name;
    
    function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
}
