# NBSoft Job Interview Project

## Description

This is a project for 3rd round of interview for a IT Firm NBSoft Web Solutions.
Project consists of 5 tasks employing different aspects of web development. 

## Installation and Usage

This is a single-page project. You should start the server where index.php README.md, .gitignore, etc. are located. At the top of
the home page you can select which task you want to see, and it will show in the container below buttons for task switching.
You can switch to solution for another task at any moment by clicking the task button.

## Tasks

### HTML  
- Build a responsive HTML page for my resume using bootstrap grid
### JavaScript Form Validation 
- Using Bootstrap create a form for registering the user.
Form should contain first name, last name, sex, birth year, adress and city. Form should
contain at least one: textfield, textarea, select, checkbox. Do the form validation
and send form data through AJAX function. After sending data remove form and show success message. 
### External libraries  
- Make a slider. External library https://kenwheeler.github.io/slick/ can be used.
### PHP  
- Write a php functions that scans the folder and all the sub folder and files and then show the content
on the screen. By clicking on a file it should open, by clicking on the folder system should scan and show the content
in the folder
### SQL  
- Relational scheme is given:


    User(id, firstname, lastname, phone, email, dateCreate, dateEdit)  
    Order(id, userId, value, dateCreate, dateEdit)  
    OrderItem(id, orderId, value, productId)  
    Product(id, name, price)  


  - Show all users who registered in the past two days
  - Show first name, last name, Order.id and full value of all orders
  - Show all users that have at least two orders
  - Show first name, last name, order id and number of order items for every order
  - Show first name, last name, order id of orders that have at minimum 2 order items
  - Show all users that have bought at least 3 different order items
