<?php

/**
 * User
 *
 * @subpackage Database
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class Student extends Database
{
    protected function LoginUserDetails($studentnr)
    {
        $sql = "SELECT * FROM `student` WHERE studentnummer = '$studentnr'";
        $result = $this->connect()->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $data[] = $row;

            return $data;
        } else {
            echo "No Students Found!";
        }
    }
}

?>