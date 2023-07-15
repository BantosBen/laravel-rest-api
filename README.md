# Learning REST API with Laravel

A beginner's guide to learning REST API development with Laravel framework.

## Description

This project serves as a learning resource for those interested in building RESTful APIs using the Laravel framework. It provides a step-by-step guide and examples to help you understand the fundamentals of REST API development and how to implement them using Laravel's powerful features and conventions.

## Installation

To set up this project locally, follow these steps:

1. Clone the repository to your local machine using the command:

   ```
   git clone https://github.com/BantosBen/laravel-rest-api
   ```

2. Navigate to the project directory:

   ```
   cd learning-rest-api-laravel
   ```

3. Install the project dependencies via Composer:

   ```
   composer install
   ```

4. Create a copy of the `.env.example` file and rename it to `.env`. Update the necessary configuration values, such as database credentials.

5. Generate an application key:

   ```
   php artisan key:generate
   ```

6. Run the database migrations:

   ```
   php artisan migrate
   ```

7. Start the development server:

   ```
   php artisan serve
   ```

8. You're now ready to access the project locally by visiting `http://localhost:8000` in your browser.

## Usage

This project covers the basics of building a RESTful API using Laravel. It includes examples for creating, reading, updating, and deleting resources through API endpoints. Here are some key components covered in this project:

- **Routes**: The API endpoints are defined in the `routes/api.php` file. It includes routes for various CRUD operations and their corresponding controller methods.

- **Controllers**: Controllers handle the logic of API endpoints. They interact with the database using Laravel's Eloquent ORM to store and retrieve data. Examples are provided in the `app/Http/Controllers` directory.

- **Request/Response Handling**: Laravel provides convenient methods for handling requests and formatting responses. You'll learn how to access request data, validate input, and return JSON responses.

## API Documentation

For detailed documentation on the  API endpoints, request/response formats, and other relevant information, please refer to the [Laravel API Documentation](https://laravel.com/docs/10.x/eloquent-resources) page.

## Contributing

Contributions to this learning project are welcome! If you find any issues or have suggestions for improvements, please feel free to submit bug reports, feature requests, or pull requests.


## Credits

This learning project was created by [Angatia Benson](https://github.com/bantosben). Special thanks to the Laravel community for their valuable resources and contributions.

## Contact

If you have any questions, feedback, or inquiries related to this learning project, please feel free to reach out to me:

- Email: [angatiabenson1@gmail.com](mailto:angatiabenson1@gmail.com)
- Twitter: [@bensonetia](https://twitter.com/bensonetia)
