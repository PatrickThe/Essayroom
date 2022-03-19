<html>
<head>
<title>Extract Content from a Remote Page using PHP</title>
<style type="text/css">
body {
	font-family: arial;
	line-height: 30px;
}

.frm-url-container {
	border: #ced1d4 1px solid;
	border-radius: 4px;
	max-width: 550px;
	padding: 5px;
	position: relative;
}

.url-input {
	width: 100%;
	border: none;
	height: 25px;
	padding-left: 10px;
	font-family: Arial, Helvetica, sans-serif;
	padding-right: 30px;
	min-height: 50px;
}

.url-input:focus {
	outline: none;
}

.image-container {
	position: relative;
	z-index: 1;
}

.image-preview {
	width: 100%;
	margin-right: 100px;
}

.image-preview img {
	width: 100%;
	height: 340px;
}

#loader {
	position: absolute;
	right: 10px;
	margin-top: -12px;
	width: 16px;
	height: 24px;
	top: 50%;
	display: none;
}

#output {
	display: none;
}

.page-title {
	color: #000;
	text-decoration: none;
	font-size: 1.2em;
	line-height: 30px;
}

.text-data {
	margin-top: 20px;
}

.prev-next-navigation .prev-img {
	background: url(prev-img.png) no-repeat center center;
	display: inline-block;
	width: 16px;
	height: 16px;
	cursor: hand;
	cursor: pointer;
	border: #9a9b9a 1px solid;
	padding: 3px;
	opacity: 0.5;
}

.prev-next-navigation .next-img {
	background: url(next-img.png) no-repeat center center;
	display: inline-block;
	width: 16px;
	height: 16px;
	cursor: hand;
	cursor: pointer;
	border: #9a9b9a 1px solid;
	padding: 3px;
	opacity: 0.5;
}
</style>

<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var image_src;
    $('#remote-url').on("keyup", function() { 	
				$("#output").html("");
				$("#loader").show(); 
				
				var remote_url = $(this).val();
			    var image_html = '';
                
				$.ajax({
                    url: "get-data.php",
                    type: "POST",
                    data: {'url': remote_url},
                    dataType: "json",
                    success: function(data, status){
                        	image_src = data.image_src;
        					total_images = 0;
                            if(data.image_src) {
                                total_images = parseInt(data.image_src.length-1);
                                current_image_position = total_images;
            					
                					if(total_images>=0){
                						image_html = '<div class="image-preview" id="image-preview"><img src="'+data.image_src[current_image_position]+'"></div>'+
                                        '<div class="prev-next-navigation"><span class="prev-img" id="prev-img">&nbsp;</span><span class="next-img" id="next-img">&nbsp;</span> </div>';
                					}
                            }
                         
                         cotent_html = '<div class="text-data"><a class="page-title" href="'+remote_url+'" target="_blank">'+data.title+'</a><div>'+data.body+'</div>';
        					var responseHTML = image_html + cotent_html;
        					
        					$("#output").html(responseHTML).show(); 
        					$("#loader").hide();
                    },
                    error: function () {alert("Problem in extracting data from the remote URL");}
                });
	});


	$("body").on("click","#prev-img", function(e){		
		if(current_image_position>0) 
		{
			current_image_position--;
			$("#image-preview").html('<img src="'+image_src[current_image_position]+'">');
		}
	});
	
	$("body").on("click","#next-img", function(e){		
		if(current_image_position<total_images)
		{
			current_image_position++;
			$("#image-preview").html('<img src="'+image_src[current_image_position]+'">');
		}
	});
});
</script>
</head>
<body>
    <div class="frm-url-container">
        <img id="loader" src="loader.gif"> <input id="remote-url"
            placeholder="Paste URL" class="url-input" />
        <div id="output"></div>
    </div>

</body>
</html>