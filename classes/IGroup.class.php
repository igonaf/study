<?php

/**
 *
 * @author igor
 */
interface IGroup {

    /**
     * 	get name of the group
     * 	
     * 	@return string
     */
    function getName();

    /**
     * 	get all teachers of the group
     * 	
     * 	@return array of objects
     */
    function getAllTeachersOfTheGroup();

    /**
     * 	get one teacher of the group
     * 	
     *      @param int $teacher_id - teacher id from DB
     *  
     * 	@return object
     */
    function getTheTeacherOfTheGroup($teacher_id);
}
