# PhpSynoptic
This is a website done with mysql and php,in this website the user can create account login,The user can create post on the post page,edit and delete a post.

Data submission:The user can submit data from the html form,and all the data is storted in mysql tables.

File structure:
The images folder has all the icons used in the navbar
and all the images used in the project.

includes file, 
db-handler  has the code of the connection of the database with the files.
footer.php has the footer in it
header.php has the naviagtion bar html code and the style links 
headernonav ahs only text.

sqldatabase folder  has an sql file of the database.

The uploads file has all the images upload on the add photos page.

Pages
The php tag on top  and a the bottom of each file is used to call the connection of the dtaabse and the navigation and footer.

In the aboutus.php page,there is some html.

The addimage.php file,insert the data into the gallery page and retrive the data by using select.

In the createaccount.php checks the validations when one is creating an account
Insert the data into users table and from the form.

createPost.php has the form to add the text and image.

deletpost.php deletes the post.

editpost.php gets all the data and update it  from the posts table.

index.php  page select the data from post and insert data to posts.

login.php page checks that the credentials inputted by the user.

logout.php destroy session and goes back to login.

process.php updates the post

profile.php shows all the account information of the user.

style.css has all the styling used throughout the whole project.

To run this project one needs to have xammp or mamp program.
To use this project after download one goes in htdocs in xampp or mampp folder
add file there then open the broswer and type local host/PhpSynoptic.