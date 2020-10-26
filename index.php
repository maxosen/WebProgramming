<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programming</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>

<div class="navibar">
<ul>
	<li><a href="#MEMBER"><b>Member Introduction</a></b></li>
	<li><a href="#HTML"><b>HTML</a></b></li>
	<li><a href="#CSS"><b>CSS</a></b></li>
	<li><a href="#JS"><b>JAVASCRIPT</a></b></li>
</ul>
</div>

    <!--Member Intro-->
	<a name="MEMBER"></a>
	<div class = "LXYpart">
    <div class="headtest">
        <h1>Group Member Introduction</h1>
    </div>
	
  
    <div class="box">
    <div class="container">
     <div class="picture">
        <img src="alan.jpg" width="200px" height="200px" />
     </div>
     <div class="overlay">
        <img src="hoverpic2.jpg" width="200px" height="200px" />
		</div>
    </div>
     <div class="text">
        <p><b>  &emsp;Loo Min Jian ()<br>In Charging of CSS Design </br></b></p>
		<ul>
			<li>Major : </li>
			<li>Elective :  </li>
		</ul>
     </div>
    </div>

    <div class="box1">
    <div class="container1">
     <div class="picture1">
        <img src="xyl.jpg" width="200px" height="200px" />
     </div>
     <div class="overlay1">
        <img src="hoverpic2.jpg" width="200px" height="200px" />
    </div>
    </div>
    <div class="text1">
        <p><b>&emsp;Liew Xue Yao ( 143452 )<br>In Charging of HTML & Position Adjustment </br></b></p>
		<ul>
			<li>Major : Networking </li>
			<li>Elective : Security  </li>
		</ul>
    </div>
    </div>

    <div class="box2">
    <div class="container2">
     <div class="picture2">
        <img src="xyl.jpg" width="200px" height="200px" />
     </div>
     <div class="overlay2">
        <img src="hoverpic2.jpg" width="200px" height="200px" />
     </div>
    </div>
    <div class="text2">
        <p><b>&emsp;Lee Zhi Ming ( 143238 )<br>In Charging of HTML Design</br></b></p>
		<ul>
			<li>Major : Artificial Intelligence</li>
			<li>Minor : Management </li>
		</ul>
     </div>
    </div>

    <div class="box3">
    <div class="container3">
     <div class="picture3">
        <img src="weijian1.jpeg" width="200px" height="200px" />
     </div>
     <div class="overlay3">
        <img src="weijian2.jpeg" width="200px" height="200px" />
     </div>
     </div>
    <div class="text3">
        <p><b>&emsp;Ooi Wei Jian ( 142506 )<br>In Charging of PHP Login Design</br></b></p>
		<ul>
		 <li>Major : Security </li>
		 <li>Minor : Management  </li>
		</ul>
     </div>
    </div>

    <div class="box4">
    <div class="container4">
     <div class="picture4">
        <img src="xyl.jpg" width="200px" height="200px" />
     </div>
     <div class="overlay4">
        <img src="hoverpic2.jpg" width="200px" height="200px" />
     </div>
     </div>
     <div class="text4">
        <p><b>&emsp;Ong Joo Hom ()<br>In Charging of Javascript Design</br></b></p>
		<ul>
		 <li>Major : Artificial Intelligence </li>
	     <li>Elective : Networking  </li>
		</ul>
     </div>
    </div>
    </div>
    <!--Member Intro-->



    <!--HTML Section-->
	<a name="HTML"></a>
    <div class = "html1" style="padding: 20px 0 0 20px;">
        <h1>HTML / Hyper Text Markup Language</h1>
        <div class = "htmlrow">
        <div class="htmlcolumn htmlleft">
        <div class = "htmlcard" onclick = "showText(event, 'htmltext1')">
            <img src="card1.jpg" alt="Card" width="320px"
                style = "border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class = "word">
                <h3 style="padding-left: 10px;">What is HTML?</h3>
                <p style="padding: 0 0 15px 10px;">Learn More</p>
            </div>
        </div>
        </div>

        <div class="htmlcolumn htmlmiddle">
        <div class = "htmlcard" onclick = "showText(event, 'htmltext2')">
            <img src="card2.jpg" alt="Card" width="320px"
                style = "border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class = "word">
                <h3 style="padding-left: 10px;">Basic Syntax of HTML</h3>
                <p style="padding: 0 0 15px 10px;">Learn More</p>
            </div>
        </div>
        </div>

        <div class="htmlcolumn htmlright">
        <div class = "htmlcard" onclick = "showText(event, 'htmltext3')">
            <img src="card3.jpg" alt="Card" width="320px"
                style = "border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class = "word">
                <h3 style="padding-left: 10px;">Example of HTML</h3>
                <p style="padding: 0 0 15px 10px;">Learn More</p>
            </div>
        </div>
        </div>

        <div class = "htmlcard" onclick = "showText(event, 'htmltext4')" id = "defaultText">
        </div></div>
        <br>

    <div>
    <div class = "htmloverlay" id = "htmltext4">
        <h4>Advantages of HTML</h4>
        <p>HTML is Easy to Learn and Use</p>
        <p>HTML is Most Friendly Search Engine</p>
        <p>HTML displays changes instantly</p>
        <p>HTML is Free and Supported by all Browsers</p>
        <p>HTML can Integrate Easily with Other Languages</p>
    </div>

    <div class = "htmloverlay" id = "htmltext1">
        <h4>What is HTML?</h4>
        <p>HTML stands for Hyper Text Markup Language</p>
        <p>HTML describes the structure of a Web page</p>
        <p>HTML consists of a series of elements called tags</p>
        <p>HTML tags tell the browser how to display the content</p>
        <p>HTML is like a skeleton, it comes to life with CSS & Javascript</p>
    </div>

    <div class = "htmloverlay" id = "htmltext2">
        <h4>Basic Syntax of HTML</h4>
        <div class = "htmlrow">
        <div class = "htmlcolumn htmlleft1">
        <img src = "htmlstructure.png" alt = "HTML Structure" width = "500px" height = "400px" style = "mix-blend-mode: multiply;">
        </div>
        <div class = "htmlcolumn htmlright1">
        <P>HTML is used to mark up the content within web pages, with structural
            and semantic information that tells browser how to display a page</P>
        <p>&lt;html&gt; element is the root element of HTML page</p>
        <p>&lt;head&gt; element contains meta-info about the document</p>
        <p>&lt;title&gt; element specifies a title for the document</p>
        <p>&lt;body&gt; element contains the visible page content</p>
        <p>&lt;h1&gt; element defines a large heading</p>
        <p>&lt;p&gt; element defines a paragraph</p>
        </div>
        </div>
    </div>

    <div class = "htmloverlay" id = "htmltext3">
        <h4>HTML Table</h4>
        <div class = "htmlrow">
        <div class = "htmlcolumn htmlleft2">
        <table border = "1">
            <caption>Student Major</caption>
            <tr><th>Name</th><th>Major</th></tr>
            <tr><td>Samuel Jackson</td><td>Multimedia</td></tr>
            <tr><td>Tiffany Wong</td><td>Networking</td></tr>
            <tr><td>Anthony Jeff</td><td>Intelligent Systems</td></tr>
        </table>
        </div>
        <div class = "htmlcolumn htmlright2">
        <p>Tables allow web authors to arrange data into rows and colums</p>
        <p>&lt;table&gt; element defines table</p>
        <p>&lt;tr&gt; element defines table row</p>
        <p>&lt;th&gt; element defines table header</p>
        <p>&lt;td&gt; element defines table data / cell</p>
        <p>&lt;caption&gt; element defines caption of the table</p><br>
        </div>
        </div>

        <h4>HTML Form</h4>
        <div class = "htmlrow">
        <div class = "htmlcolumn htmlleft3">
        <form style = "border:whitesmoke solid; padding: 10px 10px 10px 10px;">
            <label for = "username">Username : </label><br>
            <input type = "text" name = "username" style = "width:300px;"><br><br>
            <label for = "email">Email : </label><br>
            <input type = "text" name = "email" style = "width:300px;"><br><br>
            <label for = "comment">Comment : </label><br>
            <textarea style = "height:150px; width:300px;"></textarea><br>
            <button type = "button">Click Me!</button>
        </form>
        </div>
        <div class = "htmlcolumn htmlright3">
        <p>Forms is used to collect user input and user input can be sent to server for processing</p>
        <p>&lt;form&gt; element defines form that collect user inputs</p>
        <p>&lt;label&gt; element defines label for many form element</p>
        <p>&lt;input = "text"&gt; element defines single-line text input field</p>
        <p>&lt;input = "radio"&gt; element defines radio button</p>
        <p>&lt;input = "submit"&gt; element defines submit button</p>
        </div>
        </div>
    </div>
    </div><br></div>
    <script src="index.js"></script>
    <div class = "hhr"><hr></div>
    <!--HTML Section End-->

    <!--CSS Section#####-->
	<a name="CSS"></a>
    <div class = "CSS1" style="padding: 20px 0 0 20px;">
        <h1>CSS /Cascading Style Sheets</h1>
        <div class = "CSSrow">
        <div class="CSScolumn CSSleft">
        <div class = "CSScard" onclick = "showText2(event, 'CSStext1')">
            <img src="card4.png" alt="Card" width="320px"
                style = "border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class = "word1">
                <h3 style="padding-left: 10px;">What is CSS?</h3>
                <p style="padding: 0 0 15px 10px;">Learn More</p>
            </div>
        </div>
        </div>

        <div class="CSScolumn CSSmiddle">
        <div class = "CSScard" onclick = "showText2(event, 'CSStext2')">
            <img src="card5.jpg" alt="Card" width="320px"
                style = "border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class = "word1">
                <h3 style="padding-left: 10px;">Basic Syntax of CSS</h3>
                <p style="padding: 0 0 15px 10px;">Learn More</p>
            </div>
        </div>
        </div>

        <div class="CSScolumn CSSright">
        <div class = "CSScard" onclick = "showText2(event, 'CSStext3')">
            <img src="card6.jpg" alt="Card" width="320px"
                style = "border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class = "word1">
                <h3 style="padding-left: 10px;">Example of CSS</h3>
                <p style="padding: 0 0 15px 10px;">Learn More</p>
            </div>
        </div>
        </div>

        <div class = "CSScard" onclick = "showText2(event, 'CSStext4')" id = "defaultText2">
        </div></div>
        <br>

    <div>
    <div class = "CSSoverlay" id = "CSStext4">
        <h4>Advantages of CSS</h4>
        <p>CSS is easier to Maintain and Update</p>
        <p>CSS has greater Consistency in Design</p>
        <p>CSS has more Formatting Options</p>
        <p>CSS is Lightweight Code</p>
        <p>CSS has Faster Download Times</p>
        <p>CSS has Search Engine Optimization Benefits</p>
        <p>CSS is Easier to Present Different Styles to Different Viewers</p>
        <p>CSS has greater Accessibility</p>
    </div>

    <div class = "CSSoverlay" id = "CSStext1">
        <h4>What is CSS?</h4>
        <p>CSS stands for Cascading Style Sheets</p>
        <p>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</p>
        <p>CSS are used to define text styles, table sizes, and other aspects of Web pages</p>
        <p>CSS saves a lot of work. It can control the layout of multiple web pages all at once</p>
        <p>External stylesheets are stored in CSS files and can be refer by any web page</p>


    </div>

    <div class = "CSSoverlay" id = "CSStext2">
        <h4>Basic Syntax of CSS</h4>
        <div class = "CSSrow">
        <div class = "CSScolumn CSSleft1">
        <img src = "CSSstructure.png" alt = "CSS Structure" width = "500px" height = "400px" style = "mix-blend-mode: multiply;">
        </div>
        <div class = "CSScolumn CSSright1">
        <P>CSS is used to mark up the content within web pages, with structural
            and semantic information that tells browser how to display a page</P>
        <p>&lt;Selector&gt; points to the HTML element we want to style.</p>
        <p>&lt;Declaration Block&gt; contains one or more declarations separated by semicolons, declaration block is surrounded by curly braces.</p>
        <p>&lt;Declaration&gt; includes a CSS property name and a value, separated by a colon</p>
        <p>&lt;Property&gt;  styles an aspect of an HTML element. Some basic properties are Text, List, Border and Font properties</p>
        <p>&lt;Value&gt; is used for defining the set of valid values for a CSS property, such as color value can be RGB, hex or keyword</p>
        </div>
        </div>
    </div>

  <!--<div class="CSSexample" id = "CSStext3">
  <div class="section1">
    <p>In our urban and suburban houses what should we do without cats? In our sitting or bedrooms, our libraries, in our kitchens and storerooms, our farms, barns, and rickyards, in our docks, our granaries, our ships, and our wharves, in our corn markets,
      meat markets, and other places too numerous to mention, how useful they are! In our ships, however, the rats oft set them at defiance; still they are of great service.</p>
  </div>
  <div class="section2">
    <p>How wonderfully patient is the cat when watching for rats or mice, awaiting their egress from their place of refuge or that which is their home! How well Shakespeare in Pericles, Act iii., describes this keen attention of the cat to its natural pursuit!</p>


  </div>
  <div class="box ad1">Advert!</div>
  <div class="section3">

    <p>A slight rustle, and the fugitive comes forth; a quick, sharp, resolute motion, and the cat has proved its usefulness. Let any one have a plague of rats and mice, as I once had, and let them be delivered therefrom by cats, as I was, and they will
      have a lasting and kind regard for them.</p>
  </div>
  <div class="box ad2">Another lovely advert!</div>
