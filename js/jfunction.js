//Global Variable
var tab_name = "";

function parseContent(str) {
	    if (str == "") {
	        document.getElementById("postShow").innerHTML = "";
	    } else { 
	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp1 = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp1.onreadystatechange = function() {
	            if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
	                document.getElementById("postShow").innerHTML = xmlhttp1.responseText;
	            }
	        }
	        xmlhttp1.open("POST","./php/parseContent.php",true);
	        xmlhttp1.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	        xmlhttp1.send("post=" + str);
	    }
	}
function titleUpdate(id) {
    if (id == "") {
        document.getElementById("titleInsert").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp2 = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp2.onreadystatechange = function() {
            if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        		$("#titleInsert").val(xmlhttp2.responseText);
            }
        }
        xmlhttp2.open("POST","./php/titleUpdate.php",true);
        xmlhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp2.send("id=" + id + "&table=" + tab_name);
        $('#idPost').val(id);
    }
}
function postUpdate(id) {
    if (id == "") {
        document.getElementById("postInsert").innerHTML = "";
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp3 = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp3.onreadystatechange = function() {
            if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
                $("#postInsert").val(xmlhttp3.responseText);
                parseContent($("#postInsert").val());
            }
        }
        xmlhttp3.open("POST","./php/postUpdate.php",true);
        xmlhttp3.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp3.send("id=" + id + "&table=" + tab_name);
        return titleUpdate(id);
    }
}
function postView() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp4 = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp4 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp4.onreadystatechange = function() {
        if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200) {
            document.getElementById("postView").innerHTML = xmlhttp4.responseText;
        }
    }
    xmlhttp4.open("POST","./php/postView.php",true);
    xmlhttp4.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp4.send("req=yes" + "&table=" + tab_name);
}
function postModify() {
    var id 		= $("#idPost").val()
    var title 	= $("#titleInsert").val();
    var post	= $("#postInsert").val();
    
    if (id == "" || title == "" || post == "") {
        document.getElementById("success").innerHTML = "" +
        		"<div class='alert alert-danger' role='alert'>" +
        		"<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>" +
        		"Input not found</div>";
    } else { 
	    if (window.XMLHttpRequest) {
	        // code for IE7+, Firefox, Chrome, Opera, Safari
	        xmlhttp5 = new XMLHttpRequest();
	    } else {
	        // code for IE6, IE5
	        xmlhttp5 = new ActiveXObject("Microsoft.XMLHTTP");
	    }
	    xmlhttp5.onreadystatechange = function() {
	        if (xmlhttp5.readyState == 4 && xmlhttp5.status == 200) {
	            document.getElementById("success").innerHTML = xmlhttp5.responseText;
	            return postView();
	        }
	    }	    
	    xmlhttp5.open("POST","./php/postModify.php",true);
	    xmlhttp5.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	    xmlhttp5.send("id="+ id + "&title="+ title + "&post="+ post + "&table=" + tab_name);
    }
}
function postCreate() {
    var title 	= $("#titleInsert").val();
    var post	= $("#postInsert").val();
    
    if (title == "" || post == "") {
        document.getElementById("success").innerHTML = "" +
        		"<div class='alert alert-danger' role='alert'>" +
        		"<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>" +
        		"Input not found</div>";
    } else { 
	    if (window.XMLHttpRequest) {
	        // code for IE7+, Firefox, Chrome, Opera, Safari
	        xmlhttp6 = new XMLHttpRequest();
	    } else {
	        // code for IE6, IE5
	        xmlhttp6 = new ActiveXObject("Microsoft.XMLHTTP");
	    }
	    xmlhttp6.onreadystatechange = function() {
	        if (xmlhttp6.readyState == 4 && xmlhttp6.status == 200) {
	            document.getElementById("success").innerHTML = xmlhttp6.responseText;
	            return postView();
	        }
	    }	    
	    xmlhttp6.open("POST","./php/postCreate.php",true);
	    xmlhttp6.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	    xmlhttp6.send("title="+ title + "&post="+ post + "&table=" + tab_name);
    }
}
function postRemove() {
    var id 	= $("#idPost").val()
    
    if (id == "") {
        document.getElementById("success").innerHTML = "" +
        		"<div class='alert alert-danger' role='alert'>" +
        		"<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>" +
        		"Input not found</div>";
    } else { 
	    if (window.XMLHttpRequest) {
	        // code for IE7+, Firefox, Chrome, Opera, Safari
	        xmlhttp7 = new XMLHttpRequest();
	    } else {
	        // code for IE6, IE5
	        xmlhttp7 = new ActiveXObject("Microsoft.XMLHTTP");
	    }
	    xmlhttp7.onreadystatechange = function() {
	        if (xmlhttp7.readyState == 4 && xmlhttp7.status == 200) {
	            document.getElementById("success").innerHTML = xmlhttp7.responseText;
	            return postView();
	        }
	    }	    
	    xmlhttp7.open("POST","./php/postRemove.php",true);
	    xmlhttp7.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	    xmlhttp7.send("id="+ id + "&table=" + tab_name);
    }
}
function tableChange(table) {    
    if (table== "") {
        document.getElementById("success").innerHTML = "" +
        		"<div class='alert alert-danger' role='alert'>" +
        		"<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>" +
        		"Table not found</div>";
    } else { 
    	tab_name = table;
    	document.getElementById("success").innerHTML = "" +
    			"<div class='alert alert-success' role='alert'>" +
    			"Table changed</div>";
    	$("#idPost").val("")
    	$("#titleInsert").val("");
    	$("#postInsert").val("");
    	document.getElementById("postShow").innerHTML = " ";
    	return postView();
    			
    }
}
function tableUpdate() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp8 = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp8 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp8.onreadystatechange = function() {
        if (xmlhttp8.readyState == 4 && xmlhttp8.status == 200) {
            document.getElementById("tableView").innerHTML = xmlhttp8.responseText;
        }
    }
    xmlhttp8.open("POST","./php/tableUpdate.php",true);
    xmlhttp8.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp8.send("req=yes");
}
function imageUpdate() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp9 = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp9 = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp9.onreadystatechange = function() {
        if (xmlhttp9.readyState == 4 && xmlhttp9.status == 200) {
            document.getElementById("zoomwall").innerHTML = xmlhttp9.responseText;
        	setTimeout(function(){
				zoomwall.create(document.getElementById('zoomwall'));
			},200);
        }
    }
    xmlhttp9.open("POST","./php/imageUpdate.php",true);
    xmlhttp9.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp9.send("req=yes");
}