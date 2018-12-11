CREATE DATABASE QLKhoaHocTTNK;
GO

/*T?O B?NG*/
 USE QLKhoaHocTTNK;
 
 CREATE TABLE POSITION(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	name varchar(30) NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)
go
CREATE TABLE ACCOUNT(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	accountName varchar(30) NOT NULL,
	[passWord] varchar(30) NOT NULL,
	positionID INT REFERENCES POSITION(ID) NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)  
go
 CREATE TABLE STUDENT(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	accountID INT  REFERENCES ACCOUNT(ID) NOT NULL,
	name VARCHAR(30) NOT NULL,
	age int NOT NULL,
	email varchar(50) NOT NULL,
	sexual varchar(5) ,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)
go

CREATE TABLE LECTURER(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	name varchar(30) NOT NULL,
	age int,
	email varchar(50) NOT NULL,
	sdt varchar(15) NOT NULL,
	depict varchar(500) NOT NULL,
	sexual varchar(5),
	photo varchar(200)NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
) 
go
CREATE TABLE CATEGORY(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	name varchar(30) NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)
go
CREATE TABLE ACADEMIC_DISCIPLINE(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	name varchar(30) NOT NULL,
	categoryID INT  REFERENCES CATEGORY(ID) NOT NULL,
	depict varchar(500) NOT NULL,
	photo varchar(200),
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)
go

CREATE TABLE CLASS(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	lecturerID INT REFERENCES LECTURER(ID)NOT NULL,
    academicID INT REFERENCES ACADEMIC_DISCIPLINE(ID) NOT NULL,
	startDay date NOT NULL,
	finishDay date NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)
CREATE TABLE STUDENT_CLASS (
	studentID INT REFERENCES STUDENT(ID) NOT NULL,
	classID INT REFERENCES CLASS(ID) NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)
go 

CREATE TABLE SIGN_UP(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	accountID INT REFERENCES ACCOUNT(ID) NOT NULL,
    academic_disciplineID INT REFERENCES ACADEMIC_DISCIPLINE(ID) NOT NULL,
	createdDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)  
go


/* th�m d? li?u v�o b?ng */
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
INSERT INTO ACCOUNT
	VALUES(N'ngochai',N'hai12345',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'ngocquynh',N'quynh1234',2,GETDATE(),1);
--student

