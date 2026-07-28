<!DOCTYPE html>
<html>
<head>
<style>
p{
position:absolute;
width:300px;
padding:15px;
border:1px solid black;
background:lightyellow;
}

#p1{top:20px;z-index:1;}
#p2{top:50px;z-index:2;}
#p3{top:80px;z-index:3;}
#p4{top:110px;z-index:4;}

p:hover{
z-index:10;
background:lightblue;
}
</style>
</head>

<body>

<p id="p1">Paragraph One - Web Technology</p>

<p id="p2">Paragraph Two - JavaScript Events</p>

<p id="p3">Paragraph Three - CSS Positioning</p>

<p id="p4">Paragraph Four - HTML and DOM</p>

</body>
</html>
