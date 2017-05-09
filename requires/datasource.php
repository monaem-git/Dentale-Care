<?php

require_once("database.php");

// This is a class that will represent as a datasource for the user
// by allowing them to manipulate the current database.
class DataSource {
    
    // return all the users in the current database
    public static function getAllUser() {
        global $database;
        $query = "SELECT * FROM users;";
        return $database->query($query);
    }

    // return the user with the matching query selection
    public static function getUser($selection) {
        global $database;
        $query = "SELECT * FROM users ";
        $query .= "WHERE " . $selection . " ;";
        return $database->query($query);
    }

    public static function getAppointment($selection) {
        global $database;
        $query = "SELECT * FROM appointments ";
        $query .= "WHERE " . $selection . " ;";
        return $database->query($query);
    }


    // create a new user for the system
    public static function createUser($firstName, $lastName, $sexe, $position, $speciality, 
            $dob, $adress, $email,$phone, $password,$notes,$name_file,$ajour) {
        global $database;
        $query = "INSERT INTO users(firstname,lastname, sexe, position, speciality,birthday,adress,email,phoneNumber,password,notes,profilePhoto,created) ";
        $query .= "VALUES ('{$firstName}', '{$lastName}', ";
        $query .= "'{$sexe}', '{$position}', '{$speciality}', '{$dob}', '{$adress}', '{$email}', ";
        $query .= "'{$phone}','{$password}', '{$notes}', '{$name_file}', '{$ajour}');";
        return $database->query($query);
    }

    // create a new appointment
    public static function createAppointment($registration_date, $country, $city, 
            $service, $staff, $appointment_date,$appointment_time,$notes,$firstName,$lastName,$gender,$client_email,$client_phone) {
        global $database;
        $query = "INSERT INTO appointments (registration_date, country, city, service, staff, appointment_date,appointment_time, notes,firstName,lastName,gender,client_email, client_phone) ";
        $query .= "VALUES ('{$registration_date}', '{$country}','{$city}', '{$service}', ";
        $query .= "'{$staff}', '{$appointment_date}', '{$appointment_time}', '{$notes}', ";
        $query .= "'{$firstName}', '{$lastName}', '{$gender}', ";
        $query .= "'{$client_email}','{$client_phone}');";
        return $database->query($query);
    }

    
    // update the user profile information with the given username and
    // its information
    public static function updateUser($firstName, $lastName, $email, 
            $dob, $adress, $password) {
        global $database;
        $query = "UPDATE users ";
        $query .= "SET firstname = '{$firstName}', ";
        $query .= "lastname = '{$lastName}', ";
        $query .= "sexe = '{$sexe}', ";
        $query .= "birthday = '{$dob}', ";
        $query .= "password = '{$password}', ";
        $query .= "WHERE email = '{$email}';";
        return $database->query($query);       
    }

 
}

?>
