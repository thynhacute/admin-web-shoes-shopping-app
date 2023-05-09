# FPT SNEAKER GUIDELINE 
## INTRODUCTION
IDEA
Customers find it difficult to find, compare and choose the right shoe models.
Moreover, finding a store full of different models and brands is difficult.
Besides, customers have to move to the store, which consumes a lot of time and travel costs.
When a customer has questions, comments or wants to complain about a new pair of shoes, it is difficult to contact the staff directly for advice.
One of the worrisome problems is that customers feel awkward if they go to buy offline or call for advice, ask too many questions but do not buy any products at all.

## SOLUTION:
Convenient shopping experience: Customers can easily browse products, search, compare prices and choose the products they like without having to travel to stores.
Wide product selection: A shoe web can offer customers a wide range of shoe products ranging from running shoes to high heels, from different manufacturers. This allows customers to search and select products that suit their needs.
Save time and money: Not only do customers not have to travel to the store, but they also don't have to spend time commuting. In addition, products are often more competitively priced and can be discounted regularly, helping to save on procurement costs.
Customer Support Service: Shoe stores often offer customer support to answer customer inquiries and respond to requests. In addition, stores can provide instructions on how to care for their shoes so that customers' products can be kept in the best possible condition.
Feel free to look up information about shoes, easily check the size or quantity of inventory without direct advice from staff -> customers will not feel awkward anymore.

 ## MAIN ACTORS:
Admin: Users need to login to the system and can use features such as payment, view profile, update profile, etc.

 ## FEATURE OF THE SYSTEM
- Admin:
- Log in.
- Log out.
- View a list of products in stock.
- View product details
- More products
- Delete product
- Edit product information
- View a list of Orders in stock.
- View Orders details
- Delete Order
- Edit Order information
- View a list of Payment settings in stock.
- View Payment settings details
- Delete Payment settings
- Edit Payment settings information
- View a list of Users in stock.
- View Users details
- Delete User
- Edit Users information

 ## TECHNOLOGY
Environments:
MySQL WorkBench 8.0.32
Win64 OpenSSL v3.1.0
Composer
Laravel Framework 8.73.2
PHP 8.2.4

## IMPLEMENTATION
Admin

Step 1: Open terminal and run command git clone https://github.com/thynhacute/admin-web-shoes-shopping-app

Step 2: Go to project root directory, open terminal and run command: 
php artisan config:clear
php artisan cache:clear
php artisan sever

Step 3: The system will report the following:

