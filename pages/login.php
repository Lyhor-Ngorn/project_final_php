
    <div class="container mt-5">
            <form action="login_to.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Your name ..." require>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Your Password ..." require>
                </div>
                <input type="checkbox" onclick="myFunction()">
                <label class="text-light">Show Password</label>    
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" name="btnLogin" value="Login Now">
                </div>
            </form>
        </div>
<script>
    function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    }
</script>