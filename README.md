# README

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Before you can install and run the project, you need to have the following software installed on your computer:

-   [Composer](https://getcomposer.org/download/)
-   [Node.js](https://nodejs.org/en/download/)

### Installation

Follow these steps to install and run the project:

1. Clone the repository to your local machine:

2. Navigate to the project directory:

cd project-directory

3. Install the composer dependencies:

composer install

4. Install the npm dependencies:

npm install

5. Create the `.env` file:

cp .env.example .env

6. Create a new database named `profiledb` in your local MySQL server.

7. Update the `.env` file with your database credentials.

8. Run the migrations to create the necessary tables in the database:

php artisan migrate

9. Start the development server:

php artisan serve

10. Compile the assets:

npm run dev

That's it! You should now be able to access the project in your web browser at `http://localhost:8000`.

## Contributing

If you would like to contribute to the project, please fork the repository and submit a pull request with your changes.

## License

This project is licensed under the [MIT License](LICENSE).
