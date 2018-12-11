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


/* thêm d? li?u vào b?ng */
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
	VALUES(2,N'Nguy?n Anh Quân',17,N'nguyenanhquan@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(3,N'Ph?m H?i Anh',16,N'phamhaianh@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(4,N'Tr?n Ð?nh Ð?t',19,N'trandinhdat@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(5,N'Nguy?n Tr?n Anh Thý',17,N'nguyentrananhthu@gmail.com',N'n?',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(6,N'Nguy?n Minh Tân',20,N'nguyenminhtan@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(7,N'Ph?m Trung Bách',18,N'phamtrungbach@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(8,N'Tr?n Th? Khánh Ly',17,N'tranthikhanhly@gmail.com',N'n?',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(9,N'Tr?n Ti?n Ð?t',18,N'trantiendat@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(10,N'Ph?m Minh Hi?u',21,N'phamminhhieu@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(11,N'Ð? Trung Khánh',22,N'dotrungkhanh@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(12,N'Nguy?n M?nh Quân',19,N'nguyenmanhquan@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(13,N'Tr?n Qu?c Ð?t',18,N'tranquocdat@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(14,N'Nguy?n Minh Thý',17,N'nguyenminhthu@gmail.com',N'n?',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(15,N'Nguy?n Ng?c H?i',22,N'nguyenngochai@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(16,N'Ph?m Ng?c Qu?nh',20,N'phamngocquynh@gmail.com',N'n?',GETDATE(),1);
--leturer

INSERT INTO LECTURER 
	VALUES(N'Ð?ng Th? Y?n Ng?c',31,N'dangthiyenngoc@gmail.com',N'0973829162',
	N'2002: T?t nghi?p Cao Ð?ng Ngh? Thu?t Hà N?i.
      2008: T?t nghi?p Cao Ð?ng Múa Vi?t Nam – chuyên ngành di?n viên.
      2011: T?t nghi?p H?c vi?n Múa Vi?t Nam – chuyên ngành hu?n luy?n.',
	N'n?',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2014/06/giao-vien-mua-ballet-dang-thi-yen-ngoc.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'V? Th? Bích Th?o',26,N'vuthibichthao@gmail.com',N'0349866555',
	N'2012: T?t nghi?p Cao Ð?ng Múa Vi?t Nam – chuyên ngành múa dân gian dân t?c và múa ballet.
	2012: gi?ng viên múa – Trý?ng trung c?p vãn hóa ngh? thu?t t?nh Hýng Yên.
	Tham gia nhi?u h?i di?n múa trên toàn qu?c: ngh?n nãm Thãng Long, Carnavan H? Long, Gi? T? Hùng Výõng…',
	N'n?',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2015/05/Vu-thi-Bich-Thao.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Nguy?n Ti?n D?ng',65,N'nguyentiendung@gmail.com',N'06374833048',
	N'T?t nghi?p Ð?i h?c M? Thu?t Vi?t Nam – chyên ngành M? thu?t – H?i h?a.
	1985 – 2014: Trý?ng khoa M? thu?t – H?i h?a Cung Thi?u Nhi Hà N?i.
    2014 – nay: giáo viên m? thu?t Trung tâm Ngh? thu?t Hoa Tâm',
	N'nam',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2015/05/hoa-si-giao-vien-Nguyen-Tien-Dung.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Lê Dung',54,N'ledung@gmail.com',N'0125387847',
	N'T?t nghi?p Ð?i h?c M? Thu?t Hà N?i – chyên ngành H?i H?a (1989).
    Gi?ng viên trý?ng Ð?i H?c M? Thu?t Hà N?i.
	Tham gia các tri?n l?m thý?ng k? c?a trý?ng ÐH M? Thu?t, h?i M? Thu?t Vi?t Nam, h?i M? Thu?t Hà N?i.',
	N'nu',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2014/06/Le-Dung.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Ki?u Th? Thu Hýõng',31,N'kieuthithuhuong@gmail.com',N'0983625432',
	N'Ð?i h?c sý ph?m Ngh? thu?t Trung Ýõng – Khoa sý ph?m âm nh?c
    Ðang theo h?c Cao h?c l? lu?n và phýõng pháp d?y h?c âm nh?c – ÐH Sý ph?m Ngh? thu?t Trung Ýõng.',
	N'nu',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2015/06/Kieu-thi-Thu-Huong.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Dancer Vân H?ng',29,N'dancevanhang@gmail.com',N'0478928392',
	N'Dancer Vân H?ng là gi?ng viên r?t có kinh nghi?m trong vi?c hý?ng d?n b? môn Sexy Dance này t?i các trung tâm d?y nh?y ? Hà N?i.
	 Vân H?ng hi?n c?ng là thành viên chính c?a nhóm nh?y c? ð?ng cho ð?i bóng r? chuyên nghi?p Hanoi Buffaloes',
	N'nu',N'http://a9.vietbao.vn/images/vn999/130/2014/11/20141107-thu-thuy-minh-thu-khoe-eo-con-kien-trong-phong-tap-1.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Nguy?n Ð?c Hùng',35,N'nguyenduchung@gmail.com',N'02383283442',
	N'T?t nghi?p Nh?c Vi?n Hà N?i.
Nhi?u nãm công tác t?i Vi?n Âm Nh?c Qu?c Gia,
Tham gia nhi?u bu?i tr?nh di?n âm nh?c qu?c t?,',
	N'nu',N'https://dayhocnhac.vn/wp-content/uploads/Nguyen-Duc-Hung.jpg',GETDATE(),1);

-- category

INSERT INTO CATEGORY
	VALUES(N'M? Thu?t',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'Múa',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'Nh?y',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'Nh?c C?',GETDATE(),1);
INSERT INTO CATEGORY
	VALUES(N'Luy?n Thanh',GETDATE(),1);

-- academic_discipline
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'V? Phong C?nh',1,N'Khóa Phong c?nh cãn b?n ðý?c thi?t k? riêng bi?t cho ngý?i không chuyên,
	 ð?m b?o phýõng pháp và ki?n th?c gi?ng d?y s? phù h?p và hi?u qu? v?i b?n.
	 B?n s? ðý?c h?c v? hoàn ch?nh nh?ng b?c tranh theo ch? ð? Phong c?nh khác nhau.
	  Ðây là bý?c ð?m t?t ð? b?n có th? t? ti?p t?c sáng tác tranh sau này,
	   ho?c theo các khóa h?c nâng cao hõn n?u b?n mu?n chuyên sâu',
	   N'https://i.pinimg.com/originals/66/ae/8d/66ae8d662e5bc1d0170daf1fdabfd589.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'V? Màu Ný?c',1,N'Nh?ng b?c tranh ðý?c v? b?ng màu ný?c luôn kh?c h?a m?t cách sinh ð?ng và chân th?c s? v?t, hi?n tý?ng, con ngý?i.
    M?i b?c tranh màu ný?c nhý ðý?c th?i vào ðó linh h?n c?a ngý?i h?a s?.
    B?n s? l?n lý?t ðý?c h?c v?:
    Các h?a c? v? Màu ný?c, cách làm ch? chúng trong t?ng trý?ng h?p
    Cách pha màu, h?a s?c, ph?i màu, t?o d?i chuy?n màu
    V? theo t?ng ch? ð? theo m?ng ða d?ng t? Chân dung ð?n Phong c?nh',
    N'https://mythuatbui.edu.vn/wp-content/uploads/2017/02/42167275_132409284380356_3614917571809116160_n.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'V? Chân Dung',1,N'Khóa h?c v? chân dung s? giúp b?n t?m hi?u v? c?u t?o h?nh kh?i c?a con ngý?i,
	 v? b? c?c, t? l? và t?o sao con ngý?i l?i có ngý?i ð?p, ngý?i x?u.
     T? ðó, khóa h?c v? chân dung giúp b?n hoàn thi?n k? nãng tý duy, b? c?c và h?nh kh?i cõ b?n nh?t.',
	 N'https://media.tuoitrethudo.com.vn/files/f3/files/1ngoquanganh/ve-tranh1.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'Múa Ballet',2,N'Các bài múa giúp b?n tr? nên nhanh nh?n, ho?t bát hõn, thông qua các ð?ng tác nh?y, d?n cãng, ch?y, và th?m chí là ð?ng im.
    B?n có kh? nãng c?m th? nhu?n nhuy?n v? nh?p ði?u, ðý?c rèn luy?n kh? nãng t?p trung và t? tin th? hi?n trý?c ðông ngý?i',
	 N'http://image.xahoi.com.vn/news/2013/8/15/64/IMGmuathaiha2jpg1376535481_have_logo_.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'Múa Dân Gian',2,N'M?i t?c ngý?i ð?u có nh?ng ði?u múa dân gian ð?c trýng c?a m?nh.
	Múa dân gian ðý?c s? d?ng r?ng r?i trong sinh ho?t vãn hoá c?ng ð?ng.
	 Nó tiêu bi?u cho b?n s?c vãn hoá c?a t?ng c?ng ð?ng và là cõ s? ð? phát tri?n các h?nh thái múa khác.',
	 N'http://dangcongsan.vn/DATA/Upload/News/2012/11/MEN-TINH---THE-DUONG-CPV-(1).jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'Nh?y Hi?n Ð?i',3,N'Nh?y hi?n ð?i là môn h?c d?y nh?ng bài nh?y ðõn gi?n, phong cách t? do theo cá tính c?a ngý?i biên ð?o,
	 trên b?t c? n?n nh?c nào, có th? s? d?ng ð? minh h?a cho ca s? ho?c di?n ð?c l?p trên sân kh?u, trên n?n nh?c th? trý?ng hi?n nay.',
	 N'https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2017_08_31/image005_4.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N'Khiêu V?',3,N'Khiêu v?  là m?t b? môn nghê thu?t r?t ðý?c gi?i tr? yêu thích hi?n nay,
	 ð?n v?i l?p h?c Kandy ngoài ðý?c h?c các v? ði?u Latin nhý: Chachacha, Rumba, Samba.... 
	 Các b?n c?n ðý?c h?a m?nh vào nh?ng v? ði?u standard uy?n chuy?n nhý: Waltz, Tango, Quickstep, Slow foxtrot... 
	 và các v? ði?u khác nhý: Bachata, Salsa, Mambo.',
	 N'https://i.ytimg.com/vi/Ll60-98z_Ws/hqdefault.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N' Ðàn Piano',4,N'H?c ðàn piano ðang tr? thành xu hý?ng khá ph? bi?n hi?n nay, cùng v?i s? tãng trý?ng c?a n?n kinh t?,
	 con ngý?i ð? d?n quan tâm ð?n vi?c chãm lo ð?i s?ng tinh th?n và h?c piano ðý?c xem là s? kh?i ð?u t?t nh?t ð? làm phong phú ð?i s?ng tinh th?n. 
	 Và ð? ðáp ?ng nhu c?u h?c ðàn piano c?a nh?ng ngý?i yêu nh?c, nhi?u khóa h?c piano ðý?c m? ra. ',
	 N'http://pianobrandnew.com/upload/news/noi-ban-dan-piano-o-tphcm-.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N' Ðàn Violin',4,N'Violin hay v? c?m ðý?c cho là lo?i nh?c c? khó chõi nh?t trong nh?ng lo?i nh?c c? ph? bi?n trên th? trý?ng hi?n nay.
	 B?i v? ð? chõi ðý?c violin b?n c?n có m?t s? c?m âm r?t cao, b?n ph?i nh?n bi?t ðý?c cao ð? c?a các n?t, 
	 nhý v?y th? b?n m?i có th? bi?t là m?nh có ðang chõi chính xác n?t nh?c ðó hay không...',
	 N'https://dayhocnhac.vn/wp-content/uploads/2018/06/1_257767-500x332.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N' Ðàn Guitar',4,N'Guitar là m?t nh?c c? không ph?i khó chõi nh?ng c?ng không ph?i d? ð? c?m nh?n.
	Vi?c h?c Guitar c?ng v?y, lúc ð?u có th? b?n s? ph?i kh? luy?n ð? quen v?i các n?t, các dây ðàn, h?c cách ð?c Tab, sheet r?i t? t? ðánh ðý?c các bài cõ b?n r?i nâng cao lên thành các bài khó hõn.',
	 N'https://atpsoftware.vn/wp-content/uploads/2017/10/22195283_1918178095172083_4487763707083133462_n.jpg',GETDATE(),1);
INSERT INTO ACADEMIC_DISCIPLINE
	VALUES(N' Luy?n Thanh',5,N'Âm nh?c là m?t b? môn ngh? thu?t dùng âm thanh ð? di?n ð?t, bao g?m thanh nh?c và khí nh?c. 
	Khác v?i khí nh?c - âm nh?c d?a trên âm thanh c?a nh?c c? th? thanh nh?c là âm nh?c d?a trên l?i hát th? h?n r? ? tý?ng xen l?n c?m xúc con ngý?i.
	Và vi?c luy?n thanh nh?c bài b?n s? giúp gi?ng hát b?n thêm to kh?e và ð?y n?i l?c. ',
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
