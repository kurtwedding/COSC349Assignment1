<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
    <head>
        <title>Landlord Server</title>
        <style>
        th { 
            text-align: left;
        }

        table, th, td{ 
            border: 2px solid grey; 
            border-collapse: collapse; 
        }

        th, td{ 
            padding: 0.2em; 
        }
        </style>
    </head>
    <body>
        <h1>Landlord Page</h1>
        <p>All currently registered properties, their landlords, and their tenants are listed below.</p>
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
        <div style="margin: 8px;" id="databaseEntry"><p>Enter property entry to change: </p>
            <input style="margin-right:4px;"type="text"  placeholder="Address"><input style="margin-right:4px;" type="text" placeholder="Landlord">
            <input type="text" placeholder="Tenant"> <button>Change</button>
        </div>
        <div style="margin: 8px;" id="databaseEntry"><p>Enter property entry to add to the database: </p>
            <input style="margin-right:4px;"type="text"  placeholder="Address"><input style="margin-right:4px;" type="text" placeholder="Landlord">
            <input type="text" placeholder="Tenant"> <button>Add</button>
        </div>
        <div style="margin: 8px;" id="databaseEntry"><p>Enter property entry to remove from the database: </p>
            <input style="margin-right:4px;"type="text"  placeholder="Address"><input style="margin-right:4px;" type="text" placeholder="Landlord">
            <input type="text" placeholder="Tenant"> <button>Remove</button>
        </div>
        <footer style="font-size: 10px;">Click <a href= "http://localhost:8080">here</a> to go to the client website.</footer>
        <!-- 
            I'm not sure how to send the data from the input fields to the dbserver, but the table above shows that the dbserver and the client website are communicating.
        -->
    </body>
 </html>
