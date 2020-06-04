<!DOCTYPE html>
<html>

<head>
    <title>Extended Outing</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,900;1,700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
    <link href="styles/custom-responsive-styles.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <!--scripts-->
    <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="scripts/all-plugins.js"></script>
    <script type="text/javascript" src="scripts/plugins-activate.js"></script>
    <link href="./style.css" rel="stylesheet">
</head>

<body>
    <a class="menu-toggle rounded" href="#">
        <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-nav-item">
                <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
            </li>
            <li class="sidebar-nav-item">
                <a href="./index.php">Register</a>
            </li>
            <li class="sidebar-nav-item">
                <a href="./exouting.php">Extended Outing</a>
            </li>
            <li class="sidebar-nav-item">
                <a href="./status.php">Check Your Status</a>
            </li>
        </ul>
    </nav>
    <div class="anonymous">
        <div class="row">
            <div class="col-lg-2"></div>

            <div class="col-lg">

                <form class="form">
                    <div class="col-12 col-md-12  head" style="font-family: sans-serif; color: #ffffff;">
                        <h1>Extended Outing</h1>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" style="font-family: sans-serif; color: #ffffff;">Outing
                            Recipt No.</label>
                        <div class="col-sm">
                            <input type="text" class="form-control rcptno" id="rcptno" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="Feedback" class="col-md-2 col-form-label" style="font-family: sans-serif; color: #ffffff;">Reason</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="feedback" name="feedback" rows="3"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" style="font-family: sans-serif; color: #ffffff;">Extension Needed</label>
                        <div class="col-sm">
                            <select id="hr" class="custom-select" name="hrs">
                                <option>1 Hr.</option>
                                <option>2 Hrs.</option>
                                <option>3 Hrs.</option>
                            </select>
                        </div>
                        <br>


                    </div>
                    <br>

                    <div class="form-group row ">
                        <div class="col-sm-6 offset-sm-6 ">
                            <button type="submit" class="btn btn-primary sub" style="font-family: sans-serif; color: #ffffff; ">Submit</button>
                        </div>
                    </div>
            </div>
            <br>


            </form>
            <div class="col-lg-2"></div>
        </div>


    </div>
    </div>
    </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>