# Web Final

A collection of PHP, MySQL, JavaScript, and HTML practice exercises for web
programming coursework. The repository contains standalone examples rather
than one single application. Most files are intended to be opened or served
individually.

## Repository layout

### Topic templates and numbered exercises

- [`PHP/`](./PHP/) - PHP form-processing exercises and a blank PHP form
  template.
  - [`243.php`](./PHP/243.php) - pizza order calculations.
  - [`251.php`](./PHP/251.php) - venue and seating calculations.
  - [`252.php`](./PHP/252.php) - cinema screen, seating, and waste
    calculations.
  - [`253.php`](./PHP/253.php) - sales target and performance calculations.
  - [`261.php`](./PHP/261.php) - credit and academic progress calculations.
  - [`template.php`](./PHP/template.php) - starter form with three inputs.
- [`MySql/`](./MySql/) - PHP/MySQL query exercises and a query-writing
  template.
  - [`243.php`](./MySql/243.php) - queries using the `uiuweb_final` database.
  - [`251.php`](./MySql/251.php) - queries using the `uiutech_final` database.
  - [`252.php`](./MySql/252.php) - queries using the `sundarban` database.
  - [`253.php`](./MySql/253.php) - queries using the `campus_library`
    database.
  - [`261.php`](./MySql/261.php) - queries using the `tourism` database.
  - [`template.php`](./MySql/template.php) - starter `mysqli` connection,
    query, and result-loop example.
- [`JavaScript/`](./JavaScript/) - browser-based JavaScript exercises.
  - [`243.html`](./JavaScript/243.html) - user-guess interaction.
  - [`251.html`](./JavaScript/251.html) - venue and seating calculations.
  - [`252.html`](./JavaScript/252.html) - cinema seating calculations.
  - [`253.html`](./JavaScript/253.html) - sales performance calculations.
  - [`261.html`](./JavaScript/261.html) - credit and academic progress
    calculations.
  - [`template.html`](./JavaScript/template.html) - starter input/output
    page for JavaScript practice.

### Semester and assessment exercises

- [`Fall25/`](./Fall25/) - Fall 2025 exercises.
  - [`q1.html`](./Fall25/q1.html) and [`script.js`](./Fall25/script.js) -
    client-side course-mark calculation.
  - [`q1.php`](./Fall25/q1.php) - server-side course-mark calculation.
  - [`q2.php`](./Fall25/q2.php) - server-side item/performance calculation.
  - [`q3.php`](./Fall25/q3.php) - four MySQL queries for the
    `campus_library` database.
- [`Spring26/`](./Spring26/) - Spring 2026 exercises.
  - [`q1.html`](./Spring26/q1.html) and [`q1.js`](./Spring26/q1.js) -
    study-subject and study-hours interaction.
  - [`q2.php`](./Spring26/q2.php) - server-side credit/progress calculation.
  - [`q3.php`](./Spring26/q3.php) - four MySQL queries for the `tourism`
    database.
- [`Spring26-A/`](./Spring26-A/) - Spring 2026 section A exercises.
  - [`q1.html`](./Spring26-A/q1.html) - JavaScript interaction.
  - [`q2.php`](./Spring26-A/q2.php) - server-side credit/progress
    calculation.
  - [`q3.php`](./Spring26-A/q3.php) - four MySQL queries for the `tourism`
    database.
- [`Spring26-B/`](./Spring26-B/) - Spring 2026 section B exercises.
  - [`q1.html`](./Spring26-B/q1.html) - JavaScript interaction.
  - [`q2.php`](./Spring26-B/q2.php) - server-side energy and battery
    calculation.
  - [`q3.php`](./Spring26-B/q3.php) - MySQL queries for the `uiu_bookshop`
    database.
- [`Summer25/`](./Summer25/) - Summer 2025 exercises.
  - [`q1.html`](./Summer25/q1.html) and [`q1.js`](./Summer25/q1.js) -
    client-side calorie-entry interaction.

## Requirements

- [XAMPP](https://www.apachefriends.org/) or another local PHP server.
- PHP with the `mysqli` extension for the database exercises.
- MySQL/MariaDB for the files in [`MySql/`](./MySql/) and the `q3.php` files.
- A modern web browser for the HTML and JavaScript exercises.

There is no Composer project, npm project, framework, or dependency manifest
in this repository. The examples use only PHP, HTML, CSS-free browser APIs,
JavaScript, and `mysqli`.

## Running the exercises with XAMPP

1. Place or clone this repository under XAMPP's web root:
   `C:\xampp\htdocs\Web-Final`.
2. Start **Apache** in the XAMPP Control Panel.
3. Start **MySQL** as well when running a database exercise.
4. Open an exercise in a browser. For example:

   `http://localhost/Web-Final/PHP/243.php`

   Other examples can be opened by replacing the path with the desired
   relative file path, such as:

   - `http://localhost/Web-Final/JavaScript/243.html`
   - `http://localhost/Web-Final/Fall25/q1.php`
   - `http://localhost/Web-Final/Spring26/q1.html`

5. For a JavaScript-only page, opening the `.html` file directly may work,
   but using Apache keeps the execution environment consistent.

## MySQL setup

The database examples connect to `127.0.0.1` on port `3306` using the local
`root` account with an empty password. Before opening one of these files,
create/import the database and tables expected by that exercise:

| Exercise group | Database referenced |
| --- | --- |
| `MySql/243.php`, `Fall25/q3.php` | `uiuweb_final` / `campus_library` respectively |
| `MySql/251.php` | `uiutech_final` |
| `MySql/252.php` | `sundarban` |
| `MySql/253.php` | `campus_library` |
| `MySql/261.php`, `Spring26/q3.php`, `Spring26-A/q3.php` | `tourism` |
| `Spring26-B/q3.php` | `uiu_bookshop` |

The repository does not include SQL schema or seed files, so the table
definitions and sample data must be supplied separately. The connection
settings are written directly in the example files; update the host, port,
username, password, or database name if the local MySQL installation differs.

## Notes

- PHP examples process submitted values with `POST` and are designed for
  classroom practice, not production deployment.
- MySQL examples display query results directly in the generated page.
- The `template` files are starting points and contain placeholder input,
  database, query, and column names that must be replaced before use.
- Input validation, authentication, authorization, and production-safe
  credential management are outside the scope of these exercises.