<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <script src="<?php echo base_url(); ?>jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card mt-5 mx-auto" style="width: 30rem;">
      <div class="card-body">
        <h5 class="card-title text-center">LOGIN</h5>
        <hr>
        <form id="logForm">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" style="width: 100%" class="btn btn-primary"><span id="logText"></span></button>
        </form>
      </div>
    </div>
    <div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;">
      <button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
      <span id="message"></span>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#logText').html('Login');
      $('#logForm').submit(function(e){
        e.preventDefault();
        $('#logText').html('Checking...');
        var url = '<?php echo base_url(); ?>';
        var user = $('#logForm').serialize();
        var login = function(){
          $.ajax({
            type: 'POST',
            url: url + 'user/login',
            dataType: 'json',
            data: user,
            success:function(response){
              $('#message').html(response.message);
              $('#logText').html('Login');
              if(response.error){
                $('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
              }
              else{
                $('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
                $('#logForm')[0].reset();
                setTimeout(function(){
                  location.reload();
                }, 3000);
              }
            }
          });
        };
        setTimeout(login, 3000);
      });

      $(document).on('click', '#clearMsg', function(){
        $('#responseDiv').hide();
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>