#PPostManager [by Nicola Bombaci](http://nicolabombaci.com/ "Nicola Bombaci Webpage")
With PPostManager you can manage a little databse on your personal webpage. If you are not using CMS like Wordpress,
Joomla or others, you can use this little tool to **create**, **modify** or **delete** your post.
 
<img style="float:right" src="./img/sidePPost.jpg">
 
First of all let's think about our DB.
 
I thought, in my opinion, that to create a post for our article, we need: a **title**, a **content**, an **id** as primary key 
and a **date**.
 
So let's create our *database* and our *tables* with coloumns: **title**, **post**, **id** (Primary Key), **date**.

Next step will be setting the file *common/config.php* and insert

**$host** = "ourhost";

**$db_user** = "ouruser";

**$db_psw** = "ourpassword";

**$db_name** = "ourdatabase";