<!DOCTYPE html>
<html ang="en"> 

<?php 
   $title = 'Add Student';
   include 'head.php';
?>

<body class="for-bg vh-100">
    <div class="container-fluid text-black mb-3 py-4 ">
<h2 class="text-center fw-bold">ADD a New Student</h2>
</div>
<div class="d-flex flex-column justify-content-center align-items-center ">
<form class="container w-50 bg-white px-4 rounded py-4">
  <div class="form-group">
    <label for="formGroupExampleInput ">Name</label>
    <input type="text" class="form-control mb-3  " id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" class="form-control mb-3 " id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Phone</label>
    <input type="text" class="form-control mb-3 " id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Enroll Number</label>
    <input type="text" class="form-control mb-3" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Date Of Addmision</label>
    <input type="text" class="form-control mb-3" id="formGroupExampleInput2">
  </div>
  <div class="col-auto text-center ">
      <button type="submit" class="btn btn-info text-white  px-5 py-2 ">Submit</button>
    </div>
</form>
</div>
</body>
</html>