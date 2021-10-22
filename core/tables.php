<?php
    include "app/config.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD generator</title>
    <link rel="stylesheet" href="app/assets/bootstrap.min.css">
	<link rel="stylesheet" href="app/assets/fontawesome/css/all.min.css">
</head>
<body>
<section class="pt-5">
    <div class="container">
        <div class="row">
        <div class="col-md-12 mx-auto">
                <div class="text-center">
                    <h4 class="mb-0">All available tables</h4>
                </div>

                <div class="row align-items-center mb-1">
                    <div class="col-md-3 offset-md-9">
                        <input type="checkbox" id="checkall">
                        <label for="checkall">Check/uncheck all</label>
                    </div>
                </div>


                <form class="form-horizontal" action="columns.php" method="post">
                    <fieldset>
                        <?php
                        //Get all tables
                        $tablelist = array();
                        $res = mysqli_query($link,"SHOW TABLES");
                        while($cRow = mysqli_fetch_array($res))
                        {
                            $tablelist[] = $cRow[0];
                        }

                        //Loop trough list of tables
                        $i = 0;
                        foreach($tablelist as $table) {

                            echo
                    '<div class="row align-items-center mb-1">
                        <div class="col-md-3 text-right">
                              <label class="control-label" for="table['.$i.'][tablename]">'. $table . ' </label>
                        </div>
                        <div class="col-md-6">
                                 <input type="hidden" name="table['.$i.'][tablename]" value="'.$table.'"/>
                                 <input id="textinput_'.$table. '" name="table['.$i.'][tabledisplay]" type="text" placeholder="Display table name in frontend" class="form-control">
                        </div>
                        <div class="col-md-3">
                          <input class="mr-1" type="checkbox"  name="table['.$i.'][tablecheckbox]" id="checkboxes-'.$i.'" value="1"><label for="checkboxes-'.$i.'">Generate CRUD</label>
                        </div>
                    </div>


<br>';

                            $i++;
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-12 offset-5">
                                <label class="control-label" for="singlebutton"></label>
                                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Select columns from tables</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<br>

<script src="app/assets/jquery-3.5.1.min.js"></script>
	<script src="app/assets/popper.min.js"></script>
	<script src="app/assets/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
    $('#checkall').click(function(e) {
        var chb = $('.form-horizontal').find('input[type="checkbox"]');
        chb.prop('checked', !chb.prop('checked'));
    });
});
</script>
</body>
</html>
