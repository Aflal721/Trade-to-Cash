# 📢 Trade-to-Cash – Advertisement Publishing System

## 📖 Project Overview
The **Trade-to-Cash Advertisement Publishing System** is a web-based platform that simplifies the process of handling advertisement publishing — from client registration and ad submission to campaign management, billing, and payment collection.  
This project aims to cover the complete **Trade-to-Cash (T2C)** process for advertisement agencies, improving workflow efficiency and financial tracking.

The system is developed using **PHP**, **MySQL**, and **XAMPP**, and version control is managed through **GitHub Collaboration**.

---

## 🧩 Key Features
- **Client Management:** Add, update, and manage client details and advertising records.  
- **Advertisement Submission:** Allow clients or staff to create and submit ad requests.  
- **Campaign Management:** Approve, publish, and monitor advertisement campaigns.  
- **Billing & Invoicing:** Generate and track invoices for published ads.  
- **Payment Tracking:** Record payments and monitor pending balances.  
- **Reports & Dashboard:** View summarized insights of ad performance and revenue.  
- **User Authentication:** Role-based login for Admin and Staff users.  

---

## ⚙️ Technology Stack
| Component | Technology Used |
|------------|-----------------|
| Frontend | HTML5, CSS3, JavaScript, Bootstrap |
| Backend | PHP (Core PHP) |
| Database | MySQL |
| Server | Apache (via XAMPP) |
| Version Control | Git & GitHub |

---

## 🧠 Installation and Setup Guide

Follow the steps below to set up and run the project on your local environment.

### 1. Prerequisites
Ensure you have the following installed on your system:
- [XAMPP](https://www.apachefriends.org/download.html) (to run Apache and MySQL)
- [Git](https://git-scm.com/downloads) (for version control)
- Web browser (Google Chrome, Microsoft Edge, or Firefox)

---

### 2. Clone the Repository
Open **Command Prompt** or **Git Bash** and run:
```bash
git clone https://github.com/<your-username>/<repository-name>.git
```

---

### 3. Move the Project to XAMPP Folder
After cloning, move the project folder to your XAMPP’s `htdocs` directory:
```
C:\xampp\htdocs\
```
For example:
```
C:\xampp\htdocs\trade-to-cash
```

---

### 4. Start XAMPP Services
1. Open **XAMPP Control Panel**.  
2. Start **Apache** and **MySQL** servers.  
3. Confirm they are running (both indicators should turn green).

---

### 5. Configure the Database
1. Open your browser and visit:  
   [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Click **New** and create a new database named:
   ```
   ad_publish_db
   ```
3. Click **Import** and select the SQL file provided in your project directory:
   ```
   database/ad_publish_db.sql
   ```
4. Once imported, your tables should appear successfully in phpMyAdmin.

---

### 6. Configure the Project (If Needed)
If your project includes a configuration file (e.g., `config.php` or `db_connect.php`),  
ensure your database credentials match the following:
```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ad_publish_db";
```

---

### 7. Run the Application
Now open your web browser and visit:
```
http://localhost/trade-to-cash/
```
You should now see the home page of your Advertisement Publishing System.

---

## 👥 GitHub Collaboration Guidelines

This project is managed through **GitHub Collaboration**. Each member should follow these best practices to maintain clean version control.

### Step 1: Pull the Latest Code
Always pull before making any changes:
```bash
git pull origin main
```

### Step 2: Create a Feature Branch
Work on your assigned feature or bug fix in a new branch:
```bash
git checkout -b feature-name
```

### Step 3: Commit Changes
After completing your work:
```bash
git add .
git commit -m "Added/Updated <feature-description>"
```

### Step 4: Push the Branch
Push your feature branch to GitHub:
```bash
git push origin feature-name
```

### Step 5: Create a Pull Request (PR)
- Go to your GitHub repository.  
- Click on **Pull Requests → New Pull Request**.  
- Request a review from your team leader or Scrum Master before merging.  

---

## 🧩 Team Roles and Responsibilities
| Role | Member | Responsibility |
|------|---------|----------------|
| **Product Owner** | [Your Name] | Oversees requirements and ensures the product meets goals. |
| **Scrum Master** | [Team Member Name] | Facilitates Agile workflow and team coordination. |
| **Developers** | [Team Member Names] | Implement core features and backend logic using PHP/MySQL. |
| **QA / Tester** | [Team Member Name] | Test functionalities, validate forms, and ensure quality delivery. |

---

## 🚀 Future Enhancements
- Client self-service portal for ad submissions and payment tracking.  
- Integration with online payment gateways (e.g., PayPal, Stripe).  
- Automated email notifications for billing and approval updates.  
- Advertisement analytics and reporting dashboard.  
- REST API for mobile app integration.  

---

## 🧾 License
This project was developed as part of an academic coursework at the **University of East London (UEL)**.  
It is intended **for educational and demonstration purposes only** and not for commercial use.

---

