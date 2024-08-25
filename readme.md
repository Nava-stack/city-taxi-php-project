# City Taxi Reservation System

## Project Overview

City Taxi (PVT) Ltd aims to revolutionize the taxi service industry with a modern, web-based reservation system. Designed for urban environments and focusing on low to mid-income passengers, this system prioritizes performance, quality, and customer satisfaction. It provides a seamless experience for both passengers and vehicle owners/drivers through an intuitive platform.

<p align="center">
  <img src="welcome.png" alt="System Overview">
</p>

## Features

- **User Registration**: Easy sign-up for passengers and drivers with automated email credentials.
- **Taxi Reservation**: This is a simple process for passengers to book taxis online.
- **Automated Notifications**: SMS alerts with driver and vehicle details upon successful reservation.
- **Driver Availability**: Real-time display of available drivers and their locations.
- **Rating System**: Passengers can rate their interactions with drivers.
- **Manual Booking**: Option to arrange cabs through a telephone operator for unregistered users.
- **Journey Payment Calculation**: Automated fare calculation with instant payment notifications for drivers.

## Technologies Used

- **Language**: PHP
- **Database**: MySQL
- **Server**: XAMPP
- **IDE**: VSCode
- **SMS Integration**: EmailJs API

## Getting Started

1. Clone the repository: `git clone https://github.com/Nava-stack/city-taxi-php-project.git`
2. Set up XAMPP and start Apache and MySQL servers.
3. Import the database schema using the provided SQL file into MySQL.
4. Configure the database connection settings in `config.php`.
5. Set up SMS API integration by configuring `sms_config.php` with your SMS provider's API credentials.
6. Access the application through `http://localhost/your-project-folder/` in your web browser.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
