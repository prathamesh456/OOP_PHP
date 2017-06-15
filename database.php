<?php
class Database_example
{
    $host;
    $user;
    $pass;
    $data;
    $con;
    $table;
    $db;
    $run

    function controls()
    {
        $this->host="localhost";
        $this->user="root";
        $this->pass="root";
        $this->data="OOP_PHP";
    }

    function connection()
    {
        $this->con="mysqli_connect($this->host,$this->user,$this->pass,$this->data)";
    }
    
    function tablename()
    {
       $this->table="Insert into insertion_details(Name,Number) values('$_POST[name]','$_POST[number]')";
       $this->run= mysqli_query($this->con,$this->table); 
       echo "Insertion successful !!";
    }
    
    function databaseconnection()
    {
        $this->db="mysql_select_db($this->data,$this->con)";
    }

}

$name=new Database_example();
$name->controls();
$name->connection();
$name->tablename();

if(!($name->con))
{
    echo "'Error: ' . mysql_error()";
}

?>