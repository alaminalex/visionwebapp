<SCRIPT src="<?PHP echo $_SESSION["my_server_url"];?>/js/jquery-1.11.0.min.js"></SCRIPT>
<SCRIPT src="<?PHP echo $_SESSION["my_server_url"];?>js/lightbox.min.js"></SCRIPT><LINK href="css/lightbox.css" rel="stylesheet">

<LINK href="<?PHP echo $_SESSION["my_server_url"];?>css/lightbox.css" rel="stylesheet">
<LINK href="<?PHP echo $_SESSION["my_server_url"];?>css/custom.css" rel="stylesheet">

<?php
//include("server_configurations.php");
/*
$filesArray = my_json_decode($_SESSION["logo"]); 
echo "<p align=center><IMG src='".$filesArray[0]['name']."'></p>";
*/
?>
<script>
$(":checkbox").change(function() {
$(this).closest("tr").find("td").toggleClass("checkedHighlight", this.checked);
});
$("#chooseAll_1").change(function() {
$('#chooseAll_1').closest("table").find("tr").find("td").toggleClass("checkedHighlight", this.checked);
});
</script>


	<!-- Add jQuery library -->
	<script type="text/javascript" src="<?PHP echo $_SESSION["my_server_url"];?>lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?PHP echo $_SESSION["my_server_url"];?>lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?PHP echo $_SESSION["my_server_url"];?>source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?PHP echo $_SESSION["my_server_url"];?>source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?PHP echo $_SESSION["my_server_url"];?>source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?PHP echo $_SESSION["my_server_url"];?>source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?PHP echo $_SESSION["my_server_url"];?>source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?PHP echo $_SESSION["my_server_url"];?>source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?PHP echo $_SESSION["my_server_url"];?>source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}


	</style>


<?php  
echo "<div id='fixed-div'>"  ?> 
<?php
/*
$minutes=5;  
$dispUsers=50;  
$t=date('Y-m-d H:i:s', time()-$minutes*60);  
// display users who were active in last 10 minutes  
  
$users=DBLookup("select count(*) from user where lastaccess > '".$t."'");  
if ($users>0) {  
    $sql="select * from user where lastaccess > '".$t."'";  
    $rs=CustomQuery($sql);  
  
    if ($data = db_fetch_array($rs)) {  
        echo $users." active user(s): ".$data["username"];  
    }  
    $count=1;  
    while ($data = db_fetch_array($rs)) {  
      if ($count<$dispUsers) {  
            $count++;  
            echo ", ".$data["username"];  
      }  
        else {  
            echo " ...";  
            break;  
        }  
    }  
}  
*/
?>
<?php echo "</div>"   ?>
