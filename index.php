<?php
include_once 'connection.php';
$query="SELECT *FROM forms";
$result=mysqli_query($Conn,$query);
?>

<html>
<head>
    <title>Forms Database</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container">
      <div class="row">
        <div class="col-xs-12">

            <h1 class="text-center">Forms Database</h1>
            <br>

            <label><h3>Search</h3></label><input type="text" name="search" id="search" placeholder="Search by Name" class="form-control">


            <table class="table table-white table-bordered" id="myTable">
              <thread class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Email</th>
                </tr>
              </thread>
              <tbody>
                <?php
                foreach ($result as $row) {

                ?>
                <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['gender'];?></td>
                  <td><?php echo $row['email'];?></td>
                </tr>
                <?php
              }
                ?>
              </tbody>
            </table>

        </div>
      </div>
    </div>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#search').keyup(function(){
      search_table($(this).val());

    });
    function search_table(value){
      $('#myTable tr').each(function(){
        var found ='false';
        $(this).each(function(){
          if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
          {
            found='true';
          }
      });
      if(found=='true'){
        $(this).show();
      }
      else{
        $(this).hide();
      }
    });
    }
  });
</script>

</body>
</html>