<?php
include "./index.php";
?>
<html>

<head></head>

<body>
    <div class="container mt-3">
        <form action="./insert.php" method="POST">
            <div class="form-group row">
                <label for="username" class=" col-form-label">Username :</label>
                <div class="col-md-6">
                    <input type="username" class="form-control" name="username" id="username">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class=" col-form-label">email :</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class=" col-form-label">Password :</label>
                <div class="col-md-6">
                    <input type="password" class="form-control" name="password" id="password">
                </div>
            </div>

            <button class="btn btn-primary">submit</button>


        </form>

    </div>

</body>

</html>