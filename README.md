<img height="150" src="https://github.com/jessecarvalho/code-talk/blob/main/client/src/assets/imgs/logo.png"/>

# CodeTalk

## Overview

CodeTalk is a blogging platform designed specifically for developers to share their knowledge, experiences, and insights within the development community. It utilizes Laravel on the server-side and Vue.js on the client-side, providing a robust and efficient environment for managing and publishing technical content.

Please, note: the project is **under development**.

## Features

### 1. User Authentication
- Allows users to register, login, and manage their accounts securely.
- Utilizes Laravel's built-in authentication system for robust security.

### 2. Post Management
- Enables users to create, edit, and delete blog posts.
- Utilizes a WYSIWYG editor for easy content creation.
- Supports rich media embedding for enhanced post content.

### 3. Categories and Tags
- Organizes posts into categories and allows the assignment of multiple tags to each post.
- Facilitates easy navigation and content discovery for users.

### 4. Commenting System
- Provides a commenting system for users to engage with blog posts.
- Implements features such as threaded comments for better discussion organization.

### 5. Search Functionality
- Offers search functionality to allow users to find specific content quickly.
- Utilizes Laravel's query capabilities for efficient search operations.

### 6. Responsive Design
- Ensures a seamless experience across various devices and screen sizes.
- Utilizes Vue.js for dynamic, client-side rendering to enhance responsiveness.

## Technologies Used

- **Server-Side:**
    - Laravel: A powerful PHP framework for building web applications.
    - Filament: A Laravel package for managing administrative interfaces.
    - MySQL: A relational database management system for storing application data.
    - PHP: A server-side scripting language used in Laravel development.

- **Client-Side:**
    - Vue.js: A progressive JavaScript framework for building user interfaces.
    - JavaScript: A scripting language used for client-side interactivity.
    - HTML/CSS: Markup and styling languages for structuring and designing web pages.

- **Host:**
  - The project will be hosted in azure using docker to build the container.

## Installation

1. Clone the CodeTalk repository from GitHub:
   git clone https://github.com/jessecarvalho/CodeTalk.git

2. Navigate to the project directory:
   cd CodeTalk

### Run the server

3. Navigate to the server directory:
   cd server

4. Install PHP dependencies using Composer:
   composer install

5. Install JavaScript dependencies using npm:
   npm install

6. Set up the environment configuration:
- Rename the `.env.example` file to `.env`.
- Configure your database settings in the `.env` file.

7. Generate the application key:
   php artisan key:generate

8. Run the database migrations:
   php artisan migrate

9. Serve the application:
   php artisan serve

10. Access the application in your web browser at `http://localhost:8000`.

### Run the client

11. Navigate to the client folder: cd .. cd client
12. install the node modules: npm run install
13. run the serve locally: npm run dev
14. Access the application in your web browser at `http://localhost:5173`.


## Usage

1. Register for an account or log in if you already have one.
2. Create, edit, or delete blog posts from your dashboard.
3. Organize posts into categories and assign tags for better organization.
4. Engage with other users by commenting on their posts.
5. Explore content using the search functionality.
6. Enjoy reading and contributing to the CodeTalk community!

## Contributing

We welcome contributions from the community to improve and enhance CodeTalk. If you'd like to contribute, please follow these steps:

1. Fork the repository on GitHub.
2. Create a new branch for your feature or bug fix.
3. Make your changes and ensure they adhere to the project's coding standards.
4. Write tests for your code if applicable.
5. Commit your changes and push them to your fork.
6. Submit a pull request to the main repository.

## Support

If you encounter any issues or have questions about CodeTalk, please [create a new issue](https://github.com/jessecarvalho/code-talk/issues) on GitHub, and we'll do our best to assist you.

## License

CodeTalk is open-source software licensed under the MIT License. Feel free to use, modify, and distribute it as per the terms of the license.

---

Thank you for choosing CodeTalk! We hope you find it valuable for your blogging needs. Happy coding!
