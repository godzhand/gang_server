<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "scoreboard.json");
  xhr.addEventListener('load', processJSON);
  xhr.send();

  function processJSON(event) {
    var json = this.responseText;
    var obj = JSON.parse(json);
	console.log(obj.Scoreboard);
    // and do something with obj here
  }
</script>