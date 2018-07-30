<?php 
include 'admin-header.php';
// $page_id="";
// $page_top_id="borrowers";

include 'db-operations.php';
$message="";
$display_message="none";
$message_type="alert-danger";
$username=$_POST["username"];

// $type="borrower";

if($_GET['id']!='')
{
    $id=$_GET["id"];
    $user=getSalesmansDetails($id);

    $name=$user['name'];
    $address=$user['address'];
    $phone=$user['mobile'];
    $dob=$user['dob'];
    $gender=$user['gender'];
    $username=$user["username"];
    $password=$user['pwd'];
}

else
{
    header('Location: all-salesman.php');
    exit();
}

?>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-user-plus"></i> View Salesman</h1>
            <p>Manage Salesmans & Items!</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">View Salesman</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Salesman Details</h3>
              <div class="card-body">
               
                   <form id="viewBorrowerForm"  role="form">
  
                     
                        
                        <div class="form-group">
                          <label class=" control-label" for="name">Name:</label>
                          
                            <input type="text" class="form-control" id="name" name="name"   readonly="readonly" value="<?php echo $name; ?>">
                          
                        </div>
                        <div class="form-group">
                          <label class=" control-label" for="phone">Phone:</label>
                          
                            <input type="text" class="form-control" id="phone" name="phone"  readonly="readonly" value="<?php echo $phone; ?>">
                          
                        </div>
                       <div class="form-group">
                          <label class=" control-label" for="dob">DOB:</label>
                          
                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter DOB" value="<?php echo $dob; ?>">
                          
                        </div>

                        <div class="form-group">
                          <label class=" control-label" for="gender">Gender:</label>
                          <select class="form-control" id="gender" name="gender" placeholder="select Gender" value="<?php echo $gender; ?>">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label">Address</label>
                          <textarea class="form-control" rows="4" id="address" name="address"  readonly="readonly"><?php echo $address; ?></textarea>
                        </div>
                        <div class="form-group">
                          <label class=" control-label" for="username">Username:</label>
                          
                            <input type="text" class="form-control" id="username" required="required" name="username" readonly="readonly" value="<?php echo $username; ?>" >
                          
                        </div>
                       
                        
                        
                        
                  </form>
               </div>
               <div class="card-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-0">
                    <a class='btn btn-primary btn-bg' href="edit-borrower.php?id=<?php echo $user_id; ?>"><i class='fa fa-edit'></i>Edit</a>
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