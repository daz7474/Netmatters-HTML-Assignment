# Netmatters Homepage Clone

### Setup

Follow these steps to set up the project locally and view it:

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/daz7474/Netmatters-Homepage-Clone.git
    ```

2. **Create .env File:**

    Create a `.env` file in the root of your project and set up environment variables.

    Example .env file:

    ```env
    DB_HOST=localhost
    DB_NAME=your_database_name
    DB_USER=your_database_user
    DB_PASSWORD=your_database_password
    ```

3. **Import the Database:**

    Import the db-dump to create the required tables. 

4. **View the Project:**

    Navigate to [http://localhost:8000](http://localhost:8000) to view the project.

### Project Structure

- **`index.php`**: Main PHP file.
- **`contact-us.php`**: Contact page PHP file.
- **`css/`**: Directory containing compiled stylesheet from Sass.
- **`scss/`**: Directory containing Sass partials and output Sass stylesheet. 
- **`js/`**: Directory containing JavaScript files.
- **`include/`**: Directory containing PHP files and server-side logic.
- **`img/`**: Directory containing project images.
- **`db-dump.sql`**: MySQL database dump file.