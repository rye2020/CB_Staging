    <!---Responsive tables---------------------------->
	// Detect mobile device and change to single column
    window.addEventListener('load', jmMobile);
		
    screen.orientation.addEventListener('change', jmInsert); 
		
	function jmInsert() {
		var myWrap = document.getElementById('jmWrap');
		if ( jmWrap !== null) {
		var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
		var myDiv = document.getElementById('jm-filter');
		var myTopDiv = document.getElementById('top');
		let orientationType = screen.orientation.type; // e.g., "portrait-primary", "landscape-secondary"
		if(isMobile) {
			if (orientationType.includes ("portrait")) {
				myDiv.remove();
				myTopDiv.style.paddingLeft = "10px";
				alert("Portrait");
			} else {
			if (!myDiv){
				myTopDiv.style.paddingLeft = "40px";
				alert("Landscape");
				myWrap.innerHTML = `
<div id="jm-filter" style="width:250px; ">
	<br><br><br><br>
<?php include ( get_stylesheet_directory() . '/includes/FilterAGGform.php'); ?>
<?php include ( get_stylesheet_directory() . '/includes/RecentPosts_inc.php');?>
</div>
`;
			}
			}
		}	
	};
	}

  function jmMobile() {
    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    var myDiv = document.getElementById('jm-filter');
	var myTopDiv = document.getElementById('top');
    var tbHead = document.querySelector('.t1CanadianCBD');
    const jmWidth = window.innerWidth;
    
	alert("width: " + jmWidth + "");
	alert("isMobile: " + isMobile + "");
	alert("Size: " + (jmWidth < 768) + "");
	alert(myDiv);
    if (isMobile && ( jmWidth < 768 ) ) {
        myDiv.remove();         // Remove filters and recent posts
		myTopDiv.style.paddingLeft = "10px";
		tbHead.style.width = "100%";
		alert(jmWidth);
    } 
	if (isMobile) { 
		tbHead.style.width = "100%";
		alert(jmWidth);
	}
}
	
