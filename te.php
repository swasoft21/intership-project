<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="content">
    <h1>Hello world</h1>
    <i>Hi everybody</i>
</div>
<script>
    var a = document.body.appendChild(
        document.createElement("a")
    );
a.download = "export.html";
a.href = "data:text/html," + document.getElementById("content").innerHTML;
a.innerHTML = "[Export conent]";
</script>
</body>
</html>