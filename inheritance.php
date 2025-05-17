<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        class wallet{
            protected $balance;
            public function withdraw($amt){
                    if($amt<=$this->balance){
                        "Your Current balance was $this->balance";
                        $this->balance-=$amt;
                        // echo "Withdrat Succesfull" .  $this->balance -= amt;
                        echo "<br>Withdraw successfull and balance is {$this->balance} ";
                       
                    }
                    else{
                        echo "You do not have sufficient balanace {$amt}";
                    }
            }
            public function deposit($amt){
                if($amt<=0){
                echo "<br>Enter Amount more than 0";
                    }
                else{
                    $this->balance+=$amt;
                    echo "<br>Deposit Successfull and the new balance is $this->balance ";
                }
            }
        }

        class google_pay extends wallet{
            public function __construct($opening_bal){
                if($opening_bal>0)
                    $this->balance = $opening_bal;
                }
                  public function log_transaction(){

            }
        }

        class paytm extends wallet{
            public $is_kyc_done;
            public function __construct($opening_bal){
                if($opening_bal>0){
                    $this->balance = $opening_bal;
                }
            }
          
        }
        class apple_pay extends wallet{
            public $apple_pay_id;
        }

         

        $my_gpay = new google_pay(100);
        // $paytm_wallet->deposit(500);
        

        $paytm_wallet = new paytm(100);
        $paytm_wallet ->deposit(1000);
        $paytm_wallet->withdraw(100);

    ?>
</body>
</html>
