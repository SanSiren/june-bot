<?php
// heading
echo "<div id='header'>";
echo "<h1>Are you ready for your virtual c(h)at bot?</h1>";
echo "</div>";
// content
echo "<div id='content'>";
// introduction and form
echo "<div id='intro'>";
echo "Please enter your name and the name for your cat in the form below.<br>";
echo "Please only use letters and numbers, no special characters or whitespaces.<br><br>";
echo "<form action='' method='post'>";
echo "<input type='text' name='user_name' placeholder='Your Name' required><br>";
echo "<label for='user_name'>Your Name</label><br>";
echo "<input type='text' name='cat_name' placeholder='Cat Name' required><br>";
echo "<label for='cat_name'>Cat Name</label><br>";
echo "<input type='submit' value='Start Chatting'>";
echo "</form>";
echo "</div>";
// help examples
echo "<div id='help'>";
echo "<p>The cat understand a few commands, such as:</p>";
echo "<ul>";
echo "<li><i>[NAME]</i> come / <i>[NAME]</i> come here</li>";
echo "<li><i>[NAME]</i> get off the counter / table / chair / sofa</li>";
echo "<li><i>[NAME]</i> can I pet you</li>";
echo "</ul>";
echo "<p>Replace <i>[NAME]</i> with the name you chose for your cat.</p>";
echo "</div>";
echo "</div>";
// footer
echo "<div id='footer'>";
echo "<p>&copy; 2025 Britta Haupt</p>";
echo "</div>";
?>