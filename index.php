<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TTK</title>
    <!--_________________________________________________________________________________________________________________-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <!--_________________________________________________________________________________________________________________-->
</head>
<body>
<div class="container">
    <div class="col">
        <div class="row">
            <div class="col-md-5">
                <p for="exampleInputEmail1">Login:</p>
                <input type="text" class="form-control" id="exampleInputEmail1" name="login">
            </div>
            <div class="col-md-5">
                <p for="exampleInputPassword1">Password:</p>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
            </div>
            <div class="col-md-2 ">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="backend/auth.php" class="btn btn-primary">LogIn</a>
                    <a href="backend/reg.php" class="btn btn-primary">Registration</a>
                </div>
            </div>


        </div>
        <div class="col border border-secondar rounded field">
            <table class="table">
                <tbody>
                <tr>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-9"><h3>NickName</h3></div>
                            <div class="col-md-2">Data</div>
                        </div>
                    </div>
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa incidunt obcaecati quibusdam voluptatem. Iusto maiores saepe suscipit. Commodi fuga iure maiores maxime minima modi numquam placeat sequi sit unde.</p>
                        <hr>
                    </div>

                </tr>
                <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Оставить коментарий</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div role="group" aria-label="Basic example">
                            <a href="#" class="btn btn-primary btn-send">Send</a>
                        </div>
                </div>

                </tbody>
            </table>
        </div>
    </div>









</div>
<!--_________________________________________________________________________________________________________________-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
<!--_________________________________________________________________________________________________________________-->
</body>
</html>