<?php
if(isset($_POST['check']))
{
    $str=$_POST['str'];

    $vowels=0;
    $consonants=0;
    $digits=0;
    $spaces=0;

    for($i=0;$i<strlen($str);$i++)
    {
        $ch=$str[$i];

        if(preg_match('/[aeiouAEIOU]/',$ch))
            $vowels++;
        elseif(preg_match('/[a-zA-Z]/',$ch))
            $consonants++;
        elseif(is_numeric($ch))
            $digits++;
        elseif($ch==" ")
            $spaces++;
    }

    echo "Vowels = $vowels<br>";
    echo "Consonants = $consonants<br>";
    echo "Digits = $digits<br>";
    echo "Spaces = $spaces<br>";

    echo "Reverse String = ".strrev($str)."<br>";

    if(strtolower($str)==strtolower(strrev($str)))
        echo "Palindrome";
    else
        echo "Not Palindrome";
}
?>

<form method="post">
    Enter String:
    <input type="text" name="str">

    <input type="submit" name="check" value="Check">
</form>
