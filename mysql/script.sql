---- Create the database
DROP DATABASE IF EXISTS Erehwon;
CREATE DATABASE Erehwon;
USE Erehwon;

---- Create tables
-- Create Branch table
CREATE TABLE Branch (
  sort_code CHAR(8),
  address VARCHAR(100),
  PRIMARY KEY(sort_code)
) ENGINE=InnoDB;

-- Create Account Type table
CREATE TABLE AccountType (
  name VARCHAR(40),
  interest_rate DECIMAL(4,2),
  PRIMARY KEY(name)
) ENGINE=InnoDB;

-- Create Account table
CREATE TABLE Account (
  account_number INT,
  balance DECIMAL(10,2),
  branch CHAR(8),
  type VARCHAR(40),
  PRIMARY KEY(account_number),
  FOREIGN KEY(branch) REFERENCES Branch(sort_code) ON DELETE SET NULL,
  FOREIGN KEY(type) REFERENCES AccountType(name) ON DELETE SET NULL
) ENGINE=InnoDB;

-- Create Loan table
CREATE TABLE Loan (
  loan_number INT,
  capital DECIMAL(10,2),
  balance DECIMAL(10,2),
  interest_rate DECIMAL(4,2),
  branch CHAR(8),
  PRIMARY KEY(loan_number),
  FOREIGN KEY(branch) REFERENCES Branch(sort_code) ON DELETE SET NULL
) ENGINE=InnoDB;

-- Create Customer table
CREATE TABLE Customer (
  customer_number INT,
  surname VARCHAR(40),
  initials VARCHAR(10),
  firstname VARCHAR(40),
  dob DATE,
  sex ENUM('M','F'),
  marital_status ENUM('single','married', 'divorced', 'widow/widower'),
  address VARCHAR(100),
  passwd VARCHAR(128),
  passphrase VARCHAR(128),
  PRIMARY KEY(customer_number)
) ENGINE=InnoDB;

-- Create Manager table
CREATE TABLE Manager (
  manager_number INT,
  surname VARCHAR(40),
  initials VARCHAR(10),
  firstname VARCHAR(40),
  address VARCHAR(100),
  passwd VARCHAR(128),
  passphrase VARCHAR(128),
  manages CHAR(8),
  FOREIGN KEY(manages) REFERENCES Branch(sort_code) ON DELETE CASCADE,
  PRIMARY KEY(manager_number)
) ENGINE=InnoDB;

