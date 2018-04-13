<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Stephen Moses">
    <meta name="description" content="">
    <meta name="keywords" content="HNG Internship, Stage 1 contest">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>HNG Stage #1</title>
<!-- MY CSS LINKS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- I WANT THIS SCRIPT TO GET CURRENT TIME IN HOURS MINUTES AND  SECONDS AND DISPLAY IN DIV TAG-->
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>

<body onload="startTime()">
    <div class="menu" align=right>
        <a href="#" class="active" style="text-decoration:none; margin:5px; color:#fff; font:Rambla;">Home</a>
        <a href="#"  align=left  style="text-decoration:none; margin:5px; color:#fff; font:Rambla;">Get Started</a>
    </div>
</ul><br><br><br><br><br>
    <div class="container-fluid" align=center>
        <div class="row">
            <div class="col-sm-3 col-md-3 col-xs-12 col-lg-3">

            </div>
            <div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
                <h1 class="lg">HNG INTERNSHIP 4.0</h1>
                <div class="jumbotron see">
                    <p class="date">April 12, 2018</p>
                    <div class=" btn btn-danger btn-lg " id="txt"> </div>
                   
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12 col-lg-3">

            </div>
    </div>
        </div>
</body>
</html>