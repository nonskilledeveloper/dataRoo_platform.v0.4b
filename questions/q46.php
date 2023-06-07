<div class="question">
    <a href="https://www.google.com/" target="_blank" id="guidelines-link"><button id ="guide-button">GUIDELINES</button></a>

<img id = "img-q" class = "img-question" src="img/q46.png" alt="q46">
<div id = "overlay"></div>

<br>
<form id = "overlay-form" class = "score-quest" action="verify-answer.php" method="POST">
<label><h2>Question:</h2></label><br>
<label style="color: grey;">How should the result in the image be rated for the query: McDonalds? User is in San Francisco, US.</label>
<br><br>

<label for="HS">
    <input type="radio" name="score" id="HS" value="HS"> [1] Highly Satisfying</input>
</label>

<br><br>
<label for="S">
    <input type="radio" name="score" id="S" value="S"> [2] Satisfying</input>
</label>

<br><br>
<label for="SS">
    <input type="radio" name="score" id="SS" value="SS"> [3] Somewhat Satisfying</input>
</label>

<br><br>
<label for="NS">
    <input type="radio" name="score" id="NS" value="NS"> [4] Not Satisfying</input>
</label>

<br><br>
<?php
echo '<input type="hidden" name="query" value="q46">';
echo '<input type="hidden" name="rc" value="'.sha1('NS').'">';
?>

<input class = "send-score" type="submit" name="score" id="send" value="Submit">

</form>
</div>

<br>
<a class = "search-link" title="Search-Google" href="https://www.google.com/search?q=McDonalds" target="_blank" style = "color: orange;">SEARCH ON GOOGLE</a><br><br>
<a class = "search-link" title="Search-Bing" href="https://www.bing.com/search?q=McDonalds" target="_blank">SEARCH ON BING</a><br>