<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to PBL</title>
</head>
<body>
    <div class="topSection">
        <img src="../resources/pbl.png" alt="pbl Logo" class='logo'>
        <h1 class='topTitle'>Peacock Bank Limited</h1>
        <h2 class='slogan'>- the bank of people</h2>
        <a href="aboutUs.php" class='aboutPbl'>About Peacock Bank</a>
        <h4 class='devider'></h4>
        <a href="contactUs.php" class='contactUs'>Contact Us</a>
        <a href="../control/logout.php" id="login">LogOut</a>
    </div>
    <div class='navbar'>
        <div class='navCont'>
            <a href="customerDashboard.php" id="nav-cont">Dashboard</a>
            
            <a href="cusPayment.php" id="nav-cont">Payment</a>
            <a href="cusDeposite.php" id="nav-cont">Deposite</a>
            <a href="cusWithdraw.php" id="nav-cont">Withdraw</a>
            <a href="cusLoan.php" id="nav-cont">Loan</a>
            <a href="customerAccountSettings.php" id="nav-cont">Account Settings</a>
        </div>
    </div>

    <form action="" method="post">
    <div class="login-box">
        <br>
        <img src="../resources/pbl.png" alt="pbl Logo" class='login-logo'>
        <h2 class="login-title">Loan</h2><br>
        <br>
    
        <label class="label-username" for="username">Loan Amount : </label>
        <input class="username" name="amount" type="text" id = "amount" > 
        <br>     
        <br>

        <label class="label-username" for="label-username">Your Password : </label>
        <input class="username" name="password" type="password" id = "password"> 
        <br>
        <br>
        <br>
        
        <input class='reg-button button1' type="submit" name="submits" value="Loan">
        
    </div>
    </form>
    
    <footer class='footer'>
        ©2022 Peacock Bank Limited 
    </footer>      
    
</body>
</html>