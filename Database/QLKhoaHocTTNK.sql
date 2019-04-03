

CREATE DATABASE giftedCenterMan;
GO
USE giftedCenterMan;

/*TẠO BẢNG*/
 
 
 CREATE TABLE Position(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	Name nvarchar(30) NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL
)
go
CREATE TABLE Account(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	accountName varchar(30) NOT NULL,
	[passWord] varchar(30) NOT NULL,
	positionID INT REFERENCES POSITION(ID) NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
	email varchar(50) NOT NULL,
	phoneNumber varchar(15) NOT NULL
)  
go

 CREATE TABLE Student(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	accountID INT  REFERENCES ACCOUNT(ID) NOT NULL,
	Name nvarchar(30) NOT NULL,
	Age int NOT NULL,
	Email varchar(50) NOT NULL,
	phoneNumber varchar(15),
	Paid int,
	Owed int,
	Sexual nvarchar(5),
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL
)
go

CREATE TABLE Lecturer(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	Name nvarchar(30) NOT NULL,
	Age int,
	Email varchar(50) NOT NULL,
	phoneNumber varchar(15) NOT NULL,
	generalDescription nvarchar(500) NOT NULL,
	detailDescription nvarchar(500) NOT NULL,
	Sexual nvarchar(5),
	[Image] nvarchar(200)NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
) 
go
CREATE TABLE GroupSubject(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	Name nvarchar(30) NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)

CREATE TABLE [Subject](
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	Name nvarchar(30) NOT NULL,
	categoryID INT  REFERENCES GroupSubject(ID) NOT NULL,
	[Description] varchar(500) NOT NULL,
	[Image] varchar(200) NOT NULL,
	Price int NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)
go

CREATE TABLE [Image](
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	subjectID int REFERENCES [Subject](ID) NOT NULL,
	Name nvarchar(30) NOT NULL,
	[Description] nvarchar,
	Content nvarchar NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)
go

CREATE TABLE [Video](
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	subjectID int REFERENCES [Subject](ID) NOT NULL,
	Name nvarchar(30) NOT NULL,
	[Description] nvarchar NOT NULL,
	Content nvarchar NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)
go

CREATE TABLE CLASS(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	lecturerID INT REFERENCES Lecturer(ID)NOT NULL,
    subjectID INT REFERENCES [Subject](ID) NOT NULL,
	startDay date NOT NULL,
	finishDay date NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)
CREATE TABLE Student_Class (
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY, 
	studentID INT REFERENCES Student(ID) NOT NULL,
	classID INT REFERENCES Class(ID) NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL
)
go 

CREATE TABLE SIGN_UP(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	Name nvarchar(50) NOT NULL,
	phoneNumber int NOT NULL,
	[Status] nvarchar(50) NOT NULL,
    subjectID INT REFERENCES [Subject](ID) NOT NULL,
	createdDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)  
go

