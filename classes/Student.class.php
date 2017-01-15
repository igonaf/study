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
    
   function __construct($name, $age, IGroup $group){
        $this->_name = $name;
        $this->_age = $age;
        $this->setGroup( $group );
    }
    
    function setGroup(IGroup $group) {
        $this->_group = $group;
    }
    
    function getGroupName(){
        return $this->_group->getName();
    }
    
    function getAge() {
        return $this->_age;
    }
    
    function getName() {
        return $this->_name;
    }
    
    function getAllTeachersOfTheStudent(){
        return $this->_group->getAllTeachersOfTheGroup();
    }
    
    public function getTheTeacherOfTheStudent($teacher_id){
        return $this->_group->getTheTeacherOfTheGroup($teacher_id);
    }
    
}
