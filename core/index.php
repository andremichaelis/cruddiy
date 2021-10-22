<?php
if (file_exists("./app/config.php")) {
    include("./app/config.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Connect to database</title>
    <link rel="stylesheet" href="app/assets/bootstrap.min.css">
	<link rel="stylesheet" href="app/assets/fontawesome/css/all.min.css">
    <style type="text/css">
        table tr td:last-child a {
            margin-right: 15px;
        }
    </style>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <form class="form-group-row" action="relations.php" method="post">
                <fieldset>

                    <!-- Form Name -->
                    <div class="text-center pt-5">
                        <h4>Enter database information</h4>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-form-label" for="textinput">Server</label>
                        <input id="server" name="server" type="text" placeholder="" class="form-control " value="<?php if (isset($db_server)) echo $db_server; ?>">
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-form-label" for="textinput">Database</label>
                        <input id="database" name="database" type="text" placeholder="" class="form-control input-md" value="<?php if (isset($db_name)) echo $db_name; ?>">
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-form-label" for="textinput">Username</label>
                        <input id="username" name="username" type="text" placeholder="" class="form-control input-md" value="<?php if (isset($db_user)) echo $db_user; ?>">
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-form-label" for="passwordinput">Password</label>
                        <input id="password" name="password" type="password" placeholder="" class="form-control input-md" value="<?php if (isset($db_password)) echo $db_password; ?>">
                    </div>

                    <!-- Number records per page-->
                    <div class="form-group">
                        <label class="col-form-label" for="recordsperpage">Items per generated page</label>
                        <input id="numrecordsperpage" name="numrecordsperpage" type="number" min="1" max="1000" placeholder="Number of items per page" class="form-control input-md" value="10" value="<?php if (isset($no_of_records_per_page)) echo $no_of_records_per_page ?>">
                    </div>


                    <div class="form-group">
                        <label class="col-form-label" for="index"></label>
                        <button id="index" name="index" class="btn btn-primary">Submit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script src="app/assets/jquery-3.5.1.min.js"></script>
<script src="app/assets/popper.min.js"></script>
<script src="app/assets/bootstrap.min.js"></script>
</body>

</html>