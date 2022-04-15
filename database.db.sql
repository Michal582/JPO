BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "car" (
	"plate"	TEXT NOT NULL,
	"brand"	TEXT NOT NULL,
	"mode"	TEXT NOT NULL,
	"year"	INTEGER NOT NULL,
	"mileage"	NUMERIC NOT NULL,
	PRIMARY KEY("plate")
);
CREATE TABLE IF NOT EXISTS "permission" (
	"id"	INTEGER NOT NULL,
	"perm"	TEXT NOT NULL,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "users" (
	"id"	INTEGER NOT NULL,
	"login"	TEXT NOT NULL,
	"passwd"	TEXT NOT NULL,
	"perm"	INTEGER NOT NULL DEFAULT 1,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "info" (
	"userID"	INTEGER NOT NULL,
	"firstname"	TEXT NOT NULL,
	"lastname"	TEXT NOT NULL,
	"address"	TEXT NOT NULL,
	"postcode"	TEXT NOT NULL,
	"city"	TEXT NOT NULL,
	"dln"	TEXT NOT NULL,
	"identifyNumber"	TEXT NOT NULL,
	PRIMARY KEY("userID" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "statuses" (
	"id"	INTEGER NOT NULL,
	"status"	TEXT,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "cars_status" (
	"plate"	TEXT NOT NULL,
	"status"	INTEGER NOT NULL DEFAULT 1,
	PRIMARY KEY("plate")
);
CREATE TABLE IF NOT EXISTS "workersCars" (
	"plate"	TEXT NOT NULL,
	"workerID"	INTEGER NOT NULL,
	PRIMARY KEY("plate")
);
CREATE TABLE IF NOT EXISTS "reservation" (
	"id"	INTEGER NOT NULL,
	"clientID"	INTEGER NOT NULL,
	"plate"	TEXT NOT NULL,
	"dateOfReturn"	TEXT NOT NULL,
	"addnotation"	TEXT,
	PRIMARY KEY("id" AUTOINCREMENT)
);
INSERT INTO "permission" ("id","perm") VALUES (1,'client');
INSERT INTO "permission" ("id","perm") VALUES (2,'worker');
INSERT INTO "permission" ("id","perm") VALUES (3,'admin');
INSERT INTO "statuses" ("id","status") VALUES (1,'free');
INSERT INTO "statuses" ("id","status") VALUES (2,'reserved');
INSERT INTO "statuses" ("id","status") VALUES (3,'rented');
COMMIT;
