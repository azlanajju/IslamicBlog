
<?php
session_start();
$response="";
include("./config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    $query = "SELECT * FROM Thasbeeh WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        $response = 'Session created successfully!';
        header("Location: ./thasbeeh.php");
    } else {
        $response = 'Invalid Id. Please try again.';
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thasbeeh Counter</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <section class="main">
        <div class="form_wrapper">
            <input type="radio" class="radio" name="radio" id="login" checked />
            <input type="radio" class="radio" name="radio" id="signup" />
            <div class="tile">
                <h3 class="login">Login </h3>
                
                <h3 class="signup">Register</h3>
            </div>
    
            <label class="tab login_tab" for="login">
                Login
            </label>
    
            <label class="tab signup_tab" for="signup">
                Signup
            </label>
            <span class="shape"></span>
            <div class="form_wrap">
                <form class="form_fild login_form" method="post" action="">
                    <div class="input_group">
                        <input type="email" class="input" name="email" placeholder="Email Address" />
                    </div>
    
    
                    <input type="submit" class="btn"/>
<div class="error"><?php echo $response?></div>
                    <div class="not_mem">
                        <label  for="signup">New Here? <span> Register now</span></label>
                    </div>
    
                </form>
    
                <form class="form_fild signup_form" method="post" action="./add_user.php">
                    <div class="input_group">
                        <input type="text" class="input" name="name" placeholder="Name" />
                    </div>
                    <div class="input_group">
                        <input type="email" class="input"  name="email" placeholder="Email Address" />
                    </div>

    

    
                    <input type="submit" class="btn" value="Signup" />
                    <div style="opacity: 0;" class="input_group">
                        <input type="password" class="input" placeholder="Confirm Password" />
                    </div>
    
                </form>
            </div>
    
        </div>
    </section>
</body>
</html>