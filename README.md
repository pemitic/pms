
# Simple Products Managment System

PHP is probably one of the easiest programming languages to learn. But in thas aspect resides many traps which prevents many people from really coding in PHP.

For example, many people take years contenting themselves with others codes. All they do is to google any thing they need and manage with the little knowledge in HTML to arrange something. They probably come out with acceptable solutions, but for how long? would you like to learn more for the future or you just want to remain outdated? Do you to want to create a working website by yourself?

**Here are problems I noticed in most beginners:**


- They don't know how to organize a new project folders
- They don't know how to plan, even a simple, application
- They don't know much about HTML
- They don'y know how to layout a simple web page
- They don't know how to create an adequate data model(databases, tables,etc) for a given application
- They can't create a basic code to save data in a database by themselves without piping at someone's
- etc.

> Do not take this wrong, it's just for the purpose of this course. Nothing personal.

I intend to help you solve some of those problems through this little tutorial on how to Create, Read, Update, and Delete data from a database using PHP programming language. In order to illustrate it very well I am going to use a case of products management application. This is far from being a great and perfect example but I think it will suffice to show you how that is done. Beside, the products management system I am going to create here is a very basic one.

- [Read Part 2 here](http://phpocean.com/tutorials/back-end/make-your-first-crud-with-php-part-2-admin-login-panel/35) &raquo;  
- [Have a look at what we are going to do here](http://phpocean.com/demo/pms/) &raquo;

## How is the system going to work?

First we will create an admin access which will allow many admins to login with their username and password.

Once they are logged in they will be able to do following:

* Add a product
* View the full list of products
* View a product's details
* Edit a product
* Delete a product


## Coding standard

I like to precise the coding standard I use for each project in order to make my code accessible to everyone. I have decided not to go for any framework because I assume a beginner who has problems like in this topic would not appreciate a framework or would not know how it works. 

Still, I will be going for Object Oriented paradigm, because I intend to promote good habits. 

That said I am going to use a simple folder structure, and make a single file for each functionality we have to implement. For example, `index.php` for the home page, `list-products.php` to display the list of products, etc.


## Project structure

The project structure/folder structure actually shows how your code is saved in your hard drive. It also shows how different files/functionalities are co-related. That actually helps you know how you can make each part of your application interaction with other.

The other advantage of this is that it helps make clean and maintainable codes, and all frameworks are very good at that.

For this project I will go simple. The root folder will be called `pms`. Inside it I will be creating an `index.php` file which is going to be the starting point of our application. In the root folder I will also add some folders: `config`, this one will contain the configuration files of the application like database connection, and parameters settings; `includes` folder will contain all common parts to the application's files like headers, footers, etc; a `public` folder to put in all images and css files, though we will not have much to do with them, but it's good to explain it. So can start by creating the following folders structure:


> - pms/
>  - config/
>        - dbconnect.php
>  - includes/
>        - functions.php
>  - public/
>		 - css
>        	- style.css
>        - images
> - index.php


>**PS:** this number of files is going to change when I start creating more files or other sub-folders.


This is it. We're now set to start coding the project. I'm going to make this tutorial in short parts to keep you guys motivated and strong. So in the [next part](http://phpocean.com/tutorials/back-end/make-your-first-crud-with-php-part-2-admin-login-panel/35) I am going to tackle the creation of admins and their logging in aspect. Stay tuned and see you around.
