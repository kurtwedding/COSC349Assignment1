# Landlord Client Database Servers (On Virtual Machines)
This application creates three virtual machines that communicate to each other over their local network, each with a specific purpose.

The purpose of this application is to create and maintain a database of rental properties addresses and their landlord, and tenant.

One virtual machine, called dbserver, is used to store the database for the other two virtual machines to interact with.

Another is the client server, which makes a web interface used to interact with the database allowing additions to be made to the database.

The last is the landlord server, which makes a web interface used to administrate the database allowing changes to be made to the database, including removal and addition of elements in the database.

The virtual machines communicate over their own local network, using local IP addresses. This allows the individual machines to receive and send data to other virual machines.
