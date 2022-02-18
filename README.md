# Simple Blog Project <a name="readme-top"></a>

A simple web application for a blog using PHP and MySQL.

## Description

This simple blogging application includes username and password authentication and the full suite of CRUD tasks for blog posts. The project works on HTML, CSS, PHP, and MySQL on Apache server using XAMPP.

#### Blog Posts

A blog post consists of the following elements:

* Title of the Post.
* Content of the Post.
* Date/Time Stamp when the Post was saved.

#### Unauthenticated User Stories

A non-authenticated user is able to:

* View a home page that lists the title, date/time stamp and excerpt of the 5 most recently posted blog entries (in reverse chronological order).
* Click the title and "Read Full Post" links on the home page to view a full blog post.

#### Authenticated User Stories

An authenticated user is able to:

* Post a new blog entry using an HTML form.
* Edit any of the existing posts using an HTML form.
* Delete any of the existing posts.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Demo

Here is a working live demo: https://simple-blog.epizy.com/  
*Login: user / Password: 123*

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Built With

* ![HTML5](https://img.shields.io/badge/-HTML5-E34F26.svg?style=flat&logo=html5&logoColor=white)
* ![CSS3](https://img.shields.io/badge/-CSS3-1572B6.svg?style=flat&logo=css3&logoColor=white)
* ![PHP](https://img.shields.io/badge/-PHP-777BB4.svg?style=flat&logo=php&logoColor=white)
* ![MySQL](https://img.shields.io/badge/-MySQL-00000F?style=flat&logo=mysql&logoColor=white)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Features

* Five most recent blog posts displayed in reverse chronological order.
* If blog content is larger than 200 characters, the displayed content is truncated to 200 characters and a "Read Full Post" link is displayed after the content.
* New / Updated Posts are validated to ensure the title and content are both at least one character in length.
* Any `id` values the user passes are validated as integers before executing a `SQL` query. All strings submitted by the user (POSTed titles and blog content) are sanitized using `input_filter` to avoid `SQL Injection`.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Getting Started

### Prerequisites

* Download and Install [XAMPP](https://www.apachefriends.org/index.html).

### Installation

* Download the ZIP or Clone the repository.
* Move the project to the Root Directory. Local Disk C is the location where XAMPP was installed:
  ```sh
  Local Disc C: -> xampp -> htdocs -> 'blog'
  ```
* Open the XAMPP Control Panel and start `Apache` and `MySQL`.
* Create a MySQL database and configure a MySQL user. From the PHPMyAdmin SQL tab, execute the following commands:
  ```sql
  CREATE DATABASE blog;
  CREATE USER 'bloguser'@'localhost' IDENTIFIED BY 'my_password';
  GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, ALTER 
    ON blog.* TO 'bloguser'@'localhost';
  ```
  You can replace `bloguser` and `my_password` with your preferred username and password. If you make any changes, be sure to also update the `DB_USER` and `DB_PASS` in the `connect.php` file.
* Import the SQL file `blogs.sql` into the `blog` database.
* Change the `ADMIN_LOGIN` and `ADMIN_PASSWORD` in the `authenticate.php` file. By default, the login is `user` and the password is `123`.
  ```php
  define('ADMIN_LOGIN','user'); // Your "Authenticated user" username instead of 'user'
  define('ADMIN_PASSWORD','123'); // Your "Authenticated user" password instead of '123'
  ```
* Open the blog in your browser.

<p align="right">(<a href="#readme-top">back to top</a>)</p>


