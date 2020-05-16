<?php require'base/header.php';?>
<head>
    <style>
        .container{text-align: center;}
        .carousel-inner{text-shadow: 2px 2px #FF0000;}
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="import" href="/path/to/imports/stuff.html">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<div class="container">
    <h1>Ticket System</h1>
    <h3>Restaurant</h3>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <a href="./restaurantInfo.php?SID=1">
                    <img src="img\shop\R\1.jpg" alt="ABC" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>ABC</h3>
                        <p>Food type: Beverages</p>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="./restaurantInfo.php?SID=2">
                    <img src="img\shop\R\2.jpg" alt="BBC" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>BBC</h3>
                        <p>Food type: American</p>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="./restaurantInfo.php?SID=2">
                    <img src="img\shop\R\3.jpg" alt="CBC" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>CBC</h3>
                        <p>Food type: Healthy food</p>
                 </div>
                </a>
            </div>  
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
</div>

<div class="info">
    <table>
        <tr>
            <td rowspan="2"><img src="img/icon/ticket.png" height="100" width="100"></td>
            <td style="font-size:30px">Quality ticketing</td>
        </tr><tr>
            <td>Convenient and fast ticketing system, suitable for different kinds of shops.</td>
        </tr>
        <tr>
            <td rowspan="2"><img src="img/icon/manage.png" height="100" width="100"></td>
            <td style="font-size:30px">Easy to manage</td>
        </tr><tr>
            <td>Use a GUI for ticketing, avoid displaying too much complex data, and make instant changes easy.</td>
        </tr>
    </table>
</div>

<?php require'base/footer.php';?>