CREATE TABLE Customer(
	User_ID int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	User_Name VARCHAR(50),
	Email VARCHAR(50),
	User_Password VARCHAR(255),
	Rating REAL,
	Address VARCHAR(50),
	Phone VARCHAR(50),
	Zipcode INTEGER,
	Lat REAL,
	Lon REAL);

CREATE TABLE Product(
	Product_ID int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	Product_Name VARCHAR(50),
  Seller_ID INTEGER NOT NULL,
	Product_image VARCHAR(200),
	Price_Sell REAL,
	Price_New REAL,
	Price_Recommend REAL,
	Date_Post DATE DEFAULT DATE(CURRENT_TIMESTAMP),
	Sold_Or_Not INTEGER DEFAULT 0,
	Category VARCHAR(50),
	Product_Description VARCHAR(500)
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
	Review VARCHAR(300) DEFAULT 'no review yet',
  UNIQUE (Seller_ID, Buyer_ID, Product_ID)
);

CREATE TABLE Favorite(
	Favorite_ID int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	User_ID int(11),
  Product_ID int(11),
  UNIQUE (User_ID, Product_ID)
);


INSERT INTO Customer VALUES
(1, 'Jianjia', 'jianjia2@illinois.edu', 'nnttfozf123.', 4.5, '1903N Lincoln Ave', '2173050751', 61801, 40.129822 , -88.22069),
(2, 'alena.sorokina', 'alena3@illinois.edu', 'mypassword123', 4.5, '308 E Green str', '2174197091', 61820, 40.111054 , -88.203975),
(3, 'Vardhan', 'vdongre2@illinois.edu', 'some_k3yw0rd', 4.5, 'somewhere', '2170000000', 61820, 40.111054 , -88.203975),
(4, 'aidana', 'aidana2@illinois.edu', 'aidana_96', 4.5, '308 E Green str', '2170000000', 61820,  40.111054 , -88.203975),
(5, 'Kelin', 'kelind2@illinois.edu', 'skhauia1n2g3', 4.5, 'somewhere', '2170000000', 61820, 40.111054 , -88.203975),
(6, 'Sparsh', 'sparsha2@illinois.edu', 'spa2019', 4.5, 'somewhere','2170000000', 61820, 40.111054 , -88.203975);

INSERT INTO Product VALUES
(1, 'AirPods', 1, '1.png', 140, 199, 150, '2020-07-19', 1, 'Electronics', 'AirPods with wireless charger case'),
(2, 'iphone charger', 2, '2.png', 15, 30, 20, '2020-07-17', 0, 'Electronics', 'New iPhone charger, Lightning Cable 6FT'),
(3, 'Lamp', 1, '3.png', 5, 15,  10, '2020-07-18', 0, 'Electronics', 'Brand new lamp, suitable for students'),
(4, 'Mouse & Keyboarad', 3, '4.png', 20, 40,  20, '2020-07-18', 0, 'Electronics', 'Wireless Mouse and Keyboard for Macbook Pro/Air'),
(5, 'Monitor', 3, '5.png', 15, 75,  50, '2020-07-18', 0, 'Electronics', 'Samsung Monitor LED'),
(6, 'Alexa Dot', 3, '6.png', 10, 39.99,  10, '2020-07-18', 0, 'Electronics', 'Amazon Alexa Dot Voice-activated virtual assistant (White)'),
(7, 'Rice Cooker', 3, '7.png', 15, 22.99,  10, '2020-07-19', 0, 'Electronics', 'Electric cooker'),
(8, 'Nail polish', 5, '8.png', 6, 9, 7, '2020-07-18', 1, 'Beauty', 'essie nail polish, color: a-list'),
(9, 'Nail polish', 5, '9.png', 6, 9, 7, '2020-07-18', 1, 'Beauty', 'essie nail polish, color: eternal optimist'),
(10, 'Nail polish', 5, '10.png', 6, 9, 7,  '2020-07-18', 1, 'Beauty', 'essie nail polish, color: set in stones'),
(11, 'Calculator', 6, '11.png', 8, 12, 10,  '2020-07-21', 0, 'Electronics', 'Casio Scientific Calculator fx-100MS'),
(12, 'candle', 4, '12.png', 3, 5, 5,  '2020-07-18', 0, 'Household', 'Candle from Wallmart with vanilla scent'),
(13, 'beats x wireless headphones', 4, '13.png', 15, 150, 0,  '2020-07-19', 0, 'Electronics', 'Beats X wireless headphones, one of the ears is broken'),
(14, 'sleeping bag', 4, '14.png', 20, 30, 25,  '2020-07-18', 1, 'Household', 'sleeping bag from Wallmart, never used'),

