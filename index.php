<center><h1>thisisudaykant</h1>
<form action="" method="POST">
<input type="text" name="in">
<input type="submit" value="enter">
</form>
<?php
    $input=$_POST['in'];
    $name=$input;
    echo '<b>input :'.$name.'</b><br>';
    $n=explode(' ',$name);
    $size=strlen($name);
    $count=1;
    foreach($n as $i){
        echo '<p>'.$count.' ) '.$i.' ---> '.strlen($i).'(size)<br></p>';
        $count++;
    }
    echo '------------------------------------<br>';
    echo 'total(including space) = '.$size.'<br>';
    $url='<h4> url is ---> '.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'</h4>';
    echo $url;

    $arr=['uday ','kant','thakur'];
    echo sizeof($arr).'<br>';
    echo $arr[0];
    echo count($arr);
    //$i=0;
    foreach($arr as $arr1){
        echo $arr1[0];        
    }

    echo '<br>reverse the string<br>';
    $s="hello this is the string";
    echo $s.'<br>';
    $a=explode(' ',$s);
    echo 'it has '.count($a).' words<br>';
    //echo count_chars($s,1);
    
?>
</center>