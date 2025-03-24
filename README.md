![image](https://github.com/user-attachments/assets/0a652943-a3ca-44b2-8714-a2f1aa7c56d2)
![image](https://github.com/user-attachments/assets/9d560d3e-446c-47b5-b0ea-cfbac8967c60)


# My Project

simple web CRUD but C and D , uses a database to store

## Technologies Used

* PHP
* Xampp
* Bootstrap v5.3.3

## Database Setup

* **Database Name:** `Information`
* **Table Name:** `Name`

## Table Structure

The `Name` table has the following columns:

* `id` (INT, PRIMARY KEY, AUTO_INCREMENT)
* `Name` (VARCHAR)

## Installation

1.  Clone the repository: `git clone <your_repository_url>`
2.  Create a database named `Information` in your MySQL server.
3.  Create a table named `Name` with the structure described above.
4.  Create a `db_connect.php` file based on the `db_connect.example.php` template and fill in your database credentials.
5.  Run the application on a web server.

## Usage

* Add new names using the `add.php` page.
* View all names in the `index.php` page.
* Delete names using the delete button on the `index.php` page.

## Notes

* Make sure to configure your database credentials correctly in the `db_connect.php` file.
* If you are using a different database setup, you may need to modify the code accordingly.
