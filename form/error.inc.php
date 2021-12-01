<style type="text/=css" >
     {
    padding: 0;
    margin: 0;
    border: 0;
    font-family: sans-serif;
}

header {
    background: #1A1A1A;
    position: fixed;
    width: 100%;
    z-index: 99;
}

header h1 {
    width: 30%;
    display: inline-block;
    text-align: left;
    padding: 15px 0px 15px 30px;
}

header a {
    color: white;
    text-decoration: none;
}

header nav {
    width: 65%;
    display: inline-block;
    text-align: right;
    vertical-align: top;
    position: relative;
    top: 20px;
}

header nav li {
    display: inline-block;
}

header nav a {
    color: white;
    font-weight: bold;
    font-family: sans-serif;
    text-decoration: none;
    font-size: 20px;
    margin: 0 20px;
    transition: .3s;
}

nav a:hover {
    padding: 0px 0px 3px 0px;
    border-bottom: inset;
    border-width: 1px;
    border-radius: 5px;
    transition: .3s;
}
</style>

<header>
    <h1><a href="index.html">EC</a></h1>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>

</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

</div>
