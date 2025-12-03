# Pet World - Hệ Thống Quản Lý Cửa Hàng Thú Cưng

## Giới Thiệu
Pet World là một ứng dụng web quản lý cửa hàng thú cưng, được xây dựng với Vue.js cho frontend và PHP cho backend. Ứng dụng cung cấp các tính năng quản lý sản phẩm, đơn hàng, khách hàng và thống kê doanh thu.

## Tính Năng Chính

### 1. Tính Năng Dành Cho Admin

#### 1.1. Quản Lý Sản Phẩm
- Xem danh sách sản phẩm
- Thêm sản phẩm mới
- Cập nhật thông tin sản phẩm
- Inactive sản phẩm

#### 1.2. Quản Lý Đơn Hàng
- Xem danh sách đơn hàng
- Xem chi tiết đơn hàng
- Cập nhật trạng thái đơn hàng

#### 1.3. Quản Lý Khách Hàng
- Xem danh sách khách hàng

#### 1.4. Thống Kê & Báo Cáo
- Tổng số đơn hàng
- Tổng số khách hàng
- Tổng số sản phẩm
- Thống kê doanh thu theo tháng

### 2. Tính Năng Dành Cho Người Dùng

#### 2.1. Quản Lý Tài Khoản
- Đăng ký tài khoản
- Đăng nhập/Đăng xuất/Đổi mật khẩu
- Xem thông tin cá nhân
- Cập nhật thông tin cá nhân
- Xem danh sách sản phẩm yêu thích

#### 2.2. Mua Sắm
- Xem danh sách sản phẩm
- Xem chi tiết sản phẩm
- Lọc sản phẩm theo danh mục

#### 2.3. Giỏ Hàng
- Thêm sản phẩm vào giỏ hàng
- Cập nhật số lượng sản phẩm
- Xóa sản phẩm khỏi giỏ hàng
- Xem tổng giá trị giỏ hàng

#### 2.4. Đặt Hàng
- Xem phí vận chuyển
- Đặt hàng

#### 2.5. Theo Dõi Đơn Hàng
- Xem lịch sử mua hàng
- Xem chi tiết đơn hàng
- Theo dõi trạng thái đơn hàng


## Công Nghệ Sử Dụng

### Frontend
- Vue.js 3
- Tailwind CSS

### Backend
- PHP
- MySQL

## Cài Đặt

### Cài Đặt Frontend
```bash
# Cài đặt dependencies
npm install
npm install -g @vue/cli

# Chạy development server
npm run serve

# Build cho production
npm run build
```

### Cài Đặt Backend
```bash
npm install js-cookie
```
```bash
#Lệnh để khởi động backend
php -S localhost:8000
```

## Cấu Trúc Dự Án

### Frontend (`/src`)
- `/api`: Cấu hình API endpoints
- `/assets`: Hình ảnh và tài nguyên tĩnh
- `/components`: Các component Vue.js
- `/layouts`: Layout templates
- `/router`: Cấu hình routing
- `/store`: Vuex store modules
- `/utils`: Các utility functions
- `/views`: Các trang chính của ứng dụng

### Backend (`/backend`)
- `/config`: Cấu hình database và ứng dụng
- `/controllers`: Xử lý logic nghiệp vụ
- `/middleware`: Middleware xác thực và phân quyền
- `/model`: Database models
- `/routes`: Định nghĩa API routes
- `/services`: Business logic services


## Hướng dẫn khởi tạo dự án Vue và kết nối GitHub

1. Mở terminal và chuyển đến thư mục bạn muốn lưu project:

   ```bash
   cd "C:\Users\Trinh\Documents\0. VueJS"
   ```
2. Clone code về:

   ```bash
   git clone https://github.com/kieutrinhtran/pet-shop.git
   ```
3. Lệnh mở VS Code
   ```bash
   code .
   ```
4. Khởi tạo Git:

   ```bash
   git init
   ```
5. Thêm remote origin (chỉ cần làm 1 lần):

   ```bash
   git remote add origin https://github.com/kieutrinhtran/pet-shop.git
   ```
6. Tạo branch trinh trên remote repository (nếu chưa tồn tại, đẩy tất cả commit từ branch local lên branch remote) (thay `trinh` bằng tên của bạn, sau này chỉ push code lên branch của mình):

   ```bash
   git push -u origin trinh
   ```
---
