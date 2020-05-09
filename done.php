<!DOCTYPE html>
<html>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<link rel="shortcut icon" href="logo.png" />
<title>eYSIP - 2020 Online Dairy | DSK Solutions Pvt. Ltd. </title>


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

    table,td,th
    {
        border: grey solid 2px !important;
    }

    td
    {
        padding:4px !important;
    }
</style>



<div class=" container-fuild table-bordered container">



    <div class="row" style="margin-bottom:0.5%">
        <div class="md col-md-9 sm-col-12">
            <h1>
                <font class="m-0" color=red>e</font>YSIP - 2020 Daily Diary
            </h1>
            <h2 style="margin-top:1px">
                <font class="m-0">Sainath Sapa, Ashoka Institute of Engineering & Technology</font>
            </h2>
        </div>
        <div class="md col-md-1 sm-col-12 text-center">
            <a href="index.php" ><img src="logo.png" height="80px"> </a>
        </div>

    </div>

   


    <hr class="m-0" width="100%" style="border-top: 1px dashed black;">

    <table class="m-2 table table-striped container-fuild table-bordered  table-hover text-center">

        <thead >
            <tr>
            <th colspan="3"  class="bg-dark text-white"><h3><b>What You Done</b> </h1></th>
</tr>
            <th>Day</th>
            <th>Date</th>
            <th>What I've Done</th>
        </thead>
        <tbody>

        <?php
        require('db.php');
        $sql_qry="SELECT * FROM daily";
        $run_qry=mysqli_query($con,$sql_qry);
        while($fetch_rows=mysqli_fetch_assoc($run_qry))
        {


        ?>
            <tr>
                <td><?php echo $fetch_rows['day'] ?></td>
                <td><?php echo $fetch_rows['date'] ?></td>
                <td><?php echo $fetch_rows['done'] ?></td>
            </tr>
        <?php } ?>
        </tbody>


    </table>

    <center><a href="index.php"> <button class="btn btn-primary py-1 m-1" type="submit" name="submit" value="Submit"> Back to Home </button>
        </a>
        </center>
    <p class="text-right m-0 py-0">

        Designed By DSK Solutions Pvt. Ltd. 2012 -
        <?php echo date('Y');?>

    </p>
</div>


</html>