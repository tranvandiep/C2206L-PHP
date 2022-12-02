Nội dung kiến thức trong buổi học hôm này
- Chữa bài tập:
	- GET/POST trong PHP
- Kết nối CSDL:
	- Môi trường phpmyadmin (mysql)
	- Ôn lại 1 chút về CSDL:
		Tạo tables
		fake 1/2 bản ghi
	- Chức năng: CRUD
		Thêm -> DONE
		Sửa -> Tự nghiên cưu
		Xoá
		Hiển thị danh sách sinh viên ->
========================================================
1) Thiet ke database
- tao CSDL -> C2206L
- tao table
create table students (
	id int primary key auto_increment,
	fullname varchar(50),
	email varchar(150),
	birthday date,
	address varchar(200)
)

2) Trien khai code:
- 