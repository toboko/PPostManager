#PPostManager [by Nicola Bombaci](http://nicolabombaci.com/ "Nicola Bombaci Webpage")
With PPostManager you can manage a little databse on your personal webpage. If you are not using CMS like Wordpress,
Joomla or others, you can use this little tool to **create**, **modify** or **delete** your post.
 
<img style="float:right!important" src="./img/sidePPost.png">
 
First of all let's think about our DB.
 
I thought, in my opinion, that to create a post for our article, we need: a **title**, a **content**, an **id** as primary key 
and a **date**.
 
So let's create our *database* and our *tables* with coloumns: **title**, **post**, **id** (Primary Key), **date**.

Next step will be setting the file *common/setup.php* and insert:

**$host** = "ourhost";

**$db_user** = "ouruser";

**$db_psw** = "ourpassword";

**$db_name** = "ourdatabase";

**$path_img** = glob("../path/for/images/*.*");

**$upload_url** = "../path/to/upload/";

After this, our tool is ready to work. We will have two fields: **Title** and **Post**. When we write a post we will do it
with markup language and on live we will see the results on the window, **Preview**.

#You can
###Create
we must type on title field, on post field and press **Create New Post**.

###Update
select an item from menu **Select Table** and click on the post to modify, the fields title and post will update
and you could change the previous strings. When you will finish press **Modify**.

###Delete
select an item from menu **Select Table** and click on the post to delete, than press **Delete**.

###Upload
drag and drop your images in the **Upload Window** or press on it for multiple upload

###Insert Images
select **Images** to view the content of your default path then the images. You can drag you favourite image and drop inside the post field
#Thanks to
+ [Jquery](https://jquery.com/ "Jquery") for the engine
+ [Bootstrap](http://getbootstrap.com/ "Bootstrap") for the graphics
+ [erusev](https://github.com/erusev "erusev") for [Parsedown](https://github.com/erusev/parsedown "Parser Markdown")
+ [enyo](https://github.com/enyo "enyo") for [Dropzone](https://github.com/enyo/dropzone "Dropzone")
+ [ericleong](https://github.com/ericleong "ericleong") for [Zoomwall](https://github.com/ericleong/zoomwall.js "Zoomwall")

<img style="display:block!important;margin-left:auto!important;margin-right:auto!important;" src="./img/mainPPost.jpg">