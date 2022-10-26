<?php

    $db = dbConnect();
    sql($db);
    $db->close();
    function sql($db){
        sqlA($db);
        sqlB($db);
        sqlC($db);
        sqlD($db);
        sqlE($db);
        sqlF($db);
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

    function sqlD($db)
    {
        $query = $db->query("Select t.firstname, t.lastname, t.id as brojPorudzbine, count(OrderItems.id) as brojStavki from
                             (SELECT Users.firstname, Users.lastname, Orders.id from Users 
                            inner join Orders on Users.id = Orders.userId) t
                            inner join OrderItems on t.id = OrderItems.orderId
                            group by t.id;");
        echo "<h2>Sub-task D</h2>";
        sqlPrint($query);
    }

    function sqlE($db)
    {
        $query = $db->query('Select t.firstname, t.lastname, t.id as brojPorudzbine, count(OrderItems.id) as brojStavki from
                             (SELECT Users.firstname, Users.lastname, Orders.id from Users 
                            inner join Orders on Users.id = Orders.userId) t
                            inner join OrderItems on t.id = OrderItems.orderId
                            group by t.id  having brojStavki >= 2;');
        echo "<h2>Sub-task E</h2>";
        sqlPrint($query);
    }

    function sqlF($db)
    {
        $query = $db->query("select * from (select count(productId) as distinctCount, id as userId from (select distinct(OrderItems.productId), Users.id, Orders.id as orderId from Users 
                            inner join Orders on Users.id =  Orders.userId
                            inner join OrderItems on Orders.id = OrderItems.orderId) t
                             group by orderId) t2
                            inner join Users on Users.id = userId
                            where distinctCount > 2;");
        echo "<h2>Sub-task F</h2>";
        sqlPrint($query);
        
    }

    function sqlC($db)
    {
        $query = $db->query("select * from (select Users.*,count(Orders.userId) as orderCount from Users
                            inner join Orders on Users.id = Orders.userId
                            group by Users.id) t
                            where orderCount >= 2");
        echo "<h2>Sub-task C</h2>";
        sqlPrint($query);
    }

    function sqlB($db)
    {
        $query = $db->query('SELECT Orders.id, Orders.value, Users.firstname, Users.lastname FROM Orders
                            INNER JOIN Users ON Orders.userId = Users.id');
        echo "<h2>Sub-task B</h2>";
        sqlPrint($query);
    }
    function sqlA($db)
    {
        $query =  $db->query('SELECT * FROM Users WHERE DATE(dateCreate) > "2022-10-23"');
        echo "<h2>Sub-task A</h2>";
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