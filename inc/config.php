<?php

/* classes autoloader */
spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.class.php';
});

function print_student_info(Student $student) {
    echo <<<OUT
    {$student->getName()} учится в группе {$student->getGroupName()}.
    Возраст: {$student->getAge()}. 
    Преподаватели студента: 
OUT;

    print_array($student->getAllTeachersOfTheStudent());

    echo "<br/>";
}

function print_teacher_info(Teacher $teacher) {
    echo <<<OUT
    Преподаватель
    {$teacher->getName()} преподает предметы 
OUT;

    print_array($teacher->getAllDisciplinesofTheTeacher());

    echo "<br/>";
}

function print_group_info(IGroup $group) {
    echo <<<OUT
    В группе
    {$group->getName()} преподают преподаватели 
OUT;

    print_array($group->getAllTeachersOfTheGroup());

    echo "<br/>";
}

function print_array($array) {
    foreach ($array as $object) {
        echo $object->getName() . ', ';
    }
}
