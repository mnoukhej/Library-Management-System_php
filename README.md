<<<<<<< HEAD
# 📚 {{PROJECT_NAME}}
=======
# 📚 Library-Management-System_php 
>>>>>>> c131cba53887dbef0f77bb46ed69962e7e73a8cb

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
├── librarymanagement
│   ├── Impdate.php
│   ├── LICENSE
│   ├── README.md
│   ├── about_us.php
│   ├── blank.html
│   ├── cards.html
│   ├── charts.html
│   ├── connection
│   │   └── connection.php
│   ├── contacts.php
│   ├── courses.php
│   ├── css
│   │   ├── datepicker.css
│   │   ├── grid.css
│   │   ├── ie.css
│   │   ├── ie6.css
│   │   ├── jquery.wysiwyg.css
│   │   ├── jsDatePick_ltr.min.css
│   │   ├── layout.css
│   │   ├── log.css
│   │   ├── reset.css
│   │   ├── sb-admin.css
│   │   ├── sb-admin.min.css
│   │   ├── style.css
│   │   ├── stylemenu.css
│   │   ├── styles.css
│   │   ├── tablesorter.css
│   │   ├── theme-blue.css
│   │   └── thickbox.css
│   ├── delete_books.php
│   ├── forgot-password.html
│   ├── gulpfile.js
│   ├── images
│   │   ├── 0320576600.jpg
│   │   ├── Library.jpg
│   │   ├── admin1.png
│   │   ├── bca.jpg
│   │   ├── bg_top1.jpg
│   │   ├── bg_top2.jpg
│   │   ├── bg_top_img2-04.jpg
│   │   ├── bg_top_img2-06.jpg
│   │   ├── bg_top_img2-07.jpg
│   │   ├── bg_top_img2-08.jpg
│   │   ├── bg_top_img2-09.jpg
│   │   ├── bg_top_img2-12.jpg
│   │   ├── bg_top_img2.jpg
│   │   ├── button.png
│   │   ├── button1_bg.gif
│   │   ├── button1_left.gif
│   │   ├── button1_right.gif
│   │   ├── button2_bg.gif
│   │   ├── button2_left.gif
│   │   ├── button2_right.gif
│   │   ├── buttonn.png
│   │   ├── buttony.png
│   │   ├── colleage.png
│   │   ├── cor1.png
│   │   ├── cor2.png
│   │   ├── cross-on-white.gif
│   │   ├── date.gif
│   │   ├── dca.jpg
│   │   ├── header-bg.jpg
│   │   ├── img1.png
│   │   ├── img2.png
│   │   ├── img3.png
│   │   ├── line_top1.gif
│   │   ├── marker_1.gif
│   │   ├── marker_2.gif
│   │   ├── marker_3.gif
│   │   ├── menu_line.jpg
│   │   ├── msc.jpg
│   │   ├── new_icon_blink.gif
│   │   ├── page1_img1.jpg
│   │   ├── page1_img2.jpg
│   │   ├── page1_img3.jpg
│   │   ├── page1_img4.jpg
│   │   ├── page2_img1.jpg
│   │   ├── page3_img1.jpg
│   │   ├── page3_img2.jpg
│   │   ├── page3_img3.jpg
│   │   ├── pg.png
│   │   ├── smart.png
│   │   ├── smartlogo.png
│   │   ├── smartlogo_2.png
│   │   ├── smartlogo_3.png
│   │   ├── staff1.png
│   │   ├── student1.png
│   │   └── top_line2.gif
│   ├── include
│   │   ├── footer.php
│   │   ├── header.php
│   │   └── homewelcome.php
│   ├── index.html
│   ├── index.php
│   ├── js
│   │   ├── Expletus_Sans_400.font.js
│   │   ├── Molengo_400.font.js
│   │   ├── bootstrap-datepicker.js
│   │   ├── cufon-replace.js
│   │   ├── cufon-yui.js
│   │   ├── html5.js
│   │   ├── jquery-1.5.2.js
│   │   ├── sb-admin-charts.js
│   │   ├── sb-admin-charts.min.js
│   │   ├── sb-admin-datatables.js
│   │   ├── sb-admin-datatables.min.js
│   │   ├── sb-admin.js
│   │   ├── sb-admin.min.js
│   │   └── validation.js
│   ├── librarian
│   │   ├── act_login.php
│   │   ├── add_books.php
│   │   ├── all_student_of_this_book.php
│   │   ├── approve.php
│   │   ├── books_details_with_student.php
│   │   ├── books_image
│   │   │   ├── 05e9f818cb7ccb0006d364d2ed5c1be0temp_6595.jpg
│   │   │   ├── 269b34bdde87375653ab95f8421a9b70download (3).jpg
│   │   │   ├── 3206734c299632a45162d318a075fc79c.jpg
│   │   │   ├── 3c09e27e43e8cb2d2e26af5e252cb552os.jpg
│   │   │   ├── 482e4cf447f9fb430e2a5f4854e2fce2download.jpg
│   │   │   ├── 5d9124d509975d75197287d2e6271b2e9781439851685.jpg
│   │   │   ├── 678382cdc6f1521b85f083d2e6a2a122images (3).jpg
│   │   │   ├── 7cdc6ec04402ff80380855fc78bcfb42b-tech-iiird-year-software-engineering-book-500x500.jpg
│   │   │   ├── 7d37b6ccb8c8ec516d90d25858cfc065download (1).jpg
│   │   │   ├── 9b0477f65a8d131cffde09cf9a9b7e91download.jpg
│   │   │   ├── be2b570ec8e8824700e41e6a44e87c89download.jpg
│   │   │   ├── c08d72a7e828fe2a128d36d664f21bcbjava.jpg
│   │   │   ├── e53f5afb4653d9a053e25dd1bf6cdb02data-structures-using-c-original-imaeqkhjxw8pdsk3.jpeg
│   │   │   ├── e7f08a13e57488f7c9bf985ab65d5557bcom.jpg
│   │   │   ├── eb24db5c251ce98a217c734bcfbfe46c91H-rBJnEVL._AC_UL320_SR240,320_.jpg
│   │   │   ├── f58fcb7f4766a23406a4445051cc5e5cdownload.jpg
│   │   │   ├── f6a5d3e8b347e8058c7381c49bae9ecfdownload.jpg
│   │   │   └── f8694b56f38156fc83942cd7735744b8187133fb414051cedc77a551a598a08a.jpg
│   │   ├── delete_books.php
│   │   ├── demo.php
│   │   ├── display_books.php
│   │   ├── display_student_info.php
│   │   ├── footer.php
│   │   ├── forgot-password.php
│   │   ├── header.php
│   │   ├── issue_books.php
│   │   ├── login.php
│   │   ├── logout.php
│   │   ├── news.php
│   │   ├── notapprove.php
│   │   ├── plain_page.php
│   │   ├── register.php
│   │   ├── return.php
│   │   ├── return_books.php
│   │   └── send_notification_student.php
│   ├── login.html
│   ├── model
│   │   ├── config.php
│   │   └── library.php
│   ├── navbar.html
│   ├── notice.php
│   ├── package-lock.json
│   ├── package.json
│   ├── pageinfo.php
│   ├── photo.jpg
│   ├── pug
│   │   ├── blank.pug
│   │   ├── cards.pug
│   │   ├── charts.pug
│   │   ├── forgot-password.pug
│   │   ├── includes
│   │   │   ├── css
│   │   │   │   ├── core.pug
│   │   │   │   └── custom.pug
│   │   │   ├── footer.pug
│   │   │   ├── js
│   │   │   │   ├── core.pug
│   │   │   │   └── custom.pug
│   │   │   ├── modals
│   │   │   │   └── logout.pug
│   │   │   ├── navbar.pug
│   │   │   └── scroll-to-top.pug
│   │   ├── index.pug
│   │   ├── login.pug
│   │   ├── navbar.pug
│   │   ├── register.pug
│   │   └── tables.pug
│   ├── register.html
│   ├── rulesregulation.php
│   ├── scss
│   │   ├── _cards.scss
│   │   ├── _footer.scss
│   │   ├── _global.scss
│   │   ├── _login.scss
│   │   ├── _mixins.scss
│   │   ├── _utilities.scss
│   │   ├── _variables.scss
│   │   ├── navbar
│   │   │   ├── _navbar_colors.scss
│   │   │   ├── _navbar_fixed.scss
│   │   │   ├── _navbar_global.scss
│   │   │   ├── _navbar_static.scss
│   │   │   └── _navbar_toggle.scss
│   │   └── sb-admin.scss
│   ├── student
│   │   ├── footer.php
│   │   ├── forgot-password.php
│   │   ├── header.php
│   │   ├── login.php
│   │   ├── message_from_librarian.php
│   │   ├── my_issued_books.php
│   │   ├── register.php
│   │   └── search.php
│   ├── tables.html
│   └── vendor
│       ├── bootstrap
│       │   ├── css
│       │   │   ├── bootstrap-grid.css
│       │   │   ├── bootstrap-grid.min.css
│       │   │   ├── bootstrap-reboot.css
│       │   │   ├── bootstrap-reboot.min.css
│       │   │   ├── bootstrap.css
│       │   │   ├── bootstrap.css.map
│       │   │   ├── bootstrap.min.css
│       │   │   └── bootstrap.min.css.map
│       │   └── js
│       │       ├── bootstrap.bundle.js
│       │       ├── bootstrap.bundle.js.map
│       │       ├── bootstrap.bundle.min.js
│       │       ├── bootstrap.bundle.min.js.map
│       │       ├── bootstrap.js
│       │       ├── bootstrap.js.map
│       │       ├── bootstrap.min.js
│       │       └── bootstrap.min.js.map
│       ├── chart.js
│       │   ├── Chart.bundle.js
│       │   ├── Chart.bundle.min.js
│       │   ├── Chart.js
│       │   └── Chart.min.js
│       ├── datatables
│       │   ├── dataTables.bootstrap4.css
│       │   ├── dataTables.bootstrap4.js
│       │   └── jquery.dataTables.js
│       ├── font-awesome
│       │   ├── css
│       │   │   ├── font-awesome.css
│       │   │   ├── font-awesome.css.map
│       │   │   └── font-awesome.min.css
│       │   ├── fonts
│       │   │   ├── FontAwesome.otf
│       │   │   ├── fontawesome-webfont.eot
│       │   │   ├── fontawesome-webfont.svg
│       │   │   ├── fontawesome-webfont.ttf
│       │   │   ├── fontawesome-webfont.woff
│       │   │   └── fontawesome-webfont.woff2
│       │   ├── less
│       │   │   ├── animated.less
│       │   │   ├── bordered-pulled.less
│       │   │   ├── core.less
│       │   │   ├── fixed-width.less
│       │   │   ├── font-awesome.less
│       │   │   ├── icons.less
│       │   │   ├── larger.less
│       │   │   ├── list.less
│       │   │   ├── mixins.less
│       │   │   ├── path.less
│       │   │   ├── rotated-flipped.less
│       │   │   ├── screen-reader.less
│       │   │   ├── stacked.less
│       │   │   └── variables.less
│       │   └── scss
│       │       ├── _animated.scss
│       │       ├── _bordered-pulled.scss
│       │       ├── _core.scss
│       │       ├── _fixed-width.scss
│       │       ├── _icons.scss
│       │       ├── _larger.scss
│       │       ├── _list.scss
│       │       ├── _mixins.scss
│       │       ├── _path.scss
│       │       ├── _rotated-flipped.scss
│       │       ├── _screen-reader.scss
│       │       ├── _stacked.scss
│       │       ├── _variables.scss
│       │       └── font-awesome.scss
│       ├── jquery
│       │   ├── jquery.js
│       │   ├── jquery.min.js
│       │   ├── jquery.min.map
│       │   ├── jquery.slim.js
│       │   ├── jquery.slim.min.js
│       │   └── jquery.slim.min.map
│       └── jquery-easing
│           ├── jquery.easing.compatibility.js
│           ├── jquery.easing.js
│           └── jquery.easing.min.js
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
   git clone https://github.com/mnoukhej/Library-Management-System_php.git

3. Import the database:
   - Open phpMyAdmin.
   - Create a new database (e.g., lms).
   - Import lms.sql.

4. Configure the database connection inside:
   ```bash
   librarymanagement/connection/connection.php

5. Run the application in your browser:
   ```bash
   http://localhost/Library-Management-System_php/librarymanagement
   
   

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