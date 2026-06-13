# Flytify — Kum Inc. Brochure Generator

> A web app where users fill in their business details, pick a template, and get a professional brochure instantly.

## What This Project Does

1. A visitor comes to the landing page (`index.php`)
2. They click "Create Your Brochure" and go to the builder (`test.php`)
3. They pick a template (Classic or Modern), fill in their info, choose colours, upload a logo
4. They click "Generate"
5. The app saves their data to a MySQL database
6. A custom brochure is generated using their data
7. They are redirected to a thank you page where they can view their brochure

## Technologies Used

- HTML, CSS, JavaScript (frontend)
- PHP (backend processing)
- MySQL (database)
- XAMPP (local development server)

## How to Run Locally

1. Clone the repository
2. Move the folder to `C:\xampp\htdocs\flytify`
3. Start Apache and MySQL from XAMPP Control Panel
4. Copy `.env.example` to `.env` and fill in your database details
5. Import `config/schema.sql` into phpMyAdmin
6. Visit `http://localhost/flytify/`

## Features Built

- ✅ Landing page with template previews
- ✅ Brochure builder form with live colour preview
- ✅ Logo upload with preview
- ✅ Form validation
- ✅ 2 brochure templates (Classic and Modern)
- ✅ PHP form processing
- ✅ MySQL database storage
- ✅ Thank you page after generation
- ✅ Brochure saved as HTML file

## Author

Kum Inc. Internship Project  2026