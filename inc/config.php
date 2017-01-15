<?php
spl_autoload_register( function($class){
    require_once 'classes/' . $class . '.class.php';
});

function print_student_info(Student $student) {
echo <<<OUT
{$student->getName()} учится в группе {$student->getGroupName()}.
Возраст: {$student->getAge()}. 
Преподаватели студента: 
OUT;

foreach ($student->getAllTeachersOfTheStudent() as $teacher) {
    echo $teacher->getName().', ';
}
echo "<br/>";
}

function print_teacher_info(ITeacher $teacher){
    echo <<<OUT
    Преподаватель
{$teacher->getName()} преподает предметы 
OUT;

foreach ($teacher->getAllDisciplinesofTheTeacher() as $discipline) {
    echo $discipline->getName().', ';
}
echo "<br/>";
}

function print_group_info(IGroup $group) {
    echo <<<OUT
В группе
{$group->getName()} преподают преподаватели 
OUT;

foreach ($group->getAllTeachersOfTheGroup() as $teacher) {
    echo $teacher->getName() . ', ';
}
echo "<br/>";
}