INSERT INTO STUDENT
	VALUES(2,N'Nguy?n Anh Qu�n',17,N'nguyenanhquan@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(3,N'Ph?m H?i Anh',16,N'phamhaianh@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(4,N'Tr?n �?nh �?t',19,N'trandinhdat@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(5,N'Nguy?n Tr?n Anh Th�',17,N'nguyentrananhthu@gmail.com',N'n?',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(6,N'Nguy?n Minh T�n',20,N'nguyenminhtan@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(7,N'Ph?m Trung B�ch',18,N'phamtrungbach@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(8,N'Tr?n Th? Kh�nh Ly',17,N'tranthikhanhly@gmail.com',N'n?',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(9,N'Tr?n Ti?n �?t',18,N'trantiendat@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(10,N'Ph?m Minh Hi?u',21,N'phamminhhieu@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(11,N'�? Trung Kh�nh',22,N'dotrungkhanh@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(12,N'Nguy?n M?nh Qu�n',19,N'nguyenmanhquan@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(13,N'Tr?n Qu?c �?t',18,N'tranquocdat@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(14,N'Nguy?n Minh Th�',17,N'nguyenminhthu@gmail.com',N'n?',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(15,N'Nguy?n Ng?c H?i',22,N'nguyenngochai@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(16,N'Ph?m Ng?c Qu?nh',20,N'phamngocquynh@gmail.com',N'n?',GETDATE(),1);
--leturer

INSERT INTO LECTURER 
	VALUES(N'�?ng Th? Y?n Ng?c',31,N'dangthiyenngoc@gmail.com',N'0973829162',
	N'2002: T?t nghi?p Cao �?ng Ngh? Thu?t H� N?i.
      2008: T?t nghi?p Cao �?ng M�a Vi?t Nam � chuy�n ng�nh di?n vi�n.
      2011: T?t nghi?p H?c vi?n M�a Vi?t Nam � chuy�n ng�nh hu?n luy?n.',
	N'n?',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2014/06/giao-vien-mua-ballet-dang-thi-yen-ngoc.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'V? Th? B�ch Th?o',26,N'vuthibichthao@gmail.com',N'0349866555',
	N'2012: T?t nghi?p Cao �?ng M�a Vi?t Nam � chuy�n ng�nh m�a d�n gian d�n t?c v� m�a ballet.
	2012: gi?ng vi�n m�a � Tr�?ng trung c?p v�n h�a ngh? thu?t t?nh H�ng Y�n.
	Tham gia nhi?u h?i di?n m�a tr�n to�n qu?c: ngh?n n�m Th�ng Long, Carnavan H? Long, Gi? T? H�ng V��ng�',
	N'n?',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2015/05/Vu-thi-Bich-Thao.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Nguy?n Ti?n D?ng',65,N'nguyentiendung@gmail.com',N'06374833048',
	N'T?t nghi?p �?i h?c M? Thu?t Vi?t Nam � chy�n ng�nh M? thu?t � H?i h?a.
	1985 � 2014: Tr�?ng khoa M? thu?t � H?i h?a Cung Thi?u Nhi H� N?i.
    2014 � nay: gi�o vi�n m? thu?t Trung t�m Ngh? thu?t Hoa T�m',
	N'nam',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2015/05/hoa-si-giao-vien-Nguyen-Tien-Dung.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'L� Dung',54,N'ledung@gmail.com',N'0125387847',
	N'T?t nghi?p �?i h?c M? Thu?t H� N?i � chy�n ng�nh H?i H?a (1989).
    Gi?ng vi�n tr�?ng �?i H?c M? Thu?t H� N?i.
	Tham gia c�c tri?n l?m th�?ng k? c?a tr�?ng �H M? Thu?t, h?i M? Thu?t Vi?t Nam, h?i M? Thu?t H� N?i.',
	N'nu',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2014/06/Le-Dung.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Ki?u Th? Thu H��ng',31,N'kieuthithuhuong@gmail.com',N'0983625432',
	N'�?i h?c s� ph?m Ngh? thu?t Trung ��ng � Khoa s� ph?m �m nh?c
    �ang theo h?c Cao h?c l? lu?n v� ph��ng ph�p d?y h?c �m nh?c � �H S� ph?m Ngh? thu?t Trung ��ng.',
	N'nu',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2015/06/Kieu-thi-Thu-Huong.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Dancer V�n H?ng',29,N'dancevanhang@gmail.com',N'0478928392',
	N'Dancer V�n H?ng l� gi?ng vi�n r?t c� kinh nghi?m trong vi?c h�?ng d?n b? m�n Sexy Dance n�y t?i c�c trung t�m d?y nh?y ? H� N?i.
	 V�n H?ng hi?n c?ng l� th�nh vi�n ch�nh c?a nh�m nh?y c? �?ng cho �?i b�ng r? chuy�n nghi?p Hanoi Buffaloes',
	N'nu',N'http://a9.vietbao.vn/images/vn999/130/2014/11/20141107-thu-thuy-minh-thu-khoe-eo-con-kien-trong-phong-tap-1.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Nguy?n �?c H�ng',35,N'nguyenduchung@gmail.com',N'02383283442',
	N'T?t nghi?p Nh?c Vi?n H� N?i.
Nhi?u n�m c�ng t�c t?i Vi?n �m Nh?c Qu?c Gia,
Tham gia nhi?u bu?i tr?nh di?n �m nh?c qu?c t?,',
	N'nu',N'https://dayhocnhac.vn/wp-content/uploads/Nguyen-Duc-Hung.jpg',GETDATE(),1);

-- category

INSERT INTO CATEGORY
	VALUES(N'M? Thu?t',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'M�a',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'Nh?y',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'Nh?c C?',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'Luy?n Thanh',GETDATE(),1);

-- academic_discipline
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'V? Phong C?nh',1,N'Kh�a Phong c?nh c�n b?n ��?c thi?t k? ri�ng bi?t cho ng�?i kh�ng chuy�n,
	 �?m b?o ph��ng ph�p v� ki?n th?c gi?ng d?y s? ph� h?p v� hi?u qu? v?i b?n.
	 B?n s? ��?c h?c v? ho�n ch?nh nh?ng b?c tranh theo ch? �? Phong c?nh kh�c nhau.
	  ��y l� b�?c �?m t?t �? b?n c� th? t? ti?p t?c s�ng t�c tranh sau n�y,
	   ho?c theo c�c kh�a h?c n�ng cao h�n n?u b?n mu?n chuy�n s�u',
	   N'https://i.pinimg.com/originals/66/ae/8d/66ae8d662e5bc1d0170daf1fdabfd589.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'V? M�u N�?c',1,N'Nh?ng b?c tranh ��?c v? b?ng m�u n�?c lu�n kh?c h?a m?t c�ch sinh �?ng v� ch�n th?c s? v?t, hi?n t�?ng, con ng�?i.
    M?i b?c tranh m�u n�?c nh� ��?c th?i v�o �� linh h?n c?a ng�?i h?a s?.
    B?n s? l?n l�?t ��?c h?c v?:
    C�c h?a c? v? M�u n�?c, c�ch l�m ch? ch�ng trong t?ng tr�?ng h?p
    C�ch pha m�u, h?a s?c, ph?i m�u, t?o d?i chuy?n m�u
    V? theo t?ng ch? �? theo m?ng �a d?ng t? Ch�n dung �?n Phong c?nh',
    N'https://mythuatbui.edu.vn/wp-content/uploads/2017/02/42167275_132409284380356_3614917571809116160_n.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'V? Ch�n Dung',1,N'Kh�a h?c v? ch�n dung s? gi�p b?n t?m hi?u v? c?u t?o h?nh kh?i c?a con ng�?i,
	 v? b? c?c, t? l? v� t?o sao con ng�?i l?i c� ng�?i �?p, ng�?i x?u.
     T? ��, kh�a h?c v? ch�n dung gi�p b?n ho�n thi?n k? n�ng t� duy, b? c?c v� h?nh kh?i c� b?n nh?t.',
	 N'https://media.tuoitrethudo.com.vn/files/f3/files/1ngoquanganh/ve-tranh1.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'M�a Ballet',2,N'C�c b�i m�a gi�p b?n tr? n�n nhanh nh?n, ho?t b�t h�n, th�ng qua c�c �?ng t�c nh?y, d?n c�ng, ch?y, v� th?m ch� l� �?ng im.
    B?n c� kh? n�ng c?m th? nhu?n nhuy?n v? nh?p �i?u, ��?c r�n luy?n kh? n�ng t?p trung v� t? tin th? hi?n tr�?c ��ng ng�?i',
	 N'http://image.xahoi.com.vn/news/2013/8/15/64/IMGmuathaiha2jpg1376535481_have_logo_.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'M�a D�n Gian',2,N'M?i t?c ng�?i �?u c� nh?ng �i?u m�a d�n gian �?c tr�ng c?a m?nh.
	M�a d�n gian ��?c s? d?ng r?ng r?i trong sinh ho?t v�n ho� c?ng �?ng.
	 N� ti�u bi?u cho b?n s?c v�n ho� c?a t?ng c?ng �?ng v� l� c� s? �? ph�t tri?n c�c h?nh th�i m�a kh�c.',
	 N'http://dangcongsan.vn/DATA/Upload/News/2012/11/MEN-TINH---THE-DUONG-CPV-(1).jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'Nh?y Hi?n �?i',3,N'Nh?y hi?n �?i l� m�n h?c d?y nh?ng b�i nh?y ��n gi?n, phong c�ch t? do theo c� t�nh c?a ng�?i bi�n �?o,
	 tr�n b?t c? n?n nh?c n�o, c� th? s? d?ng �? minh h?a cho ca s? ho?c di?n �?c l?p tr�n s�n kh?u, tr�n n?n nh?c th? tr�?ng hi?n nay.',
	 N'https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2017_08_31/image005_4.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'Khi�u V?',3,N'Khi�u v?  l� m?t b? m�n ngh� thu?t r?t ��?c gi?i tr? y�u th�ch hi?n nay,
	 �?n v?i l?p h?c Kandy ngo�i ��?c h?c c�c v? �i?u Latin nh�: Chachacha, Rumba, Samba.... 
	 C�c b?n c?n ��?c h?a m?nh v�o nh?ng v? �i?u standard uy?n chuy?n nh�: Waltz, Tango, Quickstep, Slow foxtrot... 
	 v� c�c v? �i?u kh�c nh�: Bachata, Salsa, Mambo.',
	 N'https://i.ytimg.com/vi/Ll60-98z_Ws/hqdefault.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N' ��n Piano',4,N'H?c ��n piano �ang tr? th�nh xu h�?ng kh� ph? bi?n hi?n nay, c�ng v?i s? t�ng tr�?ng c?a n?n kinh t?,
	 con ng�?i �? d?n quan t�m �?n vi?c ch�m lo �?i s?ng tinh th?n v� h?c piano ��?c xem l� s? kh?i �?u t?t nh?t �? l�m phong ph� �?i s?ng tinh th?n. 
	 V� �? ��p ?ng nhu c?u h?c ��n piano c?a nh?ng ng�?i y�u nh?c, nhi?u kh�a h?c piano ��?c m? ra. ',
	 N'http://pianobrandnew.com/upload/news/noi-ban-dan-piano-o-tphcm-.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N' ��n Violin',4,N'Violin hay v? c?m ��?c cho l� lo?i nh?c c? kh� ch�i nh?t trong nh?ng lo?i nh?c c? ph? bi?n tr�n th? tr�?ng hi?n nay.
	 B?i v? �? ch�i ��?c violin b?n c?n c� m?t s? c?m �m r?t cao, b?n ph?i nh?n bi?t ��?c cao �? c?a c�c n?t, 
	 nh� v?y th? b?n m?i c� th? bi?t l� m?nh c� �ang ch�i ch�nh x�c n?t nh?c �� hay kh�ng...',
	 N'https://dayhocnhac.vn/wp-content/uploads/2018/06/1_257767-500x332.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N' ��n Guitar',4,N'Guitar l� m?t nh?c c? kh�ng ph?i kh� ch�i nh?ng c?ng kh�ng ph?i d? �? c?m nh?n.
	Vi?c h?c Guitar c?ng v?y, l�c �?u c� th? b?n s? ph?i kh? luy?n �? quen v?i c�c n?t, c�c d�y ��n, h?c c�ch �?c Tab, sheet r?i t? t? ��nh ��?c c�c b�i c� b?n r?i n�ng cao l�n th�nh c�c b�i kh� h�n.',
	 N'https://atpsoftware.vn/wp-content/uploads/2017/10/22195283_1918178095172083_4487763707083133462_n.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N' Luy?n Thanh',5,N'�m nh?c l� m?t b? m�n ngh? thu?t d�ng �m thanh �? di?n �?t, bao g?m thanh nh?c v� kh� nh?c. 
	Kh�c v?i kh� nh?c - �m nh?c d?a tr�n �m thanh c?a nh?c c? th? thanh nh?c l� �m nh?c d?a tr�n l?i h�t th? h?n r? ? t�?ng xen l?n c?m x�c con ng�?i.
	V� vi?c luy?n thanh nh?c b�i b?n s? gi�p gi?ng h�t b?n th�m to kh?e v� �?y n?i l?c. ',
	 N'http://sohanews.sohacdn.com/thumb_w/660/2017/120112858505970683884851492929157268681803n-1508016778033-32-0-628-960-crop-1508016819759.jpg',GETDATE(),1);
--class
INSERT INTO CLASS
	VALUES(1,1,'2018/12/01','2019/1/30',GETDATE(),1);
INSERT INTO CLASS
	VALUES(2,2,'2018/11/01','2019/01/30',GETDATE(),1);
INSERT INTO CLASS
	VALUES(2,3,'2019/01/01','2019/02/15',GETDATE(),1);
INSERT INTO CLASS
	VALUES(3,5,'2018/12/01','2019/02/16',GETDATE(),1);
INSERT INTO CLASS
	VALUES(4,4,'2018/10/01','2019/01/30',GETDATE(),1);
INSERT INTO CLASS
	VALUES(5,7,'2018/12/15','2019/03/15',GETDATE(),1);
INSERT INTO CLASS
	VALUES(5,8,'2018/11/01','2019/01/30',GETDATE(),1);
INSERT INTO CLASS
	VALUES(6,6,'2019/1/01','2019/03/30',GETDATE(),1);
INSERT INTO CLASS
	VALUES(6,7,'2018/10/01','2019/01/30',GETDATE(),1);
INSERT INTO CLASS
	VALUES(7,9,'2018/11/01','2019/01/10',GETDATE(),1);
INSERT INTO CLASS
	VALUES(7,10,'2018/12/15','2019/03/30',GETDATE(),1);
--student-class

INSERT INTO STUDENT_CLASS
	VALUES(1,1,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(2,1,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(3,1,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(4,1,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(5,1,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(6,1,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(4,2,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(5,2,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(6,2,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(7,2,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(8,2,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(9,2,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(10,2,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(8,3,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(9,3,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(10,3,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(11,3,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(12,3,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(13,3,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(10,4,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(11,4,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(12,4,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(13,4,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(1,4,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(2,4,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(3,4,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(4,4,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(3,5,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(4,5,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(5,5,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(6,5,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(7,5,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(8,5,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(9,5,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(7,6,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(8,6,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(9,6,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(10,6,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(11,6,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(12,6,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(13,6,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(1,6,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(1,7,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(2,7,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(3,7,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(4,7,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(5,7,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(6,7,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(4,8,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(5,8,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(6,8,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(7,8,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(8,8,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(9,8,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(10,8,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(7,9,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(8,9,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(9,9,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(10,9,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(11,9,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(12,9,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(13,9,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(11,10,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(12,10,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(13,10,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(1,10,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(2,10,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(3,10,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(4,10,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(1,11,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(2,11,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(3,11,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(4,11,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(5,11,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(6,11,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(7,11,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(8,11,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(9,11,GETDATE(),1);
INSERT INTO STUDENT_CLASS
	VALUES(10,11,GETDATE(),1);
--sign_up
INSERT INTO SIGN_UP
	VALUES(14,5,GETDATE(),1);
INSERT INTO SIGN_UP
	VALUES(15,5,GETDATE(),1);
INSERT INTO SIGN_UP
	VALUES(14,3,GETDATE(),1);
INSERT INTO SIGN_UP
	VALUES(15,6,GETDATE(),1);
INSERT INTO SIGN_UP
	VALUES(14,1,GETDATE(),1);
