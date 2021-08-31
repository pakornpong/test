<?php


class Permission
{
    // จงเปลี่ยนค่าสิทธิ์ให้เป็นตัวเลขตามผลลัพธดังต่อไปนี้
    // โดยกำหนดค่า "r"=4,"w"=2,"x"=1,"-"=0
    public function convert($input)
    {
        $permissions = $input;
        $result = 0;
        if ($permissions[1] == 'r') $result+=400;
        if ($permissions[2] == 'w') $result+=200;
        if ($permissions[3] == 'x') $result+=100;
        if ($permissions[4] == 'r') $result+=40;
        if ($permissions[5] == 'w') $result+=20;
        if ($permissions[6] == 'x') $result+=10;
        if ($permissions[7] == 'r') $result+=4;
        if ($permissions[8] == 'w') $result+=2;
        if ($permissions[9] == 'x') $result+=1;
        return $result;

    }
}

$x = new Permission();

echo $x->convert("-rwxrwxr-x") . "<br>"; // 775
echo $x->convert("-r-x---r-x") . "<br>"; // 505
echo $x->convert("-rw-rw-rw-") . "<br>"; // 666
echo $x->convert("-r--r--r--") . "<br>"; // 444
echo $x->convert("---x--x--x") . "<br>"; // 111
echo $x->convert("-rw-------") . "<br>"; // 600
echo $x->convert("-rw-rw-r--") . "<br>"; // 664

?>