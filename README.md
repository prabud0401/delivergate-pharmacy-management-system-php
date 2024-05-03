# delivergate-pharmacy-management-system-php

This repository contains the backend project for a pharmacy management system developed for Delivergate using PHP Laravel Framework. The system allows for inventory management, customer record maintenance, and user privilege management, adhering to the specified requirements.

## Features:
- **Inventory Management**: Allows the owner to maintain inventory (medicines).
- **Customer Record Maintenance**: Enables the owner and manager to maintain customer records, including customer details.
- **User Privilege Management**: Implements user privilege policies where:
  - Only the owner can add items/customers.
  - Cashiers can remove and edit items.
  - Managers can update and delete customer details.
- **User Logging Mechanism**: Proper user logging mechanism is implemented to manage the above-mentioned policies.

## Repository Contents:
- **Backend Project**: Contains Laravel backend project.
- **Database Diagram**: Provides an ER diagram for the database structure.
- **Documentation**: Includes a brief document explaining the project functionality and purpose of each endpoint.
- **Postman Collection**: Contains a Postman request collection for project endpoints.

## How to Run:
1. Clone this repository to your local machine.
2. Install dependencies using `composer install`.
3. Set up your database in the `.env` file and run migrations using `php artisan migrate`.
4. Serve the application using `php artisan serve`.

## API Endpoints:
- **Add Items/Customer (Owner Only)**: `/api/items`, `/api/customers`
- **Remove/Edit Items (Cashier Only)**: `/api/items/{id}`, `/api/customers/{id}`
- **Update/Delete Customer Details (Manager Only)**: `/api/customers/{id}`

## Database Diagram:
![Database Diagram](link_to_your_database_diagram)

## Documentation:
[Link to Documentation](link_to_your_documentation)

## Postman Collection:
[Link to Postman Collection](link_to_your_postman_collection)

Feel free to reach out if you have any questions or need assistance.

