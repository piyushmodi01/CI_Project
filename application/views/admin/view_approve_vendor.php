<?php
include('admin_header.php');?>

    <ul class="breadcrumb">
        <li><a href="adminDashboard">Home</a></li>
        <li class="active">Apporve Vendor</li>

    </ul>



    <h2 align="center">Vendors' List</h2>

<div class="container center-block">
    <form class="center-block " role="search">
        <div class="form-group">
            <input class="form-control" placeholder="Search" type="text">
    </form>
<br/>


<!--Displaying Table -->

    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Country</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>

            <?php
            $totalLength=sizeof($vendorData)-1;

            while($totalLength>=0)

            {
                $status=$vendorData[$totalLength]['status'];
                if($status=="approved")
                    $status="checked";
                else
                    $status="unchecked";
                    $id=$vendorData[$totalLength]['v_id'];
                echo "<tr>";
                    echo "<td>".$vendorData[$totalLength]['v_id']."</td>";
                    echo "<td>".$vendorData[$totalLength]['name']."</td>";
                    echo "<td>".$vendorData[$totalLength]['address']."</td>";
                    echo "<td>".$vendorData[$totalLength]['country']."</td>";
                    echo "<td><input type='checkbox' id='".$vendorData[$totalLength]['v_id']."' data-toggle=\"toggle\" ".$status."></td>";
                echo "</tr>";



                //AJAX CODE to UPDATE RECORDS HAND TO HAND
            ?>


                   <script type='text/javascript' language='javascript'>
                    var checkID='#'+<?php echo $id;?>;
                    $(checkID).click(function () {
                        $.ajax({
                            url: 'http://[::1]/ci_project/index.php/ViewVendor/changeVendorStatus/'+<?php echo $id;?>,
                            type: 'POST',
                            dataType: 'json',
                            error: function () {

                            },

                            success: function (data) {

                            } // End of success function of ajax form
                        }); // End of ajax call

                    });
                    </script>


            <?php
                $totalLength--;   //Loop Ends Here
            }?>



        </tbody>
    </table>

</div>

<?php
include('admin_footer.php');
?>