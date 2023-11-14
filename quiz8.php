<!DOCTYPE html>
<html>
<head>
    <title>Get Element Test</title>
    <meta charset="UTF-8" >
</head>
<body>
<h1>Get Element Test</h1>

<button onclick="onClick()">Push me</button>
<br />
Original: <span id="original">Hello World!!</span>
<br />
Copied: <span id="copied" ></span>

<script type="text/javascript" >
function onClick(){
    let originalElement = document.getElementById("original");
    let copiedElement = document.getElementById("copied");
    copiedElement.textContent =  originalElement.textContent;

}
</script>
</body>
</html>