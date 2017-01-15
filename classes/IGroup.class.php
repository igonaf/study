<?php
/**
 *
 * @author igor
 */
interface IGroup {
    function getName();
    function getAllTeachersOfTheGroup();
    function getTheTeacherOfTheGroup($teacher_id);
}
