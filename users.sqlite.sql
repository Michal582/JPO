BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS `users` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	`login`	TEXT NOT NULL UNIQUE,
	`email`	TEXT NOT NULL UNIQUE,
	`password`	TEXT NOT NULL,
	`permission`	INTEGER NOT NULL,
	`info`	INTEGER NOT NULL
);
CREATE TABLE IF NOT EXISTS `reservation` (
	`id`	integer NOT NULL,
	`car`	TEXT NOT NULL,
	`user`	integer NOT NULL,
	`return_date`	TEXT NOT NULL
);
CREATE TABLE IF NOT EXISTS `permissions` (
	`id`	INTEGER NOT NULL,
	`permission`	TEXT NOT NULL
);
CREATE TABLE IF NOT EXISTS `info` (
	`user`	integer NOT NULL,
	`firstname`	text NOT NULL,
	`lastname`	text NOT NULL,
	`address`	text NOT NULL,
	`postcode`	text NOT NULL,
	`city`	text NOT NULL,
	`DLN`	text NOT NULL,
	`IDnumber`	TEXT NOT NULL
);
CREATE TABLE IF NOT EXISTS `cars` (
	`plate`	text NOT NULL,
	`brand`	text NOT NULL,
	`model`	TEXT NOT NULL,
	`prod_year`	integer NOT NULL,
	`mileage`	INTEGER NOT NULL
);
COMMIT;
