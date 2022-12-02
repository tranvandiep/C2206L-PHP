- Route
- Controller
- View

====================================
Step 1)
- Config du an:
	- CSDL
	- Authentication

php artisan migrate
composer require laravel/ui
npm install
php artisan ui vue --auth
npm install && npm run dev

composer require laravel/ui
php artisan ui:auth
php artisan ui bootstrap --auth
npm install && npm run dev

Step 2)
	Route: http://127.0.0.1:8001/test
		- routing:
			Xac dinh URL -> xu ly nhu the nao

		Các cách xử lý 1 route trong dự án Laravel
			URL -> routing -> Trả dữ liệu về client
			URL -> routing -> view -> Trả kết quả về
			URL -> routing -> controller (Xử lý logic + model) -> Trả kết quả về
			URL -> routing -> controller (Xử lý logic + model) -> view -> Trả kết quả về