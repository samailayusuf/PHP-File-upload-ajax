<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container{
      text-align: center;
    }
    img{
      width:300px;
      margin:30px;
    }
    .response-data{
      width: 500px;
      text-align: center;
      margin: 0 auto;
    }
    p{
      background-color: aliceblue;
      text-align: center;
    }
  </style>
</head>

<div class="container">
<img src="img/upload.svg" width="300px" data-toggle="modal" data-target="#myModal"/> <!--Opens up the modal -->

<div class="response-data"></div>

<p>Icons made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></p>
</div>



<!-- myModal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload File</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
        <form method='post' action='' enctype="multipart/form-data">
          Select file : <input type='file' name='file' id='file' class='form-control' ><br>
          <input type='button' class='btn btn-primary btn-lg' value='Upload' id='btn_upload'>
        </form>

      </div>
 
    </div>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</html>
