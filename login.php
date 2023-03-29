<?php
include "./index.php";
?>
<html>

<head></head>

<body>
    <div class="container mt-3">
        <form action="select.php" method="POST">
            <div class="form-group row">
                <label for="email" class=" col-form-label">Username :</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class=" col-form-label">Password :</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" name="password" id="password">
                </div>
            </div>
            <button class="btn btn-primary">login</button>


        </form>
        <a href="./register.php">register </a>
    </div>

</body>

</html>