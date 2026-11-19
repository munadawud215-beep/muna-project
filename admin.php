<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
include 'db_connect.php';

$sql = SELECT  FROM messages ORDER BY created_at DESC;
$result = mysqli_query($conn, $sql);


!DOCTYPE html
html lang=en
head
    meta charset=UTF-8
    meta name=viewport content=width=device-width, initial-scale=1.0
    titleMuna  Admin Dashboardtitle

    style
        body {
            font-family Arial, sans-serif;
            background #fff5f8;
            padding 30px;
        }

        h1 {
            text-align center;
            color #d63384;
        }

        table {
            width 100%;
            border-collapse collapse;
            background white;
            margin-top 30px;
        }

        th, td {
            padding 15px;
            border 1px solid #ddd;
            text-align left;
        }

        th {
            background #d63384;
            color white;
        }

        trnth-child(even) {
            background #ffe6f0;
        }

        .empty {
            text-align center;
            margin-top 40px;
        }
    style
head

body
<a href="login.php?logout=1">Logout</a>
    h1Muna's Admin Dashboardh1

    h2Received Messagesh2

    php if (mysqli_num_rows($result)  0) { 

        table
            tr
                thIDth
                thNameth
                thEmailth
                thMessageth
                thDateth
            tr

            php while ($row = mysqli_fetch_assoc($result)) { 

                tr
                    tdphp echo $row['id']; td
                    tdphp echo htmlspecialchars($row['name']); td
                    tdphp echo htmlspecialchars($row['email']); td
                    tdphp echo htmlspecialchars($row['message']); td
                    tdphp echo $row['created_at']; td
                tr

            php } 

        table

    php } else { 

        p class=emptyNo messages received yet.p

    php } 

body
html

php mysqli_close($conn); 
```