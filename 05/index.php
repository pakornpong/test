<?php
class GroupNumber
{
    public function getGroupNumber($group)
    {
        $array = array();
        foreach (range(1, 500) as $number) {
            if($group==20){
                if($number%20==0){
                    array_push($array,$number);
                }
            }elseif($group==15){
                if($number%15==0&&!($number%20==0)){
                    array_push($array,$number);
                }
            }elseif($group==9){
                if($number%9==0&&!($number%15==0)&&!($number%20==0)){
                    array_push($array,$number);
                }
            }elseif($group==5){
                if($number%5==0&&!($number%9==0)&&!($number%15==0)&&!($number%20==0)){
                    array_push($array,$number);
                }
            }elseif($group==3){
                if($number%3==0&&!($number%5==0)&&!($number%9==0)&&!($number%15==0)&&!($number%20==0)){
                    array_push($array,$number);
                }
            }
        }
        $group = $array;
        return $group;
    }
}
$group_number = new GroupNumber();
$group_20 = $group_number->getGroupNumber(20);
$group_15 = $group_number->getGroupNumber(15);
$group_9 = $group_number->getGroupNumber(9);
$group_5 = $group_number->getGroupNumber(5);
$group_3 = $group_number->getGroupNumber(3);
echo '<br>';
echo 'Group#20: '.implode(',', $group_20);
echo '<br>';
echo 'Group#15: '.implode(',', $group_15);
echo '<br>';
echo 'Group#9: '.implode(',', $group_9);
echo '<br>';
echo 'Group#5: '.implode(',', $group_5);
echo '<br>';
echo 'Group#3: '.implode(',', $group_3);
echo '<br>';
?>
