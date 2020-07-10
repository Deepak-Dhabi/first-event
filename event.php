<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <title>Webinar</title>

</head>

<header>
    <div class="jumbotron">
        <h3 class="text-center"> Title </h3>
    </div>
</header>

<body style="background: #f0f0f0">
    <div class="container">
        <p>
            <b>Description:</b>
        </p>
        <p>
            My Bonnie lies over the ocean.

            My Bonnie lies over the sea.

            My Bonnie lies over the ocean.

            Oh, bring back my Bonnie to me.
        </p>

        <p>
            <b>Date:</b> 10/10/1010
        </p>

        <p>
            <b>Time:</b> 11:00 am
        </p>
        <br/>

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

<footer class="container">

    <h4> Register for Webinar</h4>
    </br>

    <form action="eventAction.php" method="POST">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><b>Enter Your Full Name :</b></span>
            </div>
            <input type="text" class="form-control" name="user_name" placeholder="First_Middle_Last " required>
        </div><br/>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><b>Contact Number :</b></span>
            </div>
            <input type="number" 
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
            maxlength="10"
            class="form-control" 
            id="user_contact" 
            name="user_contact" 
            placeholder="10 Digit" required>
        </div><br/>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><b>Email Id:</b></span>
            </div>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Id" required>
        </div><br/>

        <div class="input-group mb-3">
                <div class="input-group-prepend"><input type="submit" id="register" class="btn btn-success" value="Register"/>
                </div>
        </div>
    </form>

</footer>
