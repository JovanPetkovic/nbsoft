<?php
    $db = dbConnect();
    sql($db);
    $db->close();
    function sql($db){
        dvaDana($db);
        imePorudzbinaVrednost($db);
    }

    function sqlPrint($query)
    {
        echo "<ul>";
        while($row = $query->fetch_assoc())
        {
            echo "<li>";
            print_r($row);
            echo "</li>";
        }
        echo "</ul>";
    }

    function dvePorudzbine()
    {
        $query = $db->query('SELECT * Users WHERE')

    }

    function imePorudzbinaVrednost($db)
    {
        $query = $db->query('SELECT Orders.id, Orders.value, Users.firstname, Users.lastname FROM Orders
                            INNER JOIN Users ON Orders.userId = Users.id');
        sqlPrint($query);
    }
    function dvaDana($db)
    {
        $query =  $db->query('SELECT * FROM Users WHERE DATE(dateCreate) > "2022-10-23"');
        sqlPrint($query);
    }

    function dbConnect(){
        $servername= 'localhost:3306';
        $database = 'nbsoft';
        $username = 'root';
        $password = 'banana554';

        $db = new mysqli($servername,$username,$password, $database);
        if($db->connect_error)
        {
            die("connection failed" . $db->connect_error);
        }
        return $db;
    }








?>