CREATE TABLE properties (
    address varchar(30) NOT NULL,
    landlord varchar(30) NOT NULL,
    tenant varchar(30),
    PRIMARY KEY (address)
)

INSERT INTO properties VALUES ('76 Owheo Lane','John Landlord','Jack Tenant')
INSERT INTO properties VALUES ('29 Cloud Avenue', 'David Landlord', NULL)