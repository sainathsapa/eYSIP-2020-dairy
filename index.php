<!DOCTYPE html>
<html>
<link rel='stylesheet' href='main.css'>

<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>



<head>

<title>eYSIP - 2020 Online Dairy | DSK Solutions Pvt. Ltd. </title>
<link rel="shortcut icon" href="logo.png" />

</head>


<style>
    h2 {
        padding: 0;
        margin: 0;
        font-size: larger;
    }

    h1 {
        padding: 0;
        margin: 0;
        font-size: 50px;
        font-weight: 700;
    }

    .bold {
        font-style: bold !important;
        font-weight: 900 !important;
    }

    * {

        box-sizing: border-box;
        margin: 20px;
    }
</style>



<form class="table container-fuild table-bordered  table-hover container py-2" action="process.php" method="post">



    <div class="row" style="margin-bottom:0.5%">
        <div class="md col-md-7 sm-col-12">
            <h1>

                <font class="m-0" color=red>e</font>YSIP - 2020 Daily Diary
            </h1>
            <h2 style="margin-top:1px">
                <font class="m-0">Sainath Sapa, Ashoka Institute of Engineering & Technology</font>
            </h2>
        </div>
        <div class="md col-md-1 sm-col-12 text-center">
            <img src="logo.png" height="80px">
        </div>
        <div class="md col-md-2 sm-col-12 text-center">

            <a href="done.php" style="text-decoration:none; text-style:none; color:unset;"> <img class="ml-auto m-0"
                    src="tik.webp" height="80px" alt="Check Your Dairy"><br>
                <font>Check Your Dairy </font>
            </a>
        </div>

    </div>

    <?php

if(isset($_GET['msg']))
{

    if($_GET['msg']=='suc')
    {
    echo '
    <div class="m-2 bg-success table-success text-white">
       <b> <i> Dairy Updated Succesfully </i> </b>
    </div>';
    }

    if($_GET['msg']=='err')
    {
    echo '
    <div class="m-2 py-2 bg-danger table-danger text-white">
        <b> <i>Check Your Entries </i> </b>
    </div>';
    }
}


?>



    <hr class="m-0" width="100%" style="  border-top: 1px dashed black;">

    <tr>
        <td class="bold  m-2"><b>Day :</b></td>
        <td><input class="form-control  m-2" type="number" name="day" placeholder="1" required></td>

    </tr>
    <tr>
        <td class="bold  m-2"><b>Date :</b></td>
        <td><input class="form-control  m-2" type="date" name="date" placeholder="1" width="150px" size="150px"
                required></td>

    </tr>


    <tr>
        <td class="bold"><b>What You've Done :</b></td>

    </tr>
    <tr>
        <th colspan="2">
            <textarea class="form-control m-2" cols="30" name="done" required>Type Here..!</textarea>
        </th>
    </tr>
    <tr>
        <th colspan="2">
            <input class="btn btn-primary py-1 m-1" type="submit" name="submit" value="Submit">
        </th>
    </tr>



    <p class="text-right m-0 py-0">

        Designed By DSK Solutions Pvt. Ltd. 2012 -
        <?php echo date('Y');?>

    </p>
</form>


</html>