![image](https://user-images.githubusercontent.com/77708167/237043935-c5b492e1-4d06-4e54-9e13-8140177f036d.png)

Step 4: Open http://localhost:8000/ or http://127.0.0.1:8000/

Step 5: Add path /admin

Step 6: Login
Username: admin
Password: admin

Step 7: List of products will appear, Admin can CRUD User/ Shoes/…

![image](https://user-images.githubusercontent.com/77708167/237044039-9041f327-f1b1-421f-92f7-7470242d4e99.png)

## Why do I use these technologies?
### PHP
PHP là một ngôn ngữ lập trình phổ biến và được sử dụng rộng rãi cho phía server trong việc phát triển ứng dụng web và mobile.
Được hỗ trợ bởi nhiều framework: PHP được hỗ trợ bởi nhiều framework như Laravel, CodeIgniter, Yii, Symfony, v.v... các framework này giúp cho việc phát triển backend trở nên nhanh chóng, dễ dàng và tiết kiệm thời gian.
-> Ở đây em sử dụng PHP kết nối với framework Laravel
Có thư viện mã nguồn mở phong phú: PHP có nhiều thư viện mã nguồn mở phong phú như cURL, GD, JSON, XML, v.v... giúp cho việc phát triển backend trở nên dễ dàng và nhanh chóng.
Phù hợp cho việc xử lý dữ liệu: PHP có thể xử lý dữ liệu từ nhiều nguồn khác nhau như các database phổ biến như MySQL, PostgreSQL, Oracle, v.v... Điều này giúp cho việc phát triển ứng dụng trở nên dễ dàng và linh hoạt hơn.
-> Ở đây em thiết kế database trên MySQL
Thân thiện với developer: Với cú pháp đơn giản, dễ hiểu, PHP là một ngôn ngữ lập trình thân thiện với các nhà phát triển, giúp cho việc phát triển ứng dụng trở nên đơn giản và hiệu quả hơn.
### MySQL WorkBench + Laravel
MySQL Workbench là một công cụ quản lý cơ sở dữ liệu rất mạnh mẽ và được phát triển bởi Oracle. Nó cung cấp cho người dùng một giao diện đồ họa dễ sử dụng để quản lý cơ sở dữ liệu MySQL. MySQL Workbench cung cấp cho người dùng nhiều tính năng hữu ích như quản lý quyền truy cập, tạo bảng, quản lý index, quản lý views, triggers, procedures, hỗ trợ đồ họa cho phép vẽ và thiết kế cơ sở dữ liệu, ...
Với Laravel, MySQL Workbench được sử dụng làm công cụ để quản lý cơ sở dữ liệu MySQL.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Laravel là một framework PHP mạnh mẽ, được thiết kế để xây dựng các ứng dụng web và mobile chuyên nghiệp.
Laravel có hỗ trợ tốt cho MySQL và MySQL Workbench là một công cụ rất hữu ích cho các nhà phát triển Laravel để thiết kế, quản lý và tương tác với cơ sở dữ liệu MySQL. Nó cung cấp cho các nhà phát triển một giao diện đồ họa dễ sử dụng để thiết kế và quản lý cơ sở dữ liệu, giúp họ tối ưu hóa quy trình phát triển ứng dụng và tăng tốc độ phát triển.
Vì vậy, em nghĩ rằng MySQL Workbench là một công cụ tuyệt vời để sử dụng với Laravel và MySQL để lưu trữ và quản lý cơ sở dữ liệu, cung cấp cho người dùng một phương tiện dễ sử dụng để thiết kế và quản lý cơ sở dữ liệu của họ.

![image](https://user-images.githubusercontent.com/77708167/237044472-40160260-2a88-49f7-8c08-e91d7fc5fd05.png)

## Features
### Log in.

Step 1: Go to http://localhost:8000/admin

Step 2: Input 

Username: admin
Password: admin

Step 3: Click on Login

![image](https://user-images.githubusercontent.com/77708167/237044925-ffcb2300-b90b-41c5-a081-03c8b35facf6.png)


### Log out.

Step 1: Click on Proflie button

Step 2: Click on Logout

![image](https://user-images.githubusercontent.com/77708167/237044983-9aef26da-b00a-4465-a510-da1b7f815254.png)
![image](https://user-images.githubusercontent.com/77708167/237045065-e4d49d13-dab3-4746-aaaf-5bcd2434bbd0.png)


### View a list of products in stock.

Step 1: Click on Shoes button in Menu in the left screen
System will display list shoes.

![image](https://user-images.githubusercontent.com/77708167/237045129-88d5ee5a-2e44-40b2-ab90-c9c1dac62be3.png)


### View product details

Step 1: Click on Shoes button in Menu in the left screen
System will display list shoes.

Step 2: Click on Action button

Step 3: Click on Show
System will display the information of the shoes\

![image](https://user-images.githubusercontent.com/77708167/237045233-1b5e5daa-8f07-4a73-b4e1-43ba8f1975ff.png)


### Delete product

Step 1: Click on Shoes button in Menu in the left screen
System will display list shoes.

Step 2: Click on Action button

Step 3: Click on Delete

![image](https://user-images.githubusercontent.com/77708167/237045303-e0e6c793-5d2c-4b90-aa22-08cc075ab0ea.png)


### Edit product information

Step 1: Click on Shoes button in Menu in the left screen
System will display list shoes.

Step 2: Click on Action button

Step 3: Click on Edit

Step 4: Update your change

![image](https://user-images.githubusercontent.com/77708167/237045357-36e4295c-1908-42f2-bf9c-70aa817d965f.png)


### View/ Update/ Delete Orders

Step 1: Click on Orders button in Menu in the left screen
System will display list Orders.

Step 2: Click on Action button
You can View/ Delete or Update

![image](https://user-images.githubusercontent.com/77708167/237045415-b5b124d0-1b85-4101-b7c0-2c6b881716e9.png)


### View/ Update/ Delete Payment Setting

Step 1: Click on Orders button in Menu in the left screen
System will display list Orders.

Step 2: Click on Action button
You can View/ Delete or Update

![image](https://user-images.githubusercontent.com/77708167/237045478-bb269d43-4ecd-4266-b1b1-97d17331bd1e.png)


### View/ Update/ Delete Users

Step 1: Click on Orders button in Menu in the left screen
System will display list Orders.

Step 2: Click on Action button
You can View/ Delete or Update

![image](https://user-images.githubusercontent.com/77708167/237045521-f6b64dbf-dbc0-4242-b93b-58e34824bf73.png)






