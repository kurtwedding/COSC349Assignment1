<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<HTML>
    <HEAD>
        <TITLE>Landlord Server</TITLE>
        <STYLE>
        BODY {font-family: Arial, Helvetica, sans-serif; font-size: 12pt}
        </STYLE>
    </HEAD>
    <BODY>
        <H1>Landlord Server</H1>
        <table>
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
        </table>
        <table>
        <?php
            $db_host = '192.168.56.12';
            $db_name = 'fvision';
            $db_user = 'landlord';
            $db_pwd = 'landlordpassword';

            $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

            $pdo = new PDO($pdo_dsn, $db_user, $db_pwd);

            $q = $pdo->query("SELECT * FROM properties");

            while($row = $q->fetch()) {
                echo "<tr><td>".$row["address"]."</td><td>"$row["landlord"]."</td><td>"$row["tenant"];
            }
            
            ?>
    </BODY>
</HTML>
