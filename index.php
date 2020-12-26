<!DOCTYPE html>
<html>
<style>
* {
	box-sizing: border-box;
	background-color: blue;
}
h1{
	text-align: center;
	background-color: orange;
	color: white;
	font-family: calibri;
	padding: 20px;
	border: 5px solid black;
}
a{
	text-decoration:none;
	color: white;
	transition: 0.6s ease;
}
p{
	text-align: center;
	background-color: orange;
	color: white;
	font-family: calibri;
	padding: 10px;
	border: 2px solid black;
}
.outer-grid{
	display: flex;
	flex-wrap: wrap;
	padding: 0 4px;
}
.inner-grid{
	flex: 25%;
	max-width: 25%;
	padding: 0 4px;
}
.inner-grid img{
	margin-top: 8px;
	width: 100%;
	padding: 10px;
}
@media screen and (max-width: 800px){
	.inner-grid{
		flex: 50%;
		max-width: 50%;
	}
}
@media screen and (max-width: 600px){
	.inner-grid{
		flex: 100%;
		max-width: 100%;
	}
}

h2{
	text-align:center;
}
</style>
<body>
<a href = "index.php">
<h1>MY PERSONAL PHOTO ALBUM</h1>
<div class ="outer-grid">

<div class ="inner-grid">

<a href ="elem.html">
<p>ELEMENTARY DAYS</p>

</div>

<div class="inner-grid">
<a href ="highschool.html">

<p>HIGH SCHOOL DAYS</p>

</div>

<div class="inner-grid">
<a href ="seniorhigh.html">

<p>SENIOR HIGH SCHOOL DAYS</p>

</div>

<div class="inner-grid">
<a href ="college.html">

<p>COLLEGE DAYS</p>

</div>
</div>

<div>
<a href ="index.php">
	<h2>Home</h2>
</div>

</body>
</html>