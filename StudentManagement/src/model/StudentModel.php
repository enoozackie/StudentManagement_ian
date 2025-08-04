<?php
namespace Akol\StudentManagement\Model;

use Akol\StudentManagement\Core\Crud;
use Akol\StudentManagement\Core\Database;
<<<<<<< HEAD

class StudentModel extends Database implements Crud {
    
=======
class StudentModel extends Database implements Crud {
>>>>>>> 24c449be0271505643dc59507ac79f6075518f84
    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;

<<<<<<< HEAD
    public function __construct() {
        parent::__construct();
        $this->id = "";
        $this->fullname = "";
        $this->yearlevel = "";
        $this->course = "";
        $this->section = "";
    }
    
    public function create() {
        try {
           
            $sql = "INSERT INTO students (id, name, year_level, course, section)
             VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sssss", $this->id, $this->fullname, $this->yearlevel, $this->course, $this->section);
            $stmt->execute();
        } catch (\Exception $e) {
            echo "Create Error: " . $e->getMessage();
        }   
=======
    public function __construct()
    {
{
        parent:: __construct();
            $this-> id = "";
            $this->name = "";
            $this->yearlevel = " ";
            $this->course = "";
            $this->section = "";

}
        }


    public function DisplayInfo(){

        echo "id : " .$this->id."\n";
        echo "name : " .$this->fullname."\n";
        echo "yearlevel : " .$this->yearlevel."\n";
        echo "course : " .$this->course."\n";
        echo "section   : " .$this->section."\n";
    }
    
    public function create (){

    }
    public function read(){

        try {
            $sql = "SELECT * FROM students"; 
            $result = $this->conn->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }
    public function update(){


    }
    public function delete(){


>>>>>>> 24c449be0271505643dc59507ac79f6075518f84
    }

    public function read() {
        try {
            $sql = "SELECT * FROM students";
            $result = $this->conn->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (\Exception $e) {
            echo "Read Error: " . $e->getMessage();
            return [];
        }
    }
 
    public function update() {
        try {
            $sql = "UPDATE students SET name = ?, year_level = ?, course = ?, section = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sssss",$this->fullname, $this->yearlevel, $this->course, $this->section, $this->id);
            $stmt->execute();
        } catch (\Exception $e) {
            echo "Update Error: " . $e->getMessage();
        }
    }

<<<<<<< HEAD
    public function delete() {
        try {
            $sql = "DELETE FROM students WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $this->id);
            $stmt->execute();
        
        } catch (\Exception $e) {
            echo "Delete Error: " . $e->getMessage();
        }
    }
=======
>>>>>>> 24c449be0271505643dc59507ac79f6075518f84
}