-- Create Customer-'holds'-Account relation
CREATE TABLE CustomerAccount (
  customer_number INT,
  account_number INT,
  PRIMARY KEY(customer_number, account_number),
  FOREIGN KEY(customer_number) REFERENCES Customer(customer_number) ON DELETE CASCADE,
  FOREIGN KEY(account_number) REFERENCES Account(account_number) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Create Customer-'holds'-Loan relation
CREATE TABLE CustomerLoan (
  customer_number INT,
  loan_number INT,
  PRIMARY KEY(customer_number, loan_number),
  FOREIGN KEY(customer_number) REFERENCES Customer(customer_number) ON DELETE CASCADE,
  FOREIGN KEY(loan_number) REFERENCES Loan(loan_number) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Create Transactions table
CREATE TABLE Transactions (
  transaction_number INT,
  customer_number INT,
  transfer_amount DECIMAL(10,2),
  source_account INT,
  target_account INT,
  time_stamp DATETIME,
  PRIMARY KEY(transaction_number),
  FOREIGN KEY(customer_number) REFERENCES Customer(customer_number) ON DELETE CASCADE
) ENGINE=InnoDB;

---- Populate tables
-- Populate Branch - sort_code CHAR(8)
INSERT INTO Branch VALUES ("10-10-10", "Colchester");
INSERT INTO Branch VALUES ("10-10-11", "Ipswich");
INSERT INTO Branch VALUES ("10-10-12", "London");

-- Populate AccountType - name VARCHAR(40), interest_rate DECIMAL(4,2)
INSERT INTO AccountType VALUES ("Student", 0.02);
INSERT INTO AccountType VALUES ("Current", 0.01);
INSERT INTO AccountType VALUES ("Saver", 0.02);

-- Populate Account - account_number INT, balance DECIMAL(10,2), branch CHAR(8), type VARCHAR(40)
INSERT INTO Account VALUES (1111, 1000.00, "10-10-10", "Student");
INSERT INTO Account VALUES (2222, 100.00, "10-10-11", "Current");
INSERT INTO Account VALUES (3333, 10.00, "10-10-11", "Saver");
INSERT INTO Account VALUES (4444, 10000.00, "10-10-11", "Current");
INSERT INTO Account VALUES (5555, 0.10, "10-10-10", "Saver");
INSERT INTO Account VALUES (6666, 2500, "10-10-10", "Current");
INSERT INTO Account VALUES (7777, 2500, "10-10-10", "Saver");


-- Populate Loan - loan_number INT, amount DECIMAL(10,2), branch CHAR(8)
INSERT INTO Loan VALUES (4001, 1000.00, 850.00, 15.00, "10-10-11");
INSERT INTO Loan VALUES (4002, 100000.00, 91257.00, 6.50, "10-10-10");
INSERT INTO Loan VALUES (4003, 7500.00, 1248.00, 11.5, "10-10-10");
INSERT INTO Loan VALUES (4004, 10000.00, 2710.00, 11.5, "10-10-10");

-- Populate Customer - customer_number INT, surname VARCHAR(40), initials VARCHAR(10), firstname VARCHAR(40), dob DATE, sex ENUM('M','F'), marital_status ENUM('single','married', 'divorced', 'widow/widower'), address VARCHAR(100)
INSERT INTO Customer VALUES (1, "Smith", "", "John", '1950-01-01', 'M', 'married', "2 Avon Way, Colchester, CO4", MD5("John"), 'The Quick Brown Fox');
INSERT INTO Customer VALUES (2, "Smith", "", "Jane", '1951-01-01', 'F', 'married', "2 Avon Way, Colchester, CO4", MD5("Jane"),'The Elephants Child');
INSERT INTO Customer VALUES (3, "Smith", "", "Dave", '1988-01-01', 'M', 'single', "2 Avon Way, Colchester, CO4", MD5("D4v3"), 'Essex University');
INSERT INTO Customer VALUES (4, "Jones", "", "Sue", '1976-06-01', 'F', 'single', "142 Greenstead Road, Colchester, CO4", MD5("Susie"), 'Tangled Web');

-- Populate Manager - manager_number INT, surname VARCHAR(40), initials VARCHAR(10), firstname VARCHAR(40), address VARCHAR(100), passwd VARCHAR(32), manages CHAR(8)
INSERT INTO Manager VALUES (1, "O'Brian", "", "Dermot", "18 Forest Road, Colchester, CO4", MD5("Dermot"),'C0lchester' ,"10-10-10");
INSERT INTO Manager VALUES (2, "Jones", "", "Jack", "4 Rope Walk, Ipswich, IP2", MD5("Jack"),'1pswich' ,"10-10-11");
INSERT INTO Manager VALUES (3, "Jones", "", "David", "32 Ardleigh Avenue, Romford, RM9", MD5("David"),'L0nd0n' ,"10-10-12");

-- Populate CustomerAccount - customer_number INT, account_number INT
INSERT INTO CustomerAccount VALUES (3, 1111);
INSERT INTO CustomerAccount VALUES (1, 2222);
INSERT INTO CustomerAccount VALUES (1, 3333);
INSERT INTO CustomerAccount VALUES (2, 4444);
INSERT INTO CustomerAccount VALUES (3, 5555);
INSERT INTO CustomerAccount VALUES (4, 6666);
INSERT INTO CustomerAccount VALUES (4, 7777);

-- Populate CustomerLoan - customer_number INT, loan_number INT
INSERT INTO CustomerLoan VALUES (1, 4002);
INSERT INTO CustomerLoan VALUES (2, 4001);
INSERT INTO CustomerLoan VALUES (3, 4003);
INSERT INTO CustomerLoan VALUES (4, 4004);


-- Populate Transactions - transaction_number INT, customer_number INT, transfer_amount DECIMAL(10,2), source_account INT, target_account INT, time_stamp DATETIME
INSERT INTO Transactions VALUES (1, 1, 10.00, 2222, 3333, SUBDATE(NOW(), 1));



-- Create the JSP user
GRANT SELECT,INSERT,UPDATE,DELETE ON Erehwon.* TO 'JSP'@'localhost' IDENTIFIED BY 'obscure';
