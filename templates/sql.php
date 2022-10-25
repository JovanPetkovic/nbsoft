<?php
    $db = dbConnect();
    sql($db);
    $db->close();
    function sql($db){
        dvaDana($db);
        imePorudzbinaVrednost($db);
        dvePorudzbine($db);
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
        $query = $db->query('SELECT orderId FROM OrderItems');
        $brojStavki[] = Array();
        while($row = $query->fetch_assoc())
        {
            $brojStavki[$row['orderId']]++;
        }
        $query = $db->query('SELECT Orders.id, Users.firstname, Users.lastname FROM Orders INNER JOIN
                            Users ON Orders.userId = Users.id');
        while($row = $query->fetch_assoc())
        {
            echo $row['id'] . " | " . $row['firstname'] . " | " . $row['lastname'] . " | " . $brojStavki[$row['id']] . "<br>";

        }
    }

    function sqlE($db)
    {
        $query = $db->query('SELECT orderId FROM OrderItems');
        $brojStavki[] = Array();
        while($row = $query->fetch_assoc())
        {
            $brojStavki[$row['orderId']]++;
        }
        $query = $db->query('SELECT Orders.id, Users.firstname, Users.lastname FROM Orders INNER JOIN
                                Users ON Orders.userId = Users.id');
        while($row = $query->fetch_assoc())
        {
            if($brojStavki[$row['id']]<2)
            {
                continue;
            }
            echo $row['id'] . " | " . $row['firstname'] . " | " . $row['lastname'] . " | " . $brojStavki[$row['id']] . "<br>";

        }
    }

    function sqlF($db)
    {
        $query = $db->query("select * from (select count(productId) as distinctCount, id as userId from (select distinct(OrderItems.productId), Users.id, Orders.id as orderId from Users 
                            inner join Orders on Users.id =  Orders.userId
                            inner join OrderItems on Orders.id = OrderItems.orderId) t
                             group by orderId) t2
                            inner join Users on Users.id = userId
                            where distinctCount > 2;");
        sqlPrint($query);
        
    }

    function dvePorudzbine($db)
    {
        $query = $db->query('SELECT userId FROM Orders');
        $arr[] = Array();
        while($row = $query->fetch_assoc())
        {
            $arr[$row['userId']]++;
        }
        $query = $db->query('SELECT * FROM Users');
        while($row = $query->fetch_assoc())
        {
            if($arr[$row['id']]>1)
            {
                print_r($row);
            }
        }
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