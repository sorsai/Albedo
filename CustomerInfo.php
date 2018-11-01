<!DOCTYPE html>
<html lang="en">
<head>
  <title>UpdateRepair</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Customer Information (For Repair System)</h2>
  <br>
  <form class="form-horizontal" action="create_customer.php">
  
    <div class="form-group">
      <label class="control-label col-sm-4">First Name:</label>
      <div class="col-sm-3">
        <input type="name" class="form-control" id="fname" placeholder="Enter First Name"  name="fname">
      </div>
      </div>
            
      <div class="form-group">
      <label class="control-label col-sm-4" for="dep">Middle Name:</label>
      <div class="col-sm-3">          
        <input type="name" class="form-control" id="mname"  placeholder="Enter Middle Name" name="mname">
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-4" for="dep">Last Name:</label>
      <div class="col-sm-3">          
        <input type="name" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
        
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-4" for="dep">Telphone Number:</label>
      <div class="col-sm-3">          
        <input type="tel" class="form-control" id="tel" placeholder="Enter Telephone Number" name="tel">
      </div>
       </div>
      
        
    <div class="form-group">        
      <div class="col-sm-offset-6 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    
  </form>
</div>


</body>
</html>