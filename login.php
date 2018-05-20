
<!DOCTYPE html>
<html>
<head>
    
    <title>Quiz</title>

    
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
    
<button type="button" class="text-center text-primary" onclick="loadDoc()">Click me first!</button>

<p id="demo"></p>


<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "demo_text.txt", true);
  xhttp.send();
}
</script>

    
    <div class="container">
        
        <h1 class="text-center text-success">HTML Quiz</h1><br>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="card"> 
                <h2 class="text-center card-header">Login Form</h2>
                </h4>
                
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Create User</button>
                    
                </form> </div>
                </div>
                
                <div class="col-lg-6">
                <h2>Sign In</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control">
                    </div>
                    
                    <button type="submit"class="btn btn-primary">Login</button>
                    
                </form>
                    
                </div>
        </div>
    </div>
    
    
    </div>
    
    
</body>
</html>