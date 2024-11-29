# Car_shutter
Car Shutter is a professional platform for car enthusiasts to explore, showcase, and learn about various vehicles. This project integrates a sleek, responsive front end with interactive features, ensuring an immersive and enjoyable user experience.

# Features 
## Frontend
- Interactive User Interface: Smooth animations and real-time updates for gallery interactions.
- Car Gallery: Explore detailed luxury, sports, and classic car pages.

## Backend
- User Authentication: Secure login and signup functionality with password encryption.
- Restricted Content: Ensures access to premium car details is limited to logged-in users.

# Technologies Used

## Frontend
- HTML5
- CSS3 (styles.css)
- JavaScript (scripts.js)
## Backend
- PHP
- MySQL

## Tools
- XAMPP: Local server for hosting the application.

# Installation
## Clone the Repository

git clone https://github.com/yourusername/car-shutter.git  
cd car-shutter  

## Setup the database

- Open phpMyAdmin (http://localhost/phpmyadmin).
- Create a database named car_shutter.
- Import the SQL file:
      - Go to the "Import" tab and upload the provided SQL schema file.

## Configure Backend
Update the database credentials in config.php:

$host = 'localhost';  
$db = 'car_shutter';  
$user = 'root';  
$pass = '';  



## Start the Server
- Start Apache and MySQL from XAMPP.
- Access the application at http://localhost/car-shutter.

# Project Structure

car-shutter/  
├── gallery.html          # Main car gallery  
├── car-details.html      # Individual car details page  
├── config.php            # Database configuration  
├── index.php             # Home page  
├── login.html            # Login form  
├── login.php             # Backend login processing  
├── logout.php            # Logout and session termination  
├── signup.html           # Signup form  
├── signup.php            # Backend signup processing  
├── styles.css            # Styling for the platform  
├── scripts.js            # Client-side scripts  
├── favorites.html        # User's favorite cars page  
├── contact.html          # Contact us page  
└── README.md             # Project documentation  

# Usage

## Register a New User
- Navigate to the signup page (signup.html).
- Fill out the form and submit.
## Login
- Use the registered email and password to log in.
- Upon successful login, you will be redirected to the home page.
## Browse Cars
- Explore the gallery to view detailed information about each car.
- Add cars to your favorites list for easy access later.

# Screenshots


# Contributing
- Fork the repository.
- Create a new branch:
git checkout -b feature-name  
- Commit your changes:
git commit -m "Add feature-name"  
- Push to the branch:
git push origin feature-name  
- Open a pull request.

# Contact

For questions or collaboration opportunities, reach out to:
- Email: mohammedkachwala23@gamil.com
- Github: truthfulwarning23


