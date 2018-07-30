<?php 
include 'admin-header.php';
// $page_id="";
// $page_top_id="borrowers";

include 'db-operations.php';
$message="";
$display_message="none";
$message_type="alert-danger";

// $type="borrower";

if($_GET['id']!='')
{
    $id=$_GET["id"];
    $user=getSalesmansDetails($id);

    $name=$user['name'];
    $email=$user['email'];
    $phone=$user['mobile'];
    $address=$user['address'];


}

if($_POST["name"]!="")
{
  $id=@$_POST["id"];
  $name=@$_POST["name"];
  $phone=@$_POST["phone"];
  $email=@$_POST["email"];
  $address=@$_POST["address"];


  $display_message="block";

  // include 'db-operations.php';



  
  $message=editSalesmanDetails($id,$name,$address,$email,$phone);
  if($message)
  {
    $message="<strong>SUCCESS!</strong> Address updated in the system!";
    $message_type="alert-success";
  }
  else
  {
    $message="<strong>FAILURE!</strong> " . $message . "!";
  }

}
?>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><!-- <i class="fa fa-user-plus"></i> --> Edit Address</h1>
            <p>Manage Address</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Edit Address</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Edit Address Details</h3>
              <div class="card-body">

                  <div id="invalidLogin" class="alert <?php echo $message_type ?> fade in" style="display:<?php echo $display_message ?>">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <?php echo $message ?>
                        </div>
                        
               
                   <form id="editBorrowerForm"  role="form" method="post" >
  
                     <input type="text" hidden="true" id="user_id" name="id" value="<?php echo $id; ?>"/>
  
                        
                        <div class="form-group">
                          <label class=" control-label" for="name">Name:</label>
                          
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?php echo $name; ?>">
                          
                        </div>
                        <div class="form-group">
                          <label class="control-label">Address</label>
                          <textarea class="form-control" rows="4" id="address" name="address" placeholder="Enter your address"><?=$address;?></textarea>
                        </div>
                        <div class="form-group">
                          <label class=" control-label" for="phone">Phone:</label>
                          
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="<?php echo $phone; ?>">
                          
                        </div>
                        <div class="form-group">
                          <label class=" control-label" for="phone">Email:</label>
                          
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
                          
                        </div>


                        
                        
                  </form>
               </div>
               <div class="card-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-0">
                    <button class="btn btn-primary icon-btn" onclick="document.getElementById('editBorrowerForm').submit();" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
<?php 
include 'admin-footer.php';
?>