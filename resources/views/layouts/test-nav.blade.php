<!DOCTYPE html>
<html>
<head>
	<title>Test nav1</title>
	<script>
		<!-- Core -->
<link href="flxMenu.css" rel="stylesheet">
<!-- Dark Theme -->
<link href="flxMenu_ThemeDark.css" rel="stylesheet">
<!-- Light Theme -->
<link href="flxMenu_ThemeBright.css" rel="stylesheet">
2. Create the multi-level dropdown navigation from a nested HTML list.


3. Include jQuery library and the main JavaScript jquery.flxMenu.min.js at the bottom of the page.

<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous"></script>
<script src="jquery.flxMenu.min.js"></script>
4. Call the function on the top container and specify the trigger element.

$(document).ready(function(){
  $("#menu").flxMenu( $("#Trigger"), {
    // options here
  });
});
5. All possible options which can be passed as the second parameter to the flxMenu function.

$(document).ready(function(){
  $("#menu").flxMenu( $("#Trigger"), {

    // time in ms to open submenu
    duration: 300,        

    // orientation of the navigation bar in desktop mode
    // "horizontal" or "vertical"
    orientation: "horizontal",  

    // in desktop mode submenu will not show up on hover but on clicking the main item. 
    smShowByClick: false,   

    // popup menu slides in from top, left or right hand side
    puSlideInFrom: "top",   

    // popup menu closes when item is selected.
    puCloseOnSelect: false,   

    // when popup menu opens, any submenu which contains the active item will be opened. 
    puShowActiveItem: false,  

    // popup menu aligned to trigger DIV
    puAligned: false, 

    // is fullscreen?    
    puFullRange: true,

    // class which identifies submenu tags (UL or DIV)
    smFilterClass: false,   

    // special handling for different frameworks
    framework: false,     

    // debug mode
    debug: false,

    fnChanged: function (toButton, $newFrame, $oldFrame) {___flxMenuDebug(true, 'Moved bar from {1} to {0}', $newFrame[0].id, $oldFrame[0].id);},
    fnInit: function(menuFrame, buttonFrame){},
    fnSubmenuClosing: function($submenu){ ___flxMenuDebug(true, 'closing submenu of <{0} id="{1}">', $submenu[0].nodeName, $submenu.attr("id")); },
    fnPopupShowing: function(showup){ ___flxMenuDebug(true, 'Popup showing {0} ', showup);}
    
  });
});
	</script>
</head>
<body>
<div id="NavBar">
  <div id="Trigger" >
  </div>
  <ul id="menu">
    <li><a href="javascript:">Home</a></li>
    <li><a href="javascript:">Category</a>
      <ul>
        <li><a href="javascript:">Category 1</a></li>
        <li><a href="javascript:">Category 2</a></li>
      </ul>
    </li>
    <li><a href="javascript:">Item 3</a>
      <ul>
        <li><a href="javascript:">Item 3-1</a>
        <ul>
          <li><a href="javascript:">Item 3-1-1</a></li>
          <li><a href="javascript:">Item 3-1-2</a></li>
        </ul>
        </li>
        <li><a href="javascript:">Item 3-2</a>
        <ul>
          <li><a href="javascript:">Item 3-2-1</a></li>
          <li><a href="javascript:">Item 3-2-2</a></li>
        </ul>
        </li>

      </ul>
    </li>
    <li><a href="javascript:">Contact</a>
      <ul>
        <li><a href="javascript:">Contact</a></li>
        <li><a href="javascript:">About</a></li>
      </ul>
    </li>
  </ul>
</div>
</body>
</html>