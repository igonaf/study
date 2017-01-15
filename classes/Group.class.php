<?php

/**
 * Description of Group
 *
 * @author igor
 */
require_once 'IGroup.class.php';

class Group implements IGroup {

    private $_name;
    private $_teachers = [];

    function __construct($name) {
        $this->setName($name);
    }

    /**
     * 	Set name to the group
     * 	
     * 	@param string $name
     */
    public function setName($name) {
        $this->_name = $name;
    }

    public function getName() {
        return $this->_name;
    }

    /**
     * 	Add to teacher's list new teacher of current group
     * 	
     * 	@param object $teacher - object of ITeacher or his children
     */
    function addTeacher(ITeacher $teacher) {
        array_push($this->_teachers, $teacher);
    }

    function getAllTeachersOfTheGroup() {
        return $this->_teachers;
    }

    /**
     * 	Delete from teacher's list of current group one teacher
     * 
     *  @param int $teacher_id - teacher id
     *
     */
    function deleteTeacher($teacher_id) {
        echo "If teacher_id matches one in array then I hope the teacher's entry with id=" . $teacher_id . " was deleted from DB";
    }

    function getTheTeacherOfTheGroup($teacher_id) {
        echo "If teacher_id matches one in array then here should be a teacher's entry with id=" . $teacher_id;
    }

}
