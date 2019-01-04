CREATE DATABASE QLKhoaHocTTNK;
GO


/*TẠO BẢNG*/
 USE QLKhoaHocTTNK;
 
 CREATE TABLE POSITION(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	name varchar(30) NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL
)
go
CREATE TABLE ACCOUNT(
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

 CREATE TABLE STUDENT(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	accountID INT  REFERENCES ACCOUNT(ID) NOT NULL,
	name VARCHAR(30) NOT NULL,
	age int NOT NULL,
	email varchar(50) NOT NULL,
	phoneNumber varchar(15),
	paid int,
	owed int,
	sexual varchar(5),
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL
)
go

CREATE TABLE LECTURER(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	name varchar(30) NOT NULL,
	age int,
	email varchar(50) NOT NULL,
	phoneNumber varchar(15) NOT NULL,
	generalDescription varchar(500) NOT NULL,
	detailDescription varchar(500) NOT NULL,
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
CREATE TABLE subjects(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	name varchar(30) NOT NULL,
	categoryID INT  REFERENCES CATEGORY(ID) NOT NULL,
	[description] varchar(500) NOT NULL,
	[image] varchar(200) NOT NULL,
	price int NOT NULL,
	createDate datetime NOT NULL,
	isActive tinyint NOT NULL,
)
go

CREATE TABLE CLASS(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	lecturerID INT REFERENCES LECTURER(ID)NOT NULL,
    subjectID INT REFERENCES subjects(ID) NOT NULL,
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
	PRIMARY KEY (studentID,classID)
)
go 

CREATE TABLE SIGN_UP(
	ID INT IDENTITY(1,1) NOT NULL PRIMARY KEY,
	name varchar(50) NOT NULL,
	phoneNumber int NOT NULL,
	[status] varchar(50) NOT NULL,
    subjectID INT REFERENCES subjects(ID) NOT NULL,
	createdDate datetime NOT NULL,
	isActive tinyint NOT NULL,
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
INSERT INTO ACCOUNT
	VALUES(N'ngochai',N'hai12345',2,GETDATE(),1);
INSERT INTO ACCOUNT
	VALUES(N'ngocquynh',N'quynh1234',2,GETDATE(),1);
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
INSERT INTO STUDENT
	VALUES(15,N'Nguyễn Ngọc Hải',22,N'nguyenngochai@gmail.com',N'nam',GETDATE(),1);
INSERT INTO STUDENT
	VALUES(16,N'Phạm Ngọc Quỳnh',20,N'phamngocquynh@gmail.com',N'nữ',GETDATE(),1);
--leturer

INSERT INTO LECTURER 
	VALUES(N'Đặng Thị Yến Ngọc',31,N'dangthiyenngoc@gmail.com',N'0973829162',
	N'2002: Tốt nghiệp Cao Đẳng Nghệ Thuật Hà Nội.
      2008: Tốt nghiệp Cao Đẳng Múa Việt Nam – chuyên ngành diễn viên.
      2011: Tốt nghiệp Học viện Múa Việt Nam – chuyên ngành huấn luyện.',
	N'nữ',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2014/06/giao-vien-mua-ballet-dang-thi-yen-ngoc.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Vũ Thị Bích Thảo',26,N'vuthibichthao@gmail.com',N'0349866555',
	N'2012: Tốt nghiệp Cao Đẳng Múa Việt Nam – chuyên ngành múa dân gian dân tộc và múa ballet.
	2012: giảng viên múa – Trường trung cấp văn hóa nghệ thuật tỉnh Hưng Yên.
	Tham gia nhiều hội diễn múa trên toàn quốc: nghìn năm Thăng Long, Carnavan Hạ Long, Giỗ Tổ Hùng Vương…',
	N'nữ',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2015/05/Vu-thi-Bich-Thao.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Nguyễn Tiến Dũng',65,N'nguyentiendung@gmail.com',N'06374833048',
	N'Tốt nghiệp Đại học Mỹ Thuật Việt Nam – chyên ngành Mỹ thuật – Hội họa.
	1985 – 2014: Trưởng khoa Mỹ thuật – Hội họa Cung Thiếu Nhi Hà Nội.
    2014 – nay: giáo viên mỹ thuật Trung tâm Nghệ thuật Hoa Tâm',
	N'nam',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2015/05/hoa-si-giao-vien-Nguyen-Tien-Dung.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Lê Dung',54,N'ledung@gmail.com',N'0125387847',
	N'Tốt nghiệp Đại học Mỹ Thuật Hà Nội – chyên ngành Hội Họa (1989).
    Giảng viên trường Đại Học Mỹ Thuật Hà Nội.
	Tham gia các triển lãm thường kỳ của trường ĐH Mỹ Thuật, hội Mỹ Thuật Việt Nam, hội Mỹ Thuật Hà Nội.',
	N'nu',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2014/06/Le-Dung.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Kiều Thị Thu Hương',31,N'kieuthithuhuong@gmail.com',N'0983625432',
	N'Đại học sư phạm Nghệ thuật Trung Ương – Khoa sư phạm âm nhạc
    Đang theo học Cao học lý luận và phương pháp dạy học âm nhạc – ĐH Sư phạm Nghệ thuật Trung Ương.',
	N'nu',N'http://nghethuathoatam.com/hoatam/wp-content/uploads/2015/06/Kieu-thi-Thu-Huong.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Dancer Vân Hằng',29,N'dancevanhang@gmail.com',N'0478928392',
	N'Dancer Vân Hằng là giảng viên rất có kinh nghiệm trong việc hướng dẫn bộ môn Sexy Dance này tại các trung tâm dạy nhảy ở Hà Nội.
	 Vân Hằng hiện cũng là thành viên chính của nhóm nhảy cổ động cho đội bóng rổ chuyên nghiệp Hanoi Buffaloes',
	N'nu',N'http://a9.vietbao.vn/images/vn999/130/2014/11/20141107-thu-thuy-minh-thu-khoe-eo-con-kien-trong-phong-tap-1.jpg',GETDATE(),1);
INSERT INTO LECTURER 
	VALUES(N'Nguyễn Đức Hùng',35,N'nguyenduchung@gmail.com',N'02383283442',
	N'Tốt nghiệp Nhạc Viện Hà Nội.
Nhiều năm công tác tại Viện Âm Nhạc Quốc Gia,
Tham gia nhiều buổi trình diễn âm nhạc quốc tế,',
	N'nu',N'https://dayhocnhac.vn/wp-content/uploads/Nguyen-Duc-Hung.jpg',GETDATE(),1);

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
INSERT INTO subjects
	VALUES(N'Vẽ Phong Cảnh',1,N'Khóa Phong cảnh căn bản được thiết kế riêng biệt cho người không chuyên,
	 đảm bảo phương pháp và kiến thức giảng dạy sẽ phù hợp và hiệu quả với bạn.
	 Bạn sẽ được học vẽ hoàn chỉnh những bức tranh theo chủ đề Phong cảnh khác nhau.
	  Đây là bước đệm tốt để bạn có thể tự tiếp tục sáng tác tranh sau này,
	   hoặc theo các khóa học nâng cao hơn nếu bạn muốn chuyên sâu',
	   N'https://i.pinimg.com/originals/66/ae/8d/66ae8d662e5bc1d0170daf1fdabfd589.jpg',GETDATE(),1);
INSERT INTO subjects
	VALUES(N'Vẽ Màu Nước',1,N'Những bức tranh được vẽ bằng màu nước luôn khắc họa một cách sinh động và chân thực sự vật, hiện tượng, con người.
    Mỗi bức tranh màu nước như được thổi vào đó linh hồn của người họa sĩ.
    Bạn sẽ lần lượt được học về:
    Các họa cụ vẽ Màu nước, cách làm chủ chúng trong từng trường hợp
    Cách pha màu, hòa sắc, phối màu, tạo dải chuyển màu
    Vẽ theo từng chủ đề theo mảng đa dạng từ Chân dung đến Phong cảnh',
    N'https://mythuatbui.edu.vn/wp-content/uploads/2017/02/42167275_132409284380356_3614917571809116160_n.jpg',GETDATE(),1);
INSERT INTO subjects
	VALUES(N'Vẽ Chân Dung',1,N'Khóa học vẽ chân dung sẽ giúp bạn tìm hiểu về cấu tạo hình khối của con người,
	 về bố cục, tỉ lệ và tạo sao con người lại có người đẹp, người xấu.
     Từ đó, khóa học vẽ chân dung giúp bạn hoàn thiện kĩ năng tư duy, bố cục và hình khối cơ bản nhất.',
	 N'https://media.tuoitrethudo.com.vn/files/f3/files/1ngoquanganh/ve-tranh1.jpg',GETDATE(),1);
INSERT INTO subjects
	VALUES(N'Múa Ballet',2,N'Các bài múa giúp bạn trở nên nhanh nhẹn, hoạt bát hơn, thông qua các động tác nhảy, dãn căng, chạy, và thậm chí là đứng im.
    Bạn có khả năng cảm thụ nhuần nhuyễn về nhịp điệu, được rèn luyện khả năng tập trung và tự tin thể hiện trước đông người',
	 N'http://image.xahoi.com.vn/news/2013/8/15/64/IMGmuathaiha2jpg1376535481_have_logo_.jpg',GETDATE(),1);
INSERT INTO subjects
	VALUES(N'Múa Dân Gian',2,N'Mỗi tộc người đều có những điệu múa dân gian đặc trưng của mình.
	Múa dân gian được sử dụng rộng rãi trong sinh hoạt văn hoá cộng đồng.
	 Nó tiêu biểu cho bản sắc văn hoá của từng cộng động và là cơ sở để phát triển các hình thái múa khác.',
	 N'http://dangcongsan.vn/DATA/Upload/News/2012/11/MEN-TINH---THE-DUONG-CPV-(1).jpg',GETDATE(),1);
INSERT INTO subjects
	VALUES(N'Nhảy Hiện Đại',3,N'Nhảy hiện đại là môn học dạy những bài nhảy đơn giản, phong cách tự do theo cá tính của người biên đạo,
	 trên bất cứ nền nhạc nào, có thể sử dụng để minh họa cho ca sĩ hoặc diễn độc lập trên sân khấu, trên nền nhạc thị trường hiện nay.',
	 N'https://znews-photo.zadn.vn/w660/Uploaded/wyhktpu/2017_08_31/image005_4.jpg',GETDATE(),1);
INSERT INTO subjects
	VALUES(N'Khiêu Vũ',3,N'Khiêu vũ  là một bộ môn nghê thuật rất được giới trẻ yêu thích hiện nay,
	 đến với lớp học Kandy ngoài được học các vũ điệu Latin như: Chachacha, Rumba, Samba.... 
	 Các bạn còn được hòa mình vào những vũ điệu standard uyển chuyển như: Waltz, Tango, Quickstep, Slow foxtrot... 
	 và các vũ điệu khác như: Bachata, Salsa, Mambo.',
	 N'https://i.ytimg.com/vi/Ll60-98z_Ws/hqdefault.jpg',GETDATE(),1);
INSERT INTO subjects
	VALUES(N' Đàn Piano',4,N'Học đàn piano đang trở thành xu hướng khá phổ biến hiện nay, cùng với sự tăng trưởng của nền kinh tế,
	 con người đã dần quan tâm đến việc chăm lo đời sống tinh thần và học piano được xem là sự khởi đầu tốt nhất để làm phong phú đời sống tinh thần. 
	 Và để đáp ứng nhu cầu học đàn piano của những người yêu nhạc, nhiều khóa học piano được mở ra. ',
	 N'http://pianobrandnew.com/upload/news/noi-ban-dan-piano-o-tphcm-.jpg',GETDATE(),1);
INSERT INTO subjects
	VALUES(N' Đàn Violin',4,N'Violin hay vĩ cầm được cho là loại nhạc cụ khó chơi nhất trong những loại nhạc cụ phổ biến trên thị trường hiện nay.
	 Bởi vì để chơi được violin bạn cần có một sự cảm âm rất cao, bạn phải nhận biết được cao độ của các nốt, 
	 như vậy thì bạn mới có thể biết là mình có đang chơi chính xác nốt nhạc đó hay không...',
	 N'https://dayhocnhac.vn/wp-content/uploads/2018/06/1_257767-500x332.jpg',GETDATE(),1);
INSERT INTO subjects
	VALUES(N' Đàn Guitar',4,N'Guitar là một nhạc cụ không phải khó chơi những cũng không phải dễ để cảm nhận.
	Việc học Guitar cũng vậy, lúc đầu có thể bạn sẽ phải khổ luyện để quen với các nốt, các dây đàn, học cách đọc Tab, sheet rồi từ từ đánh được các bài cơ bản rồi nâng cao lên thành các bài khó hơn.',
	 N'https://atpsoftware.vn/wp-content/uploads/2017/10/22195283_1918178095172083_4487763707083133462_n.jpg',GETDATE(),1);
INSERT INTO subjects
	VALUES(N' Luyện Thanh',5,N'Âm nhạc là một bộ môn nghệ thuật dùng âm thanh để diễn đạt, bao gồm thanh nhạc và khí nhạc. 
	Khác với khí nhạc - âm nhạc dựa trên âm thanh của nhạc cụ thì thanh nhạc là âm nhạc dựa trên lời hát thể hện rõ ý tưởng xen lẫn cảm xúc con người.
	Và việc luyện thanh nhạc bài bản sẽ giúp giọng hát bạn thêm to khỏe và đầy nội lực. ',
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
-- trigger(mysql)
CREATE TRIGGER after_category_update 
AFTER UPDATE ON category
FOR EACH ROW 
UPDATE subjects SET isActive=0 WHERE category.ID= subjects.categoryID;