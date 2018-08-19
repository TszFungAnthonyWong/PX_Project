<!DOCTYPE html>
<html>
    <head>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet ">
    </head>
    <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Clinical Information System</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>


    <div class="container">
    <div class="row">
    <div class="col">
    <div class="input-group">
  <div style="height :250px; " class="input-group-prepend">
    </div>
      <textarea placeholder = "Clinical report" class="form-control" aria-label="With textarea"></textarea>
    </div>
    <br/>
  <div class="float-right">

    <div class="btn-group mr-2" role="group" aria-label="First group">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
      </div>

    </div>
    </div>
    <div class="btn-group mr-2"role="group" aria-label="Second group">
    <button  type="button" class="float-right btn btn-primary">Submit</button>
    
    </div>
    </div>
    </div>
    <div class="col">
      <div class="row">
      

  <form action="fileUpload.php" method="post"
   enctype="multipart/form-data">
   <input type="file" name="file" id="file" size="35" value=""><br>
   <!-- <input type="submit" name="submit" id="submit" value="Submit"> -->
  </form>
      
      </div>
      <hr/>
      <div class="row">



   
      </div>
    </div>
  </div>
  </div>


       
    </body> 
</html>
