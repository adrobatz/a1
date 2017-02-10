<?php
$quotes = array[
	0 => "You’re a wizard, Harry.― J.K. Rowling (Hagrid), Harry Potter and the Philosopher’s Stone", 
	1 => "We could all have been killed. Or worse, expelled. -J.K. Rowling (Hermione), Harry Potter and the Philosopher’s Stone", 
	2 => "It’s wingardium leviOsa, not leviosAH.– J.K. Rowling (Hermione), Harry Potter and the Philosopher’s Stone", 
	3 => "Just because you have the emotional range of a teaspoon doesn’t mean we all have.― J.K. Rowling (Hermione), Harry Potter and the Order of the Phoenix"
];
$random_quote = array_rand($quotes, 1);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Assignment 1</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Alyssa Drobatz</h1>
	<img src="images/alyssalaini.JPG" alt="Alyssa and Laini.">
	<h2>About Me</h2>
	<p>Hi! My name is Alyssa Drobatz. I am the human on the left in the photo above. The fluffy thing on the right is one of my dogs, her name is Laini. I'm living in Fairmount, Philadelphia at the moment (right next to the Philadelphia Museum of Art...most people know of it because it has the steps Rocky ran up ;) ). I work at Anthropologie (one of Urban Outfitter's sister brands) as their resident jack of all trades for the ECommerce team. I code their emails, help put product on the site, assist the London office with keeping their site up and running, and manage the content for both the EU and US sites. This is my third class at HES, and I am extremely excited to be diving into web applications. I've spent many hours with HTML and CSS and can't wait to expand my skills! I also really love Harry Potter...</p>

	<h2>Random Quote</h2>
	<p><?php echo $quotes[$random_quote[0]]; ?></p>

</body>
</html>




