<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <title>Week 3 - ATM</title>

</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
    <style type="text/css">
        body {
            margin-left: 120px;
            margin-top: 50px;
        }
       .wrapper {
            display: grid;
            grid-template-columns: 300px 300px;
        }
        .account {
            border: 1px solid black;
            padding: 10px;
        }
        .label {
            text-align: right;
            padding-right: 10px;
            margin-bottom: 5px;
        }
        label {
           font-weight: bold;
        }
        input[type=text] {width: 80px;}
        .error {color: red;}
        .accountInner {
            margin-left:10px;margin-top:10px;
        }
    </style>
</head>
<body>

    <form method="post">
    <h1>ATM</h1>
        <div class="wrapper">
            
            <div class="account">
                <h2>Checking Account</h2><li>Account ID: C123</li><li>Balance: $1,000.00</li><li>Account Opened: 12-20-2019</li>                    <input type="hidden" name="checkingAccountId" value="C123" />
                    <input type="hidden" name="checkingDate" value="12-20-2019" />
                    <input type="hidden" name="checkingBalance" value="1000" />
                    
                    <div class="accountInner">
                        <input type="text" name="checkingWithdrawAmount" value="" />
                        <input type="submit" name="withdrawChecking" value="Withdraw" />
                    </div>
                    <div class="accountInner">
                        <input type="text" name="checkingDepositAmount" value="" />
                        <input type="submit" name="depositChecking" value="Deposit" /><br />
                    </div>
            
            </div>

            <div class="account">
                <h2>Savings Account</h2><li>Account ID: S123</li><li>Balance: $5,000.00</li><li>Account Opened: 03-20-2020</li>                    <input type="hidden" name="savingsAccountId" value="S123" />
                    <input type="hidden" name="savingsDate" value="03-20-2020" />
                    <input type="hidden" name="savingsBalance" value="5000" />
                    
                    <div class="accountInner">
                        <input type="text" name="savingsWithdrawAmount" value="" />
                        <input type="submit" name="withdrawSavings" value="Withdraw" />
                    </div>
                    <div class="accountInner">
                        <input type="text" name="savingsDepositAmount" value="" />
                        <input type="submit" name="depositSavings" value="Deposit" /><br />
                    </div>
            
            </div>
            
        </div>
    </form>
</body>
</html>
</body>

</html>