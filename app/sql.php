<?php
$dsn = 'pgsql:dbname=TEST;host=pgsql;port=5432';
$user = 'postgres';
$pass = 'example';

try {
    // connect to db
    $dbh = new PDO($dsn, $user, $pass);

    $sth = $dbh->prepare('INSERT INTO test_comments (name, text) VALUES (?, ?)');

    $name = "test3";
    $text = "inserted from php";
    $sth->execute(array($name, $text));

    $query_result = $dbh->query('SELECT * FROM test_comments');

    // disconnect from db
    $dbh = null;
} catch (PDOException $ex) {
    print "DB ERROR: " . $ex->getMessage() . "<br/>";
    die();
}

foreach ($query_result as $row) {
    print $row["name"] . ": " . $row["text"] . "<br/>";
}
