<?php
/**
 * Description of Group
 *
 * @author igor
 */
require_once 'IGroup.class.php';

class Group implements IGroup {
    private $name;
    private $teachers = [];
       
    function __construct($name) {
        $this->setName($name);
    }

    public function setName($name){
       $this->name = $name;
    }
            
    public function getName(){
       return $this->name;
    }    
    
    function addTeacher(ITeacher $teacher){
        array_push($this->teachers, $teacher);
    }
    
    function getAllTeachersOfTheGroup(){
        return $this->teachers;
    }
    
    function deleteTeacher($teacher_id){
        echo "If teacher_id matches one in array then I hope the teacher's entry with id=" . $teacher_id . " was deleted from DB";
    }
    
    function getTheTeacherOfTheGroup($teacher_id){
        echo "If teacher_id matches one in array then here should be a teacher's entry with id=".$teacher_id;
    }
    
}
