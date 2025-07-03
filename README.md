# 🆔 GPID - Generate Printable ID Card System

A lightweight, PHP-based web system to generate and print user ID cards with a secure admin dashboard and user interface. The project supports image uploads, ID previews, printing features, and role-based access.

---
## 🔗 Live Demo  
  Check out the live portfolio site with sleek UI and responsive design:  
  [🌐 https://gpid.infinityfreeapp.com/]

---

## 📚 Table of Contents

- 🔥 [Project Motivation](#-project-motivation)
- ✨ [Features](#-features)
- 🧠 [System Architecture and Flow](#-system-architecture-and-flow)
- 🛠️ [Technology Stack](#technology-stack)
- ⚙️ [Setup and Installation](#setup-and-installation)
- 🔄 [How It Works](#-how-it-works)
- 📁 [Folder Structure and Key Files](#-folder-structure-and-key-files)
- 🔐 [Security Considerations](#-security-considerations)
- 🚀 [Potential Improvements](#-potential-improvements)
- 🤝 [Contributing](#-contributing)
- 📄 [License](#-license)
- 📬 [Contact](#-contact)

---

## 🔥 Project Motivation

This project was created to streamline the generation and management of student ID cards in educational institutions. It provides both users and admins a clean, fast way to register, view, and print ID cards securely.

---

## ✨ Features

- 🧑‍💻 User Registration and Login  
- 🔑 Admin Login with Secure Panel  
- 🖼️ Upload Profile Picture  
- 🆔 Real-Time ID Card Preview  
- 🖨️ One-Click ID Printing  
- 🗃️ Database Storage with MySQL  
- 🛡️ Input Validation and Secure Sessions  

---

## 🧠 System Architecture and Flow
  User/Admin
→ Web Forms (HTML/CSS)
→ PHP Scripts
→ MySQL Database
→ ID Preview & Print
→ [Print/Download]

---

## 🛠Technology Stack

| Layer       | Technologies Used               |
|------------|----------------------------------|
| 🌐 Frontend | HTML5, CSS3, JavaScript          |
| ⚙️ Backend  | PHP                              |
| 🧠 Database | MySQL (via phpMyAdmin)           |
| 🧩 Assets   | Audio, Images, Custom CSS/JS     |
| 🖼️ Icons    | Favicon and branding included    |

---

## ⚙Setup and Installation

1. 📥 **Download or clone the repository** to your XAMPP/LAMP `htdocs` or web directory.
2. 🗄️ **Import the SQL file:**
   - Open [phpMyAdmin](http://localhost/phpmyadmin).
   - Create a database (e.g., `gpid`).
   - Import the `gpid.sql` file to generate necessary tables.
3. 🔌 **Launch local server:**
   - Start Apache and MySQL in XAMPP.
   - Open [http://localhost/gpid/](http://localhost/gpid/) in your browser.

4. 🛠️ **Admin Login:**
   - Default credentials:
     - Username: `example`
     - Password: `example123` *(or as set in database)*

---

## 🔄 How It Works

### 🧑‍🎓 User Side:
- Registers via `index.php`
- Uploads a profile picture
- Can view and print their ID via `userviewcard.php`

### 👨‍💼 Admin Side:
- Logs in via `adminLogin.php`
- Can insert/view/delete user data
- Manages all data securely through `admindatabase.php`

---

## 📁 Folder Structure and Key Files

| 📂 Folder / 📝 File Name     | 📄 Description                                   |
|-----------------------------|--------------------------------------------------|
| `audio/`                    | 🎵 Contains audio files used in the UI          |
| `css/`                      | 🎨 Stylesheets for layout, design, ID formatting|
| `dp/`                       | 🖼️ Stores uploaded user profile pictures        |
| `img/`                      | 🖼️ Image assets like logos or icons             |
| `js/`                       | ⚙️ JavaScript for interactivity and validation  |
| `link/`                     | 🔗 External resources/configs                   |
| `adminLogin.php`            | 🔑 Admin login page                             |
| `admindatabase.php`         | 🗄️ Admin DB connection and logic                |
| `admininsert.php`           | ➕ Admin interface to add new users              |
| `close.php`                 | 🔚 Closes DB connection                         |
| `deleteid.php`              | ❌ Deletes user record by ID                    |
| `enrollview.php`            | 👁️ View list of enrolled users                 |
| `favicon.ico`               | 🌐 Browser tab icon                            |
| `gpid.sql`                  | 💾 SQL script to set up database structure      |
| `idCardTermsCondition.php`  | 📕 Terms and conditions for users               |
| `index.php`                 | 🏠 Homepage & user registration                 |
| `insert.php`                | 📝 Handles user registration data               |
| `login.php`                 | 🔐 User login script                            |
| `print.php`                 | 🖨️ ID card printable layout                    |
| `printid.php`               | 🖨️ Helper script for ID printing               |
| `submit.php`                | 📤 General form submission handler              |
| `userviewcard.php`          | 👁️ View generated ID card                      |
| `userviewid.php`            | 🧾 Full user ID view                            |

---

## 🔐 Security Considerations

✅ Passwords are **not hardcoded**; stored in the DB  
✅ All inputs are **validated** and images checked for type/size  
✅ No direct execution of uploaded files  
✅ **Role separation** between user and admin for access control  

---

## 🚀 Potential Improvements

- 🔒 Use **password hashing** (bcrypt/Argon2)
- 📧 Add **email verification** or **OTP** during registration
- 📱 Make the UI **mobile responsive**
- 📄 Export ID cards as **PDF**
- 🌐 Add **multi-language** support

---

## 🤝 Contributing

Contributions are welcome!  
Feel free to fork, submit PRs, or open issues.  
Make sure changes are documented and tested.

---

## 📄 License

This project is licensed under the **MIT License**.  

---

## 📬 Contact

**Created by:** Kanhaiya Gupta  
📧 Email: [kanhaiyaguptaksg@gmail.com](mailto:kanhaiyaguptaksg@gmail.com)  
🌐 GitHub: [@codekanhaiya](https://github.com/codekanhaiya)  

💡 *Made with love for learning and real-world applications.*

---
