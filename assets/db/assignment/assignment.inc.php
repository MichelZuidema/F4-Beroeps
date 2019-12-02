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
        if(!empty($assignment)) {
            if(!empty($assignment['assignmentName'])) {
                if(!empty($assignment['assignmentGenre'])) {
                    if(!empty($assignment['assignmentDifficulty'])) {
                        if(!empty($assignment['assignmentContent'])) {
                            $name = filter_var($assignment['assignmentName'], FILTER_SANITIZE_STRING);
                            $category = filter_var($assignment['assignmentGenre'], FILTER_SANITIZE_STRING);
                            $difficulty = filter_var($assignment['assignmentDifficulty'], FILTER_SANITIZE_STRING);
                            $content = filter_var($assignment['assignmentContent'], FILTER_SANITIZE_STRING);


                            $sql = "INSERT INTO `opdracht` (id, niveau, soort, naam, content) VALUES (NULL, '$difficulty', '$category', '$name', '$content')";

                            try {
                                if($this->connect()->query($sql)) {
                                    return "OK";
                                } else {
                                    return "Er is iets foutgegaan tijdens het toevoegen van de opdracht aan de database!";
                                    //echo "sql: " . $sql;
                                }
                            } catch (Exception $e) {
                                return $e;
                            }
                        } else {
                            return "Content was leeg!";
                        }
                    } else {
                        return "Niveau was leeg!";
                    }
                } else {
                    return "Soort opdracht was leeg!";
                }
            } else {
                return "Opdrachtnaam was leeg!";
            }
        } else {
            return "Assignment was empty!";
        }
    }
}

?>