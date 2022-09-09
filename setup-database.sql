CREATE TABLE properties (
    address varchar(30) NOT NULL,
    landlord varchar(30) NOT NULL,
    tenant varchar(30),
    PRIMARY KEY (address)
);

INSERT INTO properties VALUES ('76 Owheo Lane','John Wayne','Jack Ofalltrades');
INSERT INTO properties VALUES ('29 Cloud Avenue', 'Hans Gruber', NULL);
INSERT INTO properties VALUES ('109 Hargrave Boulevard', 'Peter Dinklage', "John Snow");
INSERT INTO properties VALUES ('76  Clyde Grove', 'Elvis Presley', "Freddy Mercury");
INSERT INTO properties VALUES ('83 Garrow Street', 'Bradley Pitt', NULL);