</div>-->

    <div class = "CSSoverlay" id = "CSStext3">
        <h4>CSS Grid layout</h4>
        <div class = "CSSrow">
        <div class = "CSScolumn CSSleft2">
        <div class="section1">
          <p>In our urban and suburban houses what should we do without cats? In our sitting or bedrooms, our libraries, in our kitchens and storerooms, our farms, barns, and rickyards, in our docks, our granaries, our ships, and our wharves, in our corn markets,
            meat markets, and other places too numerous to mention, how useful they are! </p>
        </div>
        <div class="boxA ad1">Advert!</div>
        <div class="section2">
          <p>How wonderfully patient is the cat when watching for rats or mice, awaiting their egress from their place of refuge or that which is their home! How well Shakespeare in Pericles, Act iii., describes this keen attention of the cat to its natural pursuit!</p>
        </div>

        </div>
        <div class = "CSScolumn CSSright2">
        <p>Grid </p>
        <p>&lt;grid-row&gt; syntax: grid-row-start / grid-row-end</p>
        <p>&lt;grid-row-start&gt; 	Specifies on which row to start displaying the item.</p>
        <p>&lt;grid-row-end	&gt;  Specifies on which row-line to stop displaying the item, or how many rows to span.</p>
        <p>&lt;Display&gt;  specifies the type of rendering box of an element, at here is grid.</p>
        <p>&lt;Grid-template-rows&gt;  specifies the number (and the heights) of the rows in a grid layout.</p>
        <p>&lt;Grid-template-columns&gt;  specifies the number (and the widths) of the columns in a grid layout.</p>
        <br>
        </div>
        </div>

      <!--  <h4>CSS Form</h4>
        <div class = "CSSrow">
        <div class = "CSScolumn CSSleft3">
        <form style = "border:whitesmoke solid; padding: 10px 10px 10px 10px;">
            <label for = "username">Username : </label><br>
            <input type = "text" name = "username" style = "width:300px;"><br><br>
            <label for = "email">Email : </label><br>
            <input type = "text" name = "email" style = "width:300px;"><br><br>
            <label for = "comment">Comment : </label><br>
            <textarea style = "height:150px; width:300px;"></textarea><br>
            <button type = "button">Click Me!</button>
        </form>
        </div>
        <div class = "CSScolumn CSSright3">
        <p>Forms is used to collect user input and user input can be sent to server for processing</p>
        <p>&lt;form&gt; element defines form that collect user inputs</p>
        <p>&lt;label&gt; element defines label for many form element</p>
        <p>&lt;input = "text"&gt; element defines single-line text input field</p>
        <p>&lt;input = "radio"&gt; element defines radio button</p>
        <p>&lt;input = "submit"&gt; element defines submit button</p>
        </div>
      </div> -->
    </div>
    </div><br></div>
    <script src="index.js"></script>
    <div class = "hhr2"><hr></div>
    <!--CSS Section End-->




    <!--Next Section-->
	<a name="JS"></a>
	<!--js-->
</body>
</html>
