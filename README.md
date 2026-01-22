# 🍽️ Restaurant Management System

## 📌 Project Overview
The **Restaurant Management System** is a web-based application designed to automate and manage daily restaurant operations efficiently.  
It provides separate dashboards for **Admin, Staff, and Customers**, ensuring smooth coordination between order processing, table management, menu handling, billing, and feedback collection.  

This project was developed as part of a **Database Management Systems (DBMS) course project** using **PHP, MySQL, XAMPP, and VS Code**.

## 🎯 Objectives
- Automate restaurant operations and reduce manual work  
- Manage orders, tables, menu items, and billing efficiently  
- Provide role-based access for Admin, Staff, and Customers  
- Maintain accurate and secure database records  
- Improve customer experience through real-time order tracking  

## 👥 User Roles & Functionalities

### 🔑 Admin Module
- Dashboard with overall restaurant statistics  
- Manage food categories and menu items  
- Add and manage staff members (default password assigned)  
- View and manage customer details  
- Manage restaurant tables (Available / Reserved / Occupied)  
- Configure Today’s Special Menu with special pricing  
- View customer feedback  
- Generate restaurant performance reports  
- Change admin password  

### 👨‍🍳 Staff Module
- View and manage customer orders  
- Accept or reject orders  
- Update order status (In Progress, Ready to Serve, Delivered)  
- Kitchen order handling  
- Table status management  
- View customer feedback  
- Daily report generation  
- Change staff password  

### 👤 Customer Module
- Register and login securely  
- Select table and place orders  
- View Today’s Special Menu  
- Track order status in real time  
- View order history and bills  
- Submit feedback  
- Change account password  

## 🗄️ Database Design
The system uses a relational database with the following main tables:

- **users** – Stores login details for admin, staff, and customers  
- **categories** – Stores food categories  
- **menu_items** – Stores food items, prices, images, and special offers  
- **orders** – Stores order-level information  
- **order_items** – Stores item-wise order details  
- **tables** – Stores table number, capacity, status, and reservation details  
- **feedback** – Stores customer feedback and ratings  

👉 Proper **Primary Keys (PK)** and **Foreign Keys (FK)** are used to maintain data integrity.

## 🛠️ Technologies Used
- **Frontend:** HTML, CSS  
- **Backend:** PHP  
- **Database:** MySQL  
- **Server:** XAMPP (Apache + MySQL)  
- **Development Tool:** Visual Studio Code  

## ⚙️ System Requirements

### Software Requirements
- Windows / Linux OS  
- XAMPP Server  
- Web Browser (Chrome / Firefox)  
- VS Code  

### Hardware Requirements
- Minimum 4 GB RAM  
- Intel i3 Processor or higher  
- 10 GB Free Disk Space  

## 🔄 Project Flow (High Level)
1. Customer registers and logs in  
2. Customer selects table and places order  
3. Order is sent to staff dashboard  
4. Staff accepts order and updates cooking status  
5. Table status changes automatically  
6. Order is delivered and billed  
7. Customer provides feedback  
8. Admin monitors overall system performance  

## ✅ Advantages
- Reduces manual errors  
- Improves order processing speed  
- Centralized data management  
- User-friendly and role-based system  
- Secure authentication and authorization  

## ⚠️ Limitations
- Requires internet connection  
- No online payment integration  
- Limited to single restaurant setup  

## 🚀 Future Enhancements
- Online payment gateway integration  
- Mobile application support  
- Multi-branch restaurant management  
- Advanced analytics and reports  
- SMS / Email notifications  

## 📚 References
- [PHP Official Documentation](https://www.php.net)  
- [MySQL Documentation](https://dev.mysql.com/doc)  
- [XAMPP Documentation](https://www.apachefriends.org)  
- [W3Schools](https://www.w3schools.com)  

## 📌 Conclusion
The **Restaurant Management System** successfully demonstrates the application of **DBMS concepts** in a real-world scenario.  
It provides a practical solution for managing restaurant operations while ensuring efficiency, accuracy, and customer satisfaction.

## 🚀 How to Run the Project
1. Install **XAMPP** and start Apache & MySQL.  
2. Clone or download this repository into the `htdocs` folder.  
3. Import the provided SQL file into **phpMyAdmin** to set up the database.  
4. Open the project in your browser: http://localhost/RESTAURANT_MS
5. Login as Admin, Staff, or Customer to explore functionalities.

## 📸 Screenshots

### 🔑 Admin Dashboard
![Admin Dashboard](screenshots/admin_dashboard.png)

### 👨‍🍳 Staff Dashboard
![Staff Dashboard](screenshots/staff.png)

### 👤 Customer Dashboard
![Customer Dashboard](screenshots/customer.png)

   
## 👨‍💻 Author
Developed by **Vaishnavi** as part of a DBMS course project.   
