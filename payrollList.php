<?php
  session_start();

  // initializing variables
  $username = "";
  $email    = "";
  $firstname ="";
  $lastname = "";
  $contact = "";
  $errors = array(); 

  // connect to the database
  $db = mysqli_connect('localhost', 'root', '', 'hr_ms');

    if (!$db) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
  }


  $sql = "SELECT a.user_name as username, e.salary as actaul ,(e.salary/(SELECT DAY(LAST_DAY(now()))))*(count(distinct(a.day))) as total_salary FROM attendance a inner join employee_table e on e.user_name = a.user_name  group by a.user_name";
     
 //   $sql ='CREATE TEMPORARY TABLE t1 (select DAY(LAST_DAY(now())) as no_of_day ,count(DISTINCT(day)) as countt,user_name from attendance GROUP by user_name);SELECT a.user_name as username, e.salary as actaul ,e.salary/(a.no_of_day * a.countt) as total_salary FROM employee_table e inner join t1 a on e.user_name = a.user_name where e.user_name = a.user_name;';   
    $query = mysqli_query($db, $sql);

    if (!$query) {
      die ('SQL Error: ' . mysqli_error($db));
    }
?>