Nội dung kiến thức:
	- Session trong PHP
	- Ứng dụng Cookie/Session/CSDL trong Authentication
		Mini Project: 
			Nguyen tac luu password:
				- Ko duoc luu mat khau tho
				- Ma hoa du lieu -> ma hoa 1 chieu
				bcrypt
					A -> A1
					  -> A2
					  -> A3
					  ...

					bruce force -> hack password -> table hash (vbuletin, phpbb -> md5)
			Login
				- Khi chưa login
				- Login thành công -> CHuyển sang trang Hiển thị danh sách người dùng
			Register
				- Khi chưa register
				- Login thành công -> CHuyển sang trang Hiển thị danh sách người dùng

			Hiển thị danh sách người -> Chỉ khi login thành công mới xem được
									 -> Chưa login -> Login.php
=======================================================================================
Mong muốn:
	Student: token -> varchar(32)

	Login.php
		- Kiểm tra nếu chưa login
			- Nhập dữ liệu Form
				- Kiểm tra thông
					- Đúng
						- gen token -> tính duy nhất (theo tài khoản, theo thời điểm)
						- Gửi token về client -> trình duyệt web
						- Lưu token vào student (token) -> Cho sinh viên tương ứng
					- Sai
						- Login.php
		- Đã login
			- Check login auto
				- Client -> server -> doc token (cookie) -> truy van trong database -> tuong ung vs ngươi dùng nào
					- Tộn tại bản ghi -> login tự động thành công
					- Ngược -> FAILED
			- show.php
			