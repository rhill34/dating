<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QuickTrip App</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- The Heading -->
<nav class="navbar navbar-light bg-light">
    <a href="{{@nav}}" span class="navbar-brand mb-0 h1">QuickTripIn Website</span></a>
</nav>
<br>
<!-- Cards Side by Side-->
<div class="container">
    <div class="col-sm-12">
        <div class="card" style="width: 100% ;height: 50%; padding: 1%">
            <div class="row">
                <div class="col-sm-6" style="width: 100%; height: 100%;">
                    <h1 class="text-center">QuickTripIn Website</h1>
                    <p style="padding: 1%;" class="lead">Welcome to the Best On-Demand Tour-Dating App. The <span class="font-weight-bold">QuickTripIn Website (QTI)</span> is connecting travelers with guides that provide authentic experiences</p>
                    <h3 class="text-center"><small>What users are saying about QTI.</small></h3>
                    <hr>
                    <div class="text-center" style="margin: 1px;">
                        <p class="font-italic"><small>"When I went to Texas...I found out what Come and Take it means!"</small> - PaperMag</p>
                        <p class="font-italic"><small>"I was able to share my community and not just on social media."
                            </small>- Reddit
                        </p>
                        <p class="font-italic"><small>"Up Till Now, I'd been traveling and touring all wrong."</small> - Pinterest</p>
                    </div>
                    <hr>
                    <div class="col-sm-6 mx-auto">
                        <div style="text-align: center;">
                            <a href="{{@personal}}" role="button" type="button" class="btn btn-primary text-nowrap">Create a Profile!</a>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6" style="width: 100% ; height: 100%;">
                    <div style="height: 100%; width: 100%;">
                        <div class="mh-100" style="width: 100%; height: 100%;">
                            <div>
                                <img alt="" class="img-fluid rounded" src="images/austin-distel-599272-unsplash.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>