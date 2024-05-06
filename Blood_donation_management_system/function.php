<?php
    function get_user_count(){
        $con = mysqli_connect("localhost","root","","register1");
        $user_count="";
        $query="select count(*) as user_count from request_register";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $user_count=$row["user_count"];
        }
        return ($user_count);
    }
    function get_donor_count(){
        $con = mysqli_connect("localhost","root","","register1");
        $donor_count="";
        $query="select count(*) as donor_count from donor_register";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $donor_count=$row["donor_count"];
        }
        return ($donor_count);
    }
    function get_patient_count(){
        $con = mysqli_connect("localhost","root","","register1");
        $patient_count="";
        $query="select count(*) as patient_count from patient_register";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $patient_count=$row["patient_count"];
        }
        return ($patient_count);
    }

?>