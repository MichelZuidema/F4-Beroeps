<?php

/**
 * Class Assignment
 *
 * @subpackage Database
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class Assignment extends Database
{
    protected function GetAllAssignments()
    {
        $sql = "SELECT * FROM `opdracht`";
        $result = $this->connect()->query($sql);
        $rows = $result->num_rows;

        if ($rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        } else {
            echo "No Assignments Found!";
        }
    }

    protected function GetAssignmentDetails($id)
    {
        $sql = "SELECT * FROM `opdracht` WHERE id = '$id'";
        $result = $this->connect()->query($sql);
        $rows = $result->num_rows;

        if ($rows > 0) {
            $row = $result->fetch_assoc();

            return $row;
        } else {
            echo "Assignment Not Found!";
        }
    }

    protected function CreateNewAssignment($assignment) {

    }
}

?>