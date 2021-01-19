/* ADMIN DATABASE */
create TABLE admin(
    adminID VARCHAR(10),
    adminUsername VARCHAR(20) PRIMARY KEY,
    adminPassword VARCHAR(50)
);

INSERT INTO `admin`(`adminID`, `adminUsername`, `adminPassword`) VALUES ("1","admin","admin123");
INSERT INTO `admin`(`adminID`, `adminUsername`, `adminPassword`) VALUES ("2","manager","manager123");
INSERT INTO `admin`(`adminID`, `adminUsername`, `adminPassword`) VALUES ("3","vendor","vendor123");



/*USERS DATABASE*/
CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT ,
    first_name VARCHAR(50) NOT NULL ,
    last_name VARCHAR(50) NOT NULL ,
    email VARCHAR(150) NOT NULL ,
    password VARCHAR(200) NOT NULL ,
    dob DATE NOT NULL ,
    mobile INT(10) NOT NULL ,
    gender VARCHAR(10) NOT NULL ,
    PRIMARY KEY (`id`));

/*FEEDBACK DATABASE*/
create TABLE feedback(
    date varchar(11),
    name varchar(30),
    email varchar(40),
    message varchar(1000)
);



/*PRODUCTS DATABASE*/
create TABLE products(
	pID varchar(20),
    pType varchar(20) NOT NULL,
    pName varchar(100) NOT NULL,
    pPrice int NOT NULL,
    PRIMARY KEY (pID));

INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ven1","venue","Hilton Hotel","300000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ven2","venue","Marble Beach","250000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ven3","venue","Barracuda Resort","200000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ven4","venue","Cinnamon Hotel","350000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ven5","venue","Marine Beach","230000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ven6","venue","Avenra Resort","280000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto1_P","photography","Danushka Sandeera - Platinum","300000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto1_G","photography","Danushka Sandeera - Golden","250000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto1_S","photography","Danushka Sandeera - Silver","200000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto2_P","photography","Studio CaptureX - Platinum","200000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto2_G","photography","Studio CaptureX - Golden","150000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto2_S","photography","Studio CaptureX - Silver","100000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto3_P","photography","Color Vision - Platinum","400000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto3_G","photography","Color Vision - Golden","350000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto3_S","photography","Color Vision - Silver","300000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto4_P","photography","Naween Aluthge - Platinum","270000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto4_G","photography","Naween Aluthge - Golden","180000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto4_S","photography","Naween Aluthge - Silver","130000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto5_P","photography","Sai Photography - Platinum","420000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto5_G","photography","Sai Photography - Golden","370000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto5_S","photography","Sai Photography - Silver","320000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto6_P","photography","Studio Siyak - Platinum","300000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto6_G","photography","Studio Siyak - Golden","200000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Pto6_S","photography","Studio Siyak - Silver","150000");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ctr1","catering","Sponge Caters","700");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ctr2","catering","Royal Catering","800");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ctr3","catering","Raffles Catering","640");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ctr4","catering","Mango Caters","500");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ctr5","catering","P&S Catering","550");
INSERT INTO `products`(`pID`, `pType`, `pName`, `pPrice`) VALUES ("Ctr6","catering","Tasty Caterers","680");