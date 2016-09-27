<?php

mysql_connect("127.0.0.1", "root", "25");
mysql_select_db("test");
mysql_query("CREATE TABLE Students (
    StudId INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    StudName VARCHAR(20)
    );");

mysql_query("INSERT INTO Students (StudName) VALUES ('Germaine Tailleferre');");
mysql_query("INSERT INTO Students (StudName) VALUES ('Louis Durey');");
mysql_query("INSERT INTO Students (StudName) VALUES ('Darius Milhaud');");
mysql_query("INSERT INTO Students (StudName) VALUES ('Arthur Honegger');");
mysql_query("INSERT INTO Students (StudName) VALUES ('Georges Auric');");
mysql_query("INSERT INTO Students (StudName) VALUES ('Francis Poulenc');");

mysql_query("CREATE TABLE Books (
BookId INT NOT NULL, 
BookName VARCHAR(20),
StudId INT(10)
);");

mysql_query("INSERT INTO Books (BookId, BookName, StudId) VALUES (1, 'Notes', 1);");
mysql_query("INSERT INTO Books (BookId, BookName, StudId) VALUES (2, 'Sol-Fa', 1);");
mysql_query("INSERT INTO Books (BookId, BookName, StudId) VALUES (2, 'Sol-Fa', 2);");
mysql_query("INSERT INTO Books (BookId, BookName, StudId) VALUES (3, 'Music History', 1);");
mysql_query("INSERT INTO Books (BookId, BookName, StudId) VALUES (3, 'Music History', 2);");
mysql_query("INSERT INTO Books (BookId, BookName, StudId) VALUES (3, 'Music History', 3);");

$query = "SELECT StudName FROM Students s JOIN Books b ON s.StudId=b.StudId GROUP BY StudName ORDER BY COUNT(StudName) DESC";
$result = mysql_query($query);
while ($row = mysql_fetch_object($result))
{
    echo $row->StudName.";"."<br>";
}