(15, 'nail polish remover', 4, '15.png', 20, 30, 25,  '2020-07-18', 1,'Beauty', 'sleeping bag from Wallmart, never used'),
(16, 'book "Kite Runner"', 4, '16.png', 8, 15, 10,  '2020-07-18', 1, 'Books', 'Kite Runner by Khaled Hosssoft cover from Amazon'),
(17, 'book "The Chimp Paradox"', 4, '17.png', 10, 20, 10,  '2020-07-18', 0, 'Books', 'The Chimp Paradox by Steve Peters in soft cover'),
(18, 'book Surely, you are joking Mr. Feynman', 4, '18.png', 10, 15, 10,  '2020-07-18', 0, 'Books', 'Surely You are Joking, Mr. Feynman!": Adventures of a Curious Character as Told to Ralph Leighton (Arrow Books) (Paperback) - Common'),
(19, 'book "The color purple"', 4, '19.png', 10, 15, 10,  '2020-07-19', 0, 'Books', 'The Color Purple: A Novel Paperback by Alice Walker'),


(20, 'JBL earpods ', 2, '20.png', 15, 40, 10,  '2020-07-21', 0, 'Electronics', 'wireless JBL earpods, sometimes connection is not stable in one of the ears'),
(21, 'Amazon Women Long Sleeve T-Shirt', 2, '21.png', 15, 30, 10,  '2020-07-20', 0, 'Fashion', 'Longsleeve with Amazon Logo'),
(22, 'Desk ', 2, '22.png', 50, 100, 10,  '2020-07-20', 0, 'Furniture', 'Computer desk, size: 100*50*72CM (L*W*H : 39.4 * 19.7 * 28.3 Inches), Brown Desktop Black Frame.'),
(23, 'Coffee table', 2, '23.png', 50, 75, 10,  '2020-07-20', 0, 'Furniture', 'Small coffee table, size: 80*50*42CM'),
(24, 'Desk Lamp', 2, '24.png', 25, 40, 10,  '2020-07-20', 0, 'Furniture', 'Adjustable desk lamp ');


INSERT INTO Purchase_Record VALUES
(1, 4, 1, 16, 'Grainger', '2020-07-21', 4, 4.5, 4.7, 'I was almost relieved when, partway into reading The Kite Runner, I realised this was definitely a ‘good’ book. Otherwise, I’m not sure that I could have written a review. It would be very difficult to criticise a book so widely adored.'),
(2, 1, 5, 1, 'Grainger', '2020-07-21', 4, 5, 4.6, 'Very good and new. Like it!'),
(3, 4, 2, 15, 'Green Street', '2020-07-20', 5, 4.9, 5, 'I like the color!'),
(4, 5, 1, 8, 'County Market', '2020-07-25', 5, 4.9, 5, 'I like the nail polish!'),
(5, 5, 1, 9, 'County Market', '2020-07-25', 5, 3.5, 5, 'no review yet'),
(6, 5, 1, 10, 'County Market', '2020-07-25', 5, 4.6, 4.3, "no review yet"),
(7, 2, 4, 2, 'County Market', '2020-07-25', 5, 4.6, 4.3, "no review yet"),
(8, 2, 4, 20, 'County Market', '2020-07-25', 5, 4.6, 4.3, "This earpods is comfortable, very good");

INSERT INTO Favorite VALUES
(1, 1, 2),
(2, 1, 4),
(3, 1, 20),
(4, 4, 1),
(5, 4, 8);
