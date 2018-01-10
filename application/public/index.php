<!DOCTYPE html>
<html>
    <head>
        <title>Nginx + PHP with Xdebug + MariaDB</title>
    </head>
    <body>

        <h1>Nginx + PHP with Xdebug + MariaDB</h1>

        <hr>

        <h2>Nginx</h2>
        <p>Version <?= $_SERVER['SERVER_SOFTWARE'] ?></p>

        <h2>PHP</h2>
        <p>Version <?= phpversion() ?></p>

        <h2>MariaDB (MySQL)</h2>
        <?php

        $username = $_ENV['MYSQL_USER'];
        $password = $_ENV['MYSQL_PASSWORD'];
        $database = $_ENV['MYSQL_DATABASE'];
        $hostname = 'mariadb';
        $dns = sprintf('mysql:host=%s;dbname=%s', $hostname, $database);

        ?>
        <?php $pdo = new PDO($dns, $username, $password); ?>
        <p>Version <strong><?= $pdo->query('SELECT VERSION()')->fetchColumn() ?></strong></p>
        <p>Connection with MariaDB: <strong><?= $pdo ? 'Connected' : 'Not connected' ?></strong></p>
        <table>
            <tr>
                <td>Host</td>
                <td><?= $hostname ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?= $username ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?= $password ?></td>
            </tr>
            <tr>
                <td>Database</td>
                <td><?= $database ?></td>
            </tr>
        </table>
    </body>
</html>
