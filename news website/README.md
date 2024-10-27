# News Website

A simple, PHP-based news website with login functionality.

## Project Setup

1. **Database Setup**
   - Import the `sql/create_users_table.sql` file to create the `users` table in your MySQL database.

2. **Database Connection Configuration**
   - Update `php/database.php` with your database credentials:
     - `servername`: e.g., `localhost`
     - `username`: Database username
     - `password`: Database password
     - `dbname`: Database name (e.g., `news_website`)

3. **Run the Website**
   - Open `index.php` in your browser, or start a local server with a tool like XAMPP or WAMP. Place all project files within the `htdocs` (XAMPP) or `www` (WAMP) directory for local testing.

4. **JavaScript**
   - Add any JavaScript interactivity in `js/main.js` to enhance site functionality as needed.

5. **Login and Authentication**
   - **Login**: Access the login page at `login.html`.
   - **Logout**: The `logout.php` page clears session data and redirects users to `login.html`.

6. **Directory Structure**
   - **php/**: Contains PHP scripts (e.g., `login.php`, `logout.php`, `database.php`).
   - **sql/**: Holds SQL setup files (e.g., `create_users_table.sql`).
   - **css/**: Contains CSS files for styling (e.g., `styles.css`).
   - **js/**: JavaScript files (e.g., `main.js`).
   - **templates/**: Reusable templates (e.g., `header.html`, `footer.html`).
   - **pages/**: Additional HTML/PHP pages for the site.
   
## Additional Notes

- Ensure your PHP server is running, especially for pages that interact with the backend.
- Passwords should be hashed when stored in the database (using `password_hash` in PHP).
