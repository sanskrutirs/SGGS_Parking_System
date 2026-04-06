# SGGS Parking System

A streamlined management solution designed to organize and monitor vehicle parking within the **SGGS Institute of Engineering and Technology** campus.

---

## 🚀 Features
* **Real-time Slot Tracking:** Monitor available and occupied parking spaces.
* **Vehicle Registration:** Easy entry for student and staff vehicle details.
* **Security Logs:** Maintain timestamps for vehicle entry and exit.
* **User Roles:** Separate interfaces for security administrators and campus users.

## 🛠️ Tech Stack
* **Frontend:** [e.g., HTML, CSS, JavaScript]
* **Backend:** [e.g., Php]
* **Database:** [e.g., MySQL]

## 🔧 Installation & Setup

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/sanskrutirs/SGGS_Parking_System.git](https://github.com/sanskrutirs/SGGS_Parking_System.git)

2. **Move to Server Directory:**
   If you are using XAMPP, move the folder to `C:/xampp/htdocs/`. For WAMP, use `C:/wamp64/www/`.

3. **Database Setup:**
   * Open **phpMyAdmin** (`http://localhost/phpmyadmin`).
   * Create a new database named `sggs_parking`.
   * Click the **Import** tab and select the `.sql` file from the project folder to create the tables.

4. **Configure Database Connection:**
   * Open `config.php` (or your database connection file).
   * Ensure the credentials match your local setup:
     ```php
     $host = "localhost";
     $user = "root";
     $password = "";
     $dbname = "sggs_parking";
     ```

5. **Run the Project:**
   * Start Apache and MySQL in your XAMPP/WAMP Control Panel.
   * Visit `http://localhost/SGGS_Parking_System` in your browser.
