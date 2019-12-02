<?php

/**
 * Class assignmentAction
 *
 * @subpackage Assignment
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class assignmentAction extends Assignment
{
    public function ShowAllAssignments()
    {
        $data = $this->GetAllAssignments();

        return $data;
    }

    public function ShowAssignmentDetails($id)
    {
        $data = $this->GetAssignmentDetails($id);

        return $data;
    }

    public function ProcessNewAssignment($assignment) {
        $data = $this->CreateNewAssignment($assignment);

        return $data;
    }
}

?>