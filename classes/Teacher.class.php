<?php
/**
 * Description of Teacher
 *
 * @author igor
 */
require_once 'ITeacher.class.php';

class Teacher implements ITeacher {
    private $name;
    private $discipline = [];
    
    function __construct( $name, IDiscipline $discipline ) {
        $this->name = $name;
        $this->addDiscipline( $discipline );
    }
    
    public function getAllDisciplinesofTheTeacher(){
        return $this->discipline;
    }
    
    public function addDiscipline(IDiscipline $discipline ){
         array_push($this->discipline, $discipline);
    }
    
    public function deleteDiscipline( $discipline_id ){
        echo "If discipline_id matches one in array then I hope the discipline's entry with id=" . $discipline_id . " was deleted from DB";
    }
    
    public function getTheDesciplineOfTheTeacher ( $discipline_id  ){
        echo "If discipline_id matches one in array then here should be a discipline's entry with id=".$discipline_id;
    }

    public function getName(){
        return $this->name; 
     }
}
