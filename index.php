<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'inc/config.php';

$math = new Discipline('математика');
$physics = new Discipline('физика');
$astronomy = new Discipline('астрономия');
$informatics = new Discipline('информатика');
$crypt = new Discipline('криптография');

$professor = new Teacher ('Иван Иванович Петров', $astronomy);
$dean = new Teacher ('Петр Николавич Сидоров', $math);
$professor->addDiscipline($physics);
$dean->addDiscipline($informatics);

$in42 = new Group('IH-42');
$in43 = new Group('IH-43');
$in42->addTeacher($professor);
$in42->addTeacher($dean);
$in43->addTeacher($dean);


$fort_K = new Student('Коля Форточкин', '20', $in42);
$utkina_M = new Student('Маша Уткина', '19', $in42);

$jen_U = new Student('Женя Улюляев', '21', $in43);
$sokolova_K = new Student('Катя Соколова', '18', $in43);

print_student_info($fort_K);
print_student_info($utkina_M);
print_student_info($jen_U);
print_student_info($sokolova_K);

$fort_K->setGroup($in43);
print_student_info($fort_K);

echo $fort_K->getTheTeacherOfTheStudent('2')."<br/>";

print_teacher_info($professor);
print_teacher_info($dean);
$professor->addDiscipline($crypt);
print_teacher_info($professor);
$professor->deleteDiscipline('5');
echo "<br/>";
$dean->getTheDesciplineOfTheTeacher('11');
echo "<br/>";
print_group_info($in42);
print_group_info($in43);

$in43->addTeacher($professor);
$in43->setName('IH-43/1');

print_group_info($in43);

echo $in42->deleteTeacher('4')."<br/>";
$in43->getTheTeacherOfTheGroup('7')."<br/>";
