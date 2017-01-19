<?php

/**
 * Description of Person
 *
 * @author icstime
 */
abstract class Person {
    protected $_name;
 
     /**
     * 	get name of the Person
     * 	
     * 	@return string
     */

    public function getName(){
        return $this->_name;
    }
}
