<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
    <head>
        <title>Landlord Server</title>
        <style>
        body { font-family: Arial, Helvetica, sans-serif; font-size: 12pt;}
        table{ border: 2px solid grey; border-collapse: collapse; }
        th, td{ padding: 0.2em; }
        </style>
    </head>
    <body>
        <h1>Landlord Server</h1>
        <!-- <table>
            <tr>
                <td>
                    <form action="landlordserver.php" method="post">
                        <input type="submit" name="action" value="Start Server">
                    </form>
                </td>
                <td>
                    <form action="landlordserver.php" method="post">
                        <input type="submit" name="action" value="Stop Server">
                    </form>
                </td>
            </tr>
        </table> -->
        <table border=1>
            <tr><th>Address</th><th>Landlord</th><th>Tenant</th></tr>
        <?php
            $db_host = '192.168.56.13';
            $db_name = 'fvision';
            $db_user = 'landlord';
            $db_passwd = 'landlordpassword';

            $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

            $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

            $q = $pdo->query("SELECT * FROM properties");

            while($row = $q->fetch()) {
                echo "<tr><td>".$row["address"]."</td><td>".$row["landlord"]."</td><td>".$row["tenant"]."</td></tr>\n";
            }

            ?>
        </table>
    </body>
 </html>
