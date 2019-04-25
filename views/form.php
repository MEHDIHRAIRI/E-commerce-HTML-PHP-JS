 <!DOCTYPE html>
 <html>
 <title> mail confirmation page </title>
 <head>
    <meta charset='UTF-8'>
  <script src="js/modernizr.custom.80028.js"></script>
 <link rel='stylesheet' href='css/style1.css'>

</head>
 <body>
  <div id="note">
        commande valider entrer votre mail svp. <a id="close">[close]</a>
    </div>
        <form action="mail.php" method="post" class="form-horizontal" data-parsley-validate style="position: relative; text-align: center;top: 150px;left: -210px">
        <div style="position: relative;background-color: #e83e8c; width: 600px; height: 250px; top: -50px; left: 550px;border-radius: 20px">
          <div class="form-group">
            <div class="col-lg-8">
              
              <input type="text" name="email" id="email" placeholder="entrer votre mail" class="form-control" data-parsley-length="[5, 150]" style="position: relative;top: 60px; width: 250px; height: 50px; border-radius: 20px; text-align: center; left: 170px" required>
            </div>
          </div><!-- /.form-group -->
          <div class="form-group">
            <div>
              <br>
              <br>
              <button class="btn btn-lg btn-success" type="submit" style="position: relative;top: 30px;width: 150px; height: 55px; background-color: black; border-radius: 20px; left: 20px"><i class="fa fa-envelope"></i> Send</button>
            </div>
          </div><!-- /.form-group -->
        </div>

        </form>
      </div>
</body>
      <script>
   close = document.getElementById("close");
   close.addEventListener('click', function() {
     note = document.getElementById("note");
     note.style.display = 'none';
   }, false);
  </script>


</html>