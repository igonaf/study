<?php

/**
 * Description of Teacher
 *
 * @author igor
 */
require_once 'ITeacher.class.php';

class Teacher implements ITeacher {

    private $_name;
    private $_discipline = [];

    function __construct($name, IDiscipline $discipline) {
        $this->_name = $name;
        $this->addDiscipline($discipline);
    }

    /**
     * 	get all disciplines of the teacher
     * 	
     * 	@return array of objects
     */
    public function getAllDisciplinesofTheTeacher() {
        return $this->_discipline;
    }

    /**
     * 	Add to discipline's list new discipline for current teacher
     * 	
     * 	@param object $discipline - object of IDiscipline or his children
     */
    public function addDiscipline(IDiscipline $discipline) {
        array_push($this->_discipline, $discipline);
    }

    /**
     * 	Delete from discipline's list of current teacher one discipline
     * 
     *  @param int $discipline_id - discipline's id
     *
     */
    public function deleteDiscipline($discipline_id) {
        echo "If discipline_id matches one in array then I hope the discipline's entry with id=" . $discipline_id . " was deleted from DB";
    }

    /**
     * 	get one discipline of the teacher
     * 	
     *  @param int $discipline_id  - discipline id from DB
     *  
     * 	@return object
     */
    public function getTheDesciplineOfTheTeacher($discipline_id) {
        echo "If discipline_id matches one in array then here should be a discipline's entry with id=" . $discipline_id;
    }

    public function getName() {
        return $this->_name;
    }

}
