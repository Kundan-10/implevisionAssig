function checkPalindrome($string){

    $str=strtolower($string);

    $rever=strrev($str);

    return $str === $rever;

}

$string="greek";

if(checkPalindrome($string)){
    echo"Palindrome";
}else{
    echo "not Palindrome";
}


