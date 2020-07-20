CREATE TABLE Customer(
	User_ID VARCHAR(50) NOT NULL,
	User_Name VARCHAR(50),
	Email VARCHAR(50),
	User_Password VARCHAR(50),
	Rating REAL,
	PRIMARY KEY(User_ID)
);
CREATE TABLE Product(
	Product_ID VARCHAR(50) NOT NULL,
  Seller_ID VARCHAR(50) NOT NULL,
	Product_image VARCHAR(200),
	Price_Sell INTEGER,
	Price_New INTEGER,
	Date_Post DATE,
	Sold_Or_Not INTEGER,
	Review VARCHAR(300),
	Price_Recommend INTEGER,
	Category VARCHAR(50),
	Product_Name VARCHAR(50),
	Product_Description VARCHAR(500),
	PRIMARY KEY(Seller_ID, Product_ID),
	FOREIGN KEY(Seller_ID) References Customer(User_ID) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE Purchase_Record(
	Purchase_ID VARCHAR(50) NOT NULL,
	Seller_ID VARCHAR(50) NOT NULL,
	Buyer_ID VARCHAR(50) NOT NULL,
	Product_ID VARCHAR(50) NOT NULL,
	Location VARCHAR(50),
	TimeOfPurchase DATETIME,
	Rating_Quality REAL,
	Rating_Description_VS_Quality REAL,
	Rating_User_Satisfaction REAL,
	FOREIGN KEY(Buyer_ID) References Customer(User_ID) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY(Seller_ID, Product_ID) References Product(Seller_ID, Product_ID) ON UPDATE CASCADE ON DELETE CASCADE,
  PRIMARY KEY(Purchase_ID)
);



INSERT INTO Customer VALUES ('jianjia2', 'Jianjia Zhang', 'jianjia2@illinois.edu', 'nnttfozf123.', '4.5');

INSERT INTO Product VALUES ('1', 'jianjia2', 'TBD', 140, 199, '2020-07-19', 0, 'TBD', 150, 'Electronics', 'AirPods', 'AirPods with wireless charger case');
