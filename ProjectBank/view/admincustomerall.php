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
        <a href="../view/aboutUs.php" class='aboutPbl'>About Peaock Bank</a>
        <h4 class='devider'></h4>
        <a href="contactUs.php" class='contactUs'>Contact Us</a>
        
    </div>
    <div class='navbar'>
        <div class='navCont'>
            <a href="admindash.php" id="nav-cont">Dashboard</a>
            <a href="adminemployeeall.php" id="nav-cont">Employee</a>
            <a href="admincustomerall.php" id="nav-cont">Customer</a>
            <a href="adminmerchantall.php" id="nav-cont">Merchant</a>
        </div>
    </div>
    <div class='eReg'>
        <h2 class='top-title'>Customer section</h2>  
        </div>
        
        <form name="all1" action= "" onsubmit="return validateForm1()" method="post">
        <div class='rightsearch'>
        <h4 class='e1'>Search Customer info:</h4><br>
        <input type="text" name="esearch" placeholder="Input ID"><p id="errse"></p>
            <br>
            <input class='reg-button button1' type="submit" name="submits" value="GO">
            </div>
            </form>
            <form name="all2" action= "" onsubmit="return validateForm2()" method="post">
        <div class='leftupdate'>    
        <h4 class='e1'>Update Customer info:</h4><br>
        <input type="text" name="eupdate" placeholder="Input ID"><p id="errup"></p>
            <br>
            <input class='reg-button button1' type="submit" name="submitu" value="GO">
            </div>
            </form>
            <form name="all3" action= "" onsubmit="return validateForm3()" method="post">
            <div class='leftdelete'>    
        <h4 class='e1'>Delete Customer info:</h4><br>
        <input type="text" name="edelete" placeholder="Input ID"><p id="errde"></p>
            <br>
            <input class='reg-button button1' type="submit" name="submitd" value="GO">
            </div>

            <a href="admincustomerwithdraw.php">Customer withdraw history</a><br>


        </form>
</body>
</html>