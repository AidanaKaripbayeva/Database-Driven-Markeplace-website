CREATE TABLE Customer(
	User_ID int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	User_Name VARCHAR(50),
	Email VARCHAR(50),
	User_Password VARCHAR(50),
	Rating REAL,
	Address VARCHAR(50),
	Phone VARCHAR(50),
	Zipcode INTEGER
);
CREATE TABLE Product(
	Product_ID int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	Product_Name VARCHAR(50),
  Seller_ID INTEGER NOT NULL,
	Product_image VARCHAR(200),
	Price_Sell REAL,
	Price_New REAL,
	Price_Recommend REAL,
	Date_Post DATE,
	Sold_Or_Not INTEGER,
	Review VARCHAR(300),
	Category VARCHAR(50),
	Product_Description VARCHAR(500),
	FOREIGN KEY(Seller_ID) References Customer(User_ID) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE Purchase_Record(
	Purchase_ID int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	Seller_ID INTEGER NOT NULL,
	Buyer_ID INTEGER NOT NULL,
	Product_ID INTEGER NOT NULL,
	Location VARCHAR(50),
	TimeOfPurchase DATE,
	Rating_Quality REAL,
	Rating_Description_VS_Quality REAL,
	Rating_User_Satisfaction REAL,
	FOREIGN KEY(Buyer_ID) References Customer(User_ID) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY(Seller_ID, Product_ID) References Product(Seller_ID, Product_ID) ON UPDATE CASCADE ON DELETE CASCADE
);

INSERT INTO Customer VALUES
(1, 'Jianjia', 'jianjia2@illinois.edu', 'nnttfozf123.', 4.5, '1903N Lincoln Ave', '2173050751', 61801),
(2, 'alena.sorokina', 'alena3@illinois.edu', 'mypassword123', 4.5, '308 E Green str', '2174197091', 61820),
(3, 'Vardhan', 'vdongre2@illinois.edu', 'some_k3yw0rd', 4.5, 'somewhere', '2170000000', 61820),
(4, 'aidana', 'aidana2@illinois.edu', 'aidana_96', 4.5, '308 E Green str', '2170000000', 61820),
(5, 'Kelin', 'kelind2@illinois.edu', 'skhauia1n2g3', 4.5, 'somewhere', '2170000000', 61820),
(6, 'Sparsh', 'sparsha2@illinois.edu', 'spa2019', 4.5, 'somewhere','2170000000', 61820);

INSERT INTO Product VALUES
(1, 'AirPods', 1, 'Image does not exist', 140, 199, 150, '2020-07-19', 0, 'No review yet', 'Electronics', 'AirPods with wireless charger case'),
(2, 'iphone charger', 2, 'Image does not exist', 15, 30, 20, '2020-07-17', 0, 'No review yet', 'Electronics', 'New iPhone charger, Lightning Cable 6FT'),
(3, 'Lamp', 1, 'Image does not exist', 5, 15,  10, '2020-07-18', 0, 'No review yet', 'Electronics', 'AirPods with wireless charger case'),
(4, 'Mouse & Keyboarad', 3, 'Image does not exist', 20, 40,  20, '2020-07-18', 0, 'No review yet', 'Electronics', 'Wireless Mouse and Keyboard for Macbook Pro/Air'),
(5, 'Monitor', 3, 'Image does not exist', 15, 75,  50, '2020-07-18', 0, 'No review yet', 'Electronics', 'Samsung Monitor LED'),
(6, 'Alexa Dot', 3, 'Image does not exist', 10, 39.99,  10, '2020-07-18', 0, 'No review yet', 'Electronics', 'Amazon Alexa Dot Voice-activated virtual assistant (White)'),
(7, 'Rice Cooker', 3, 'Image does not exist', 15, 22.99,  10, '2020-07-19', 0, 'No review yet', 'Electronics', 'Electric cooker'),
(8, 'Nail polish', 5, 'Image does not exis', 6, 9, 7, '2020-07-18', 0, 'No review yet', 'Beauty', 'essie nail polish, color: a-list'),
(9, 'Nail polish', 5, 'Image does not exis', 6, 9, 7, '2020-07-18', 0, 'No review yet', 'Beauty', 'essie nail polish, color: eternal optimist'),
(10, 'Nail polish', 5, 'Image does not exis', 6, 9, 7,  '2020-07-18', 0, 'No review yet', 'Beauty', 'essie nail polish, color: set in stones'),
(11, 'Calculator', 6, 'Image does not exis', 8, 12, 10,  '2020-07-21', 0, 'No review yet', 'Electronics', 'Casio Scientific Calculator fx-100MS'),
(12, 'candle', 4, 'Image does not exis', 3, 5, 5,  '2020-07-18', 0, 'No review yet', 'Household', 'Candle from Wallmart with vanilla scent'),
(13, 'beats x wireless headphones', 4, 'Image does not exis', 15, 150, 0,  '2020-07-19', 0, 'No review yet', 'Electronics', 'Beats X wireless headphones, one of the ears is broken'),
(14, 'sleeping bag', 4, 'Image does not exis', 20, 30, 25,  '2020-07-18', 0, 'No review yet', 'Household', 'sleeping bag from Wallmart, never used'),

(15, 'nail polish remover', 4, 'Image does not exis', 20, 30, 25,  '2020-07-18', 0, 'No review yet', 'Beauty', 'sleeping bag from Wallmart, never used'),
(16, 'book "Kite Runner"', 4, 'Image does not exis', 8, 15, 10,  '2020-07-18', 1, 'I was almost relieved when, partway into reading The Kite Runner, I realised this was definitely a ‘good’ book. Otherwise, I’m not sure that I could have written a review. It would be very difficult to criticise a book so widely adored.', 'Books', 'Kite Runner by Khaled Hosssoft cover from Amazon'),
(17, 'book "The Chimp Paradox"', 4, 'Image does not exis', 10, 20, 10,  '2020-07-18', 0, 'No review yet', 'Books', 'The Chimp Paradox by Steve Peters in soft cover'),
(18, 'book Surely, you are joking Mr. Feynman', 4, 'Image does not exis', 10, 15, 10,  '2020-07-18', 0, 'No review yet', 'Books', 'Surely You are Joking, Mr. Feynman!": Adventures of a Curious Character as Told to Ralph Leighton (Arrow Books) (Paperback) - Common'),
(19, 'book "The color purple"', 4, 'Image does not exis', 10, 15, 10,  '2020-07-19', 0, 'No review yet', 'Books', 'The Color Purple: A Novel Paperback by Alice Walker'),


(20, 'JBL earpods ', 2, 'Image does not exis', 15, 40, 10,  '2020-07-21', 0, 'No review yet', 'Electronics', 'wireless JBL earpods, sometimes connection is not stable in one of the ears'),
(21, 'Amazon Women Long Sleeve T-Shirt', 2, 'Image does not exis', 15, 30, 10,  '2020-07-20', 0, 'No review yet', 'Fashion', 'Longsleeve with Amazon Logo'),
(22, 'Desk ', 2, 'Image does not exis', 50, 100, 10,  '2020-07-20', 0, 'No review yet', 'Furniture', 'Computer desk, size: 100*50*72CM (L*W*H : 39.4 * 19.7 * 28.3 Inches), Brown Desktop Black Frame.'),
(23, 'Coffee table', 2, 'Image does not exis', 50, 75, 10,  '2020-07-20', 0, 'No review yet', 'Furniture', 'Small coffee table, size: 80*50*42CM'),
(24, 'Desk Lamp', 2, 'Image does not exis', 25, 40, 10,  '2020-07-20', 0, 'No review yet', 'Furniture', 'Adjustable desk lamp ');


INSERT INTO Purchase_Record VALUES
(1, 4, 1, 16, 'Grainger', '2020-07-21', 4, 4.5, 4.7),
(2, 1, 5, 1, 'Grainger', '2020-07-21', 4, 5, 4.6),
(3, 4, 2, 15, 'Green Street', '2020-07-20', 5, 4.9, 5),
(4, 4, 2, 14, 'Green Street', '2020-07-20', 5, 4.9, 4.3);
