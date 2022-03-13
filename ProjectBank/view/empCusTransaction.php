
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to PBL</title>
</head>
<body style="">
    <div class="topSection">
        <img src="../resources/pbl.png" alt="pbl Logo" class='logo'>
        <h1 class='topTitle'>Peacock Bank Limited</h1>
        <h2 class='slogan'>- the bank of people</h2>
        <a href="aboutUs.php" class='aboutPbl'>About Peacock Bank</a>
        <h4 class='devider'>|</h4>
        <a href="contactUs.php" class='contactUs'>Contact Us</a>
        <a href="../control/logout.php" id="login">LogOut</a>
    </div>
    <div class='navbar'>
        <div class='navCont'>
            <a href="employeeDashboard.php" id="nav-cont">Dashboard</a>
            <a href="empCusTransaction.php" id="nav-cont">Customer Transations</a>
            <a href="empMerTransaction.php" id="nav-cont">Merchant Transations</a>
            <a href="employeeLoan.php" id="nav-cont">Loan</a>
            <a href="employeeAccountSettings.php" id="nav-cont">Account Settings</a>
        </div>
    </div>
<div style="padding-top: 200px">
<h2>Customer Transaction</h2>
<input type="text" id="uname" >
<button onclick="showmyuser()">Search</button>

<p id="mytext" align="center"></p>
</div>

<footer class='footer'>
        ©2022 Peacock Bank Limited 
    </footer>  
    
</body>
</html>