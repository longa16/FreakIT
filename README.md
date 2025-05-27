# 🎃 FreakIT – Halloween Store Forum

**FreakIT** is a spooky-themed 🕸️ **discussion forum** designed for a Halloween costume shop.  
Customers and visitors can interact, ask questions, leave reviews, and share their terrifyingly good costume ideas! 

Built in **PHP** with a **MySQL database**, the app runs locally on **WampServer**.

---

## 🕹️ Features

-  Post and reply to messages on various Halloween topics
-  User registration and login system
-  Session management and basic access control
-  Timestamped messages
-  Admin panel to moderate the forum

---

## 🧱 Technologies Used

-  PHP (vanilla)
-  MySQL
-  HTML5 / CSS3
-  JavaScript (optional enhancements)
-  Apache (via WampServer)

---

## 🖥️ How to Run Locally with WampServer

### 🔧 Prerequisites
- Install **[WampServer](https://www.wampserver.com/en/)** on your machine
- Make sure Apache and MySQL services are running (green Wamp icon)

### 🚀 Installation Steps

1. 📁 **Clone or copy** the project folder into Wamp’s `www` directory:
   ```text
   C:\wamp64\www\FreakIT

2. 🛠️ Create the database:

- Open phpMyAdmin via http://localhost/phpmyadmin
- Create a database named: freakit_bd
- Import the provided freakit_bd.sql file to set up the tables

3. ⚙️ Configure database connection:
Open config/db.php and set your database credentials:

    ```text
    $host = 'localhost';
    $user = 'root';
    $mdp = 'ROOT';
    $dtb = 'students';

4. 🌐 Launch the forum:
   http://localhost/FreakIT



