# ✨ My Theme – WordPress Landing Page Theme with Form Integration

My Theme is a custom WordPress theme designed to serve as a clean, responsive landing page. It’s perfect for local businesses, product launches, or anyone who needs a simple, focused website with a built-in contact or order form.

This theme is part of the wordpress-projects repository and was built to be lightweight, modular, and easy to extend.

## 📌 Key Features

- 🎯 Minimalist and conversion-focused design

- 📱 Responsive layout (mobile-ready)

- 📝 Built-in contact/order form powered by Formspree

- 🐳 Docker-based local development environment

- 🧩 Easy to customize using HTML, CSS, and PHP

- 🌐 Ideal for landing pages, service promotions, or product showcases


## How it looks: 

🎥 Watch the demo video: https://youtu.be/uRWdT_-Zulk


## 🧰 Project Structure

```bash
wordpress-projects/
├── docker-compose.yml
├── .env.example
├── .gitignore
├── README.md
├── wp-themes/
│   └── my-theme/
│       ├──fonts/
│       │   └── [font files]
│       ├── img/
│       │   └── [image files]
│       ├── js/
│       │   └── main.js
│       ├── footer.php
│       ├── functions.php
│       ├── header.php
│       ├── index.php
│       └──  style.css
├── other-themes[from wordpress]
```
Each file follows WordPress standards and is focused on keeping things simple and clean.

## 📩 How the Form Works

The theme includes an HTML form integrated with Formspree.io, which allows form submissions to be emailed without backend code.

### To connect your form:

1. Create a free account at Formspree.

2. Set up a new form and copy your unique form URL (e.g. https://formspree.io/f/abcxyz).

3. In your theme (in `index.php`), replace the form’s `actio`n attribute with your Formspree URL:

```html
<form action="https://formspree.io/f/your-id" method="POST">
  ...
</form>
```
## 🐳 Local Development with Docker

This project includes a docker-compose.yml file to quickly set up a local WordPress + MySQL environment.

### Steps:

1. Make sure you have Docker and Docker Compose installed.

2. Clone the repository and navigate into the project folder:

```bash
git clone git@github.com:Macfe1/wordpress-projects.git
cd wordpress-projects
```

3. Create a .env file based on .env.example and fill in your database credentials:

```bash
cp .env.example .env
```

4. Start the containers:

```bash
docker-compose up -d
```

5. Visit http://localhost:8080 to access your WordPress site.

The wp-themes folder is mounted into the container so any changes to your theme code are immediately reflected in the browser.

## 🛠️ Customization
This is a code-based theme. You can edit the files directly to match your brand:

- style.css: Add or edit styles

- index.php: Main structure

- functions.php: Theme setup and script loading

- header.php / footer.php: Site wrapper
