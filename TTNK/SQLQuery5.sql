CREATE DATABASE TTNK2;
GO

/*TẠO BẢNG*/
 USE TTNK2;
 
 CREATE TABLE POSITION(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	name varchar(30),
	createdDate datetime,
	isActive tinyint,
)
go
CREATE TABLE ACCOUNT(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	accountName varchar(30),
	pass varchar(30),
	positionID INT REFERENCES POSITION(ID),
	createdDate datetime,
	isActive tinyint,
)  
go
 CREATE TABLE STUDENT(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	accountID INT  REFERENCES ACCOUNT(ID),
	name VARCHAR(30),
	age int,
	email varchar(50),
	sexual varchar(5),
	createdDate datetime,
	isActive tinyint,
)
go

CREATE TABLE LECTURER(
	ID int NOT NULL PRIMARY KEY,
	name varchar(30),
	age int,
	email varchar(50),
	sdt varchar(15),
	depict varchar(200),
	sexual varchar(5),
	photo image NULL,
	createdDate datetime,
	isActive tinyint,
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
go
CREATE TABLE CATEGORY(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	name varchar(30) ,
	createdDate datetime,
	isActive tinyint,
)
go
CREATE TABLE ACADEMIC_DISCIPLINE(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	name varchar(30),
	categoryID INT  REFERENCES CATEGORY(ID),
	depict varchar(200) ,
	photo image NULL,
	createdDate datetime,
	isActive tinyint,
)ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
go

CREATE TABLE CLASS(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	lecturerID INT REFERENCES LECTURER(ID),
    academicID INT REFERENCES ACADEMIC_DISCIPLINE(ID),
	startDay date,
	finishDay date,
	createdDate datetime,
	isActive tinyint,
)
CREATE TABLE STUDENT_CLASS (
	studentID INT REFERENCES STUDENT(ID),
	classID INT REFERENCES CLASS(ID),
	createdDate datetime,
	isActive tinyint,
)
go 

CREATE TABLE SIGN_UP(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	accountID INT REFERENCES ACCOUNT(ID),
    academic_disciplineID INT REFERENCES ACADEMIC_DISCIPLINE(ID),
	createdDate datetime,
	isActive tinyint,
)  
go


/* thêm dữ liệu vào bảng */
--position

INSERT INTO POSITION
	VALUES(N'Admin',GETDATE(),1);
INSERT INTO POSITION
	VALUES(N'User',GETDATE(),1);
--Account
INSERT INTO ACCOUNT
	VALUES(N'Admin',N'thuy1234',1,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'anhquan',N'quan1234',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'haianh',N'haianh1234',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'dinhdat',N'dat12345',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'anhthu',N'thu12345',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'minhtan',N'tan12345',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'trungbach',N'bach1234',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'khanhly',N'ly123456',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'tiendat',N'dat12345',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'minhhieu',N'hieu1234',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'trungkhanh',N'khanh1234',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'manhquan',N'quan1234',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'quocdat',N'dat12345',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'minhthu',N'thu12345',2,GETDATE(),1);
--student

INSERT INTO STUDENT
	VALUES(2,N'Nguyễn Anh Quân',17,N'nguyenanhquan@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(3,N'Phạm Hải Anh',16,N'phamhaianh@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(4,N'Trần Đình Đạt',19,N'trandinhdat@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(5,N'Nguyễn Trần Anh Thư',17,N'nguyentrananhthu@gmail.com',N'nữ',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(6,N'Nguyễn Minh Tân',20,N'nguyenminhtan@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(7,N'Phạm Trung Bách',18,N'phamtrungbach@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(8,N'Trần Thị Khánh Ly',17,N'tranthikhanhly@gmail.com',N'nữ',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(9,N'Trần Tiến Đạt',18,N'trantiendat@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(10,N'Phạm Minh Hiếu',21,N'phamminhhieu@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(11,N'Đỗ Trung Khánh',22,N'dotrungkhanh@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(12,N'Nguyễn Mạnh Quân',19,N'nguyenmanhquan@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(13,N'Trần Quốc Đạt',18,N'tranquocdat@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(14,N'Nguyễn Minh Thư',17,N'nguyenminhthu@gmail.com',N'nữ',GETDATE(),1);

--leturer

INSERT INTO [LECTURER](ID,name,age,email,sdt,depict,sexual,createdDate,isActive) 
	VALUES(1,N'Đặng Thị Yến Ngọc',31,N'dangthiyenngoc@gmail.com',N'0973829162',
	N'2002: Tốt nghiệp Cao Đẳng Nghệ Thuật Hà Nội 
      2008: Tốt nghiệp Cao Đẳng Múa Việt Nam – chuyên ngành diễn viên 
      2011: Tốt nghiệp Học viện Múa Việt Nam – chuyên ngành huấn luyện',
	N'nữ',GETDATE(),1)
	insert into [LECTURER](photo)
	SELECT * FROM OPENROWSET(BULK N'C:\Users\Mizics\Desktop\git\CongNgheWeb\img\gvDangThiYenNgoc.jpg', SINGLE_BLOB) AS img
	
-- category

INSERT INTO CATEGORY
	VALUES(N'Mỹ Thuật',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'Múa',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'Nhảy',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'Nhạc Cụ',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'Luyện Thanh',GETDATE(),1);

-- academic_discipline

--student
