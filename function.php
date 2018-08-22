<?php
//This function just only for something different method to give status ansver)
 function status ($email,$amount)
{
    if(isset($email)&& isset($amount))
    {
        $input = array("approved", "rejected");
        $rand_key = array_rand($input, 1);
        if ($rand_key == 1) {
            $rand_key = "approved";
            echo 'You transaction ID:' . rand(1000, 10000) . '<br>';
            echo "STATUS: " . $rand_key . '<br>' . date('l jS \of F Y h:i:s A');
        } elseif ($rand_key == 0) {
            $rand_key = "rejected";
            echo "We are so sorry but you transactions STATUS: " . $rand_key . '<br>' . " Please try again later" . '<br>' . date('l jS \of F Y h:i:s A');
        } else {
            echo "Non Transactions";
        }
    }
}
status('mail.com',12412412);

