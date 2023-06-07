<div class="question">

    <a href="https://rise.articulate.com/share/91E832cZEmCOI_4EEjUoFTj4dj6q3f6u#/" target="_blank" id="guidelines-link"><button id ="guide-button">GUIDELINES</button></a>

<img id="img-q" class="img-q2" src="img/q2.png" alt="q2">
<div id = "overlay"></div>

<br>
<form id = "overlay-form" class = "score-quest">
<label><h2>Question:</h2></label><br>
<label style="color: grey;">Wich would be correct for query "apollo project" (The query refers to the space program from the 1960s that first put a human on the moon.)</label>
<br><br>

<label for="HS">
    <input type="radio" name="score" id="HS" value="HS"> [1] Left: Much Better</input>
</label>

<br><br>
<label for="S">
    <input type="radio" name="score" id="S" value="S"> [2] Left: Sightly Better</input>
</label>

<br><br>
<label for="SS">
    <input type="radio" name="score" id="SS" value="SS"> [3] About the Same</input>
</label>

<br><br>
<label for="NS">
    <input type="radio" name="score" id="NS" value="NS"> [4] Right: Better</input>
</label>

<br><br>
<?php
echo '<input type="hidden" name="query" value="q2">';
echo '<input type="hidden" name="rc" value="'.sha1('S').'">';
?>

<input class = "send-score" type="submit" name="score" id="send" value="Submit" disabled>

</form>

</div>

<br>
<a class = "search-link" title="Search-Google" href="https://www.google.com/search?q=apollo%20project" target="_blank" style = "color: orange;">SEARCH ON GOOGLE</a><br><br>
<a class = "search-link" title="Search-Bing" href="https://www.bing.com/search?q=apollo%20project" target="_blank">SEARCH ON BING</a><br>

<script>
    // This code avoids the user to spend too much time in one question
    let timeOutId;
    function resetTimeout() {
        clearTimeout(timeOutId);
        timeOutId = setTimeout(() => {
            fetch('logout.php', {
                method: 'GET',
                credentials: 'include',
            });
            alert('Sorry, it took too much time, try again');
            location.reload();
        }, 60000); // 1 minuto
    }
    document.addEventListener("mousemove", resetTimeout);
    document.addEventListener("keypress", resetTimeout);
</script>
<script>
    // Here a code to avoid the user to click without analying the question
    setTimeout(function() {
        document.getElementById("send").disabled = false;
    }, 10000); // 10 seconds
</script>