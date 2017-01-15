<?php

/**
 * Description of Student
 *
 * @author igor
 */
class Student {

    private $_name;
    private $_age;
    private $_group;

    function __construct($name, $age, IGroup $group) {
        $this->_name = $name;
        $this->_age = $age;
        $this->setGroup($group);
    }

    /**
     * 	Add current student to the group
     * 	
     * 	@param object $group - object of IGroup or his children
     */
    function setGroup(IGroup $group) {
        $this->_group = $group;
    }

    /**
     * 	get group's name of the student 
     * 	
     * 	@return string
     */
    function getGroupName() {
        return $this->_group->getName();
    }

    /**
     * 	get age of the student
     * 	
     * 	@return string 
     */
    function getAge() {
        return $this->_age;
    }

    /**
     * 	get name of the student
     * 	
     * 	@return string
     */
    function getName() {
        return $this->_name;
    }

    /**
     * 	get all teachers of the student
     * 	
     * 	@return array of objects
     */
    function getAllTeachersOfTheStudent() {
        return $this->_group->getAllTeachersOfTheGroup();
    }

    /**
     * 	get one teacher of the student
     * 	
     *  @param int $teacher_id - teacher id from DB
     *  
     * 	@return object
     */
    public function getTheTeacherOfTheStudent($teacher_id) {
        return $this->_group->getTheTeacherOfTheGroup($teacher_id);
    }

}
