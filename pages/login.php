
<form action="">
    <div class="container mt-5">
            <form action="create_porgram_model.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Your name ..." require>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Your Password ..." require>
                </div>
                <input type="checkbox" onclick="myFunction()">    Show Password
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" name="btn" value="Login Now">
                </div>
            </form>
        </div>
</form>

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