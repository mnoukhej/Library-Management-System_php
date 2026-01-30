# 📚 Library Management System (LMS) - PHP  

A **web-based Library Management System** built using **PHP, MySQL, HTML, CSS, and JavaScript**.  
This system helps to efficiently manage library operations like **book management, student records, issuing/returning books, notifications, and reports**.  

---

## ✨ Key Features  

- 👩‍💼 **User Roles** – Supports **Admin/Librarian** and **Students**.  
- 📖 **Book Management** – Add, update, delete, and search books.  
- 🎓 **Student Management** – Register, manage, and track student records.  
- 📅 **Issue & Return System** – Issue books to students and manage return dates.  
- 🔔 **Notifications** – Librarian can send notifications to students.  
- 📊 **Reports & Analytics** – Track issued books, returns, and overdue reports.  
- 🔑 **Authentication System** – Secure login & registration for students and librarians.  
- 🎨 **Responsive UI** – Clean Bootstrap-based dashboard for easy navigation.  

---

## Folder Structure

<!-- TREE_START -->
```
├── README.md
├── index.html
├── library management system.docx
├── lms.sql
├── setup.bat
└── update_tree.py
```
<!-- TREE_END -->


## ⚙️ Modules  

### 👨‍💼 Librarian Module  
The Librarian/Admin has full control over the system to manage books, students, and notifications.  
- 🔑 **Login & Logout** – Secure authentication for the librarian.  
- 📚 **Book Management** – Add, update, or delete books from the library.  
- 📅 **Issue & Return Books** – Manage book issuing and returning process with due dates.  
- 👩‍🎓 **Student Records** – View details of students who have borrowed books.  
- 🔔 **Notifications** – Send alerts and reminders to students.  

---

### 🎓 Student Module  
Students can search and borrow books, track issued books, and receive updates.  
- 📝 **Register & Login** – New students can register; existing ones can log in securely.  
- 🔍 **Search Books** – Find available books in the library by title, author, or category.  
- 📖 **My Issued Books** – View a personal list of borrowed books with due dates.  
- 📩 **Notifications** – Receive messages and reminders from the librarian.  


## 🚀 Installation  

### 🖥️ For Windows  

1. Install **XAMPP/WAMP**.  
2. Clone the repository inside the `htdocs` folder:  
   ```bash
   git clone https://github.com/mnoukhej/lms_php.git

3. Import the database:
   - Open phpMyAdmin.
   - Create a new database (e.g., lms).
   - Import lms.sql.

4. Configure the database connection inside:
   ```bash
   librarymanagement/connection/connection.php

5. Run the application in your browser:
   ```bash
   http://localhost/lms_php/librarymanagement
   
   

## 📦 Dependencies
- PHP >= 7.4
- MySQL >= 5.7
- Bootstrap 4 / 5
- jQuery
- Chart.js (for reports & graphs)
- Font Awesome

## 🔧 Configuration
- Update your database credentials in:
  `librarymanagement/connection/connection.php`


- Default credentials after import:
   - 👨‍💼 Librarian/Admin → admin / admin123
   - 🎓 Student → Register via portal

## 📜 License
This project is licensed under the MIT License – feel free to use, modify, and distribute.

## 👨‍💻 Author
   Muhammad Noukhez