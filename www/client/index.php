<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
    <head>
        <title>Client Page</title>
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
        <h1>Client Test Page</h1>
        <p>
            Available properties for rent:
        </p>
        <table>
        <tr><th>Address</th><th>Landlord</th><th>Tenant</th></tr>
            <?php
            $db_host = '192.168.56.13';
            $db_name = 'fvision';
            $db_user = 'client';
            $db_passwd = 'clientpassword';

            $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

            $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

            $q = $pdo->query("SELECT * FROM properties");

            while($row = $q->fetch()) {
                if($row['tenant'] == NULL) {
                    echo "<tr><td>".$row["address"]."</td><td>".$row["landlord"]."</td><td>".$row["tenant"]."</td></tr>\n";
                }
            }
            ?>
        </table>
        <div style="margin: 8px;"><p>Enter property to apply for: </p>
            <input style="margin-right:4px;"type="text"  placeholder="1 Example Street"><input type="text" placeholder="Your Name"> <button>Apply</button>
        </div>
        <!-- 
            I'm not sure how to send the data from the input fields to the dbserver, but the table above shows that the dbserver and the client website are communicating.
        -->
        <footer style="font-size: 10px;">Click <a href= "http://localhost:8081">here</a> to go to the admin/landlord website.</footer>
    </body>
</html>