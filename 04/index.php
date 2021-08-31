<?php

class Truck
{

    protected function setText($text)
    {
        $this->text = $text;
    }
}

class TruckCopy extends Truck
{
    private function setBodyColor($color)
    {
        $this->color = $color;
    }

    public function getTruckHtml($color, $text)
    {
        // create the truck with html here
        ?>
        <div class="truck">
            <div class="carbody">
                <div class="box">
                    <h2>
                        <?php echo $text?>
                    </h2>
                </div>

                <div class="head" style="background-color: <?php echo $color?>"></div>
                <div class="glass"></div>
            </div>

            <div class="base" style="background-color: <?php echo $color?>"></div>
            <div class="wheel">
                <div class="wheel_back">
                    <div class="wheel_l"></div>
                    <div class="wheel_r"></div>
                </div>
                <div class="wheel_font">
                    <div class="wheel_l"></div>
                    <div class="wheel_r"></div>
                </div>
            </div>
        </div>

        <?php
    }
}

$truck_a = (new TruckCopy())->getTruckHtml('#CCE70B', 'Hello, Ecommerce.');
$truck_b = (new TruckCopy())->getTruckHtml('#E5560E', 'Hi, Magento.');
echo $truck_a;
echo '<br />';
echo $truck_b;
?>
    <style>
        body{
            font-family: 'Prompt', sans-serif;
        }
        .truck{
        }
        .carbody{
            display: flex;
            align-items: flex-end;
        }
        .box{
            display: flex;
            justify-content: center;
            align-items: center;
            color: #000;
            background-color: #EFEFEF;
            width: 150px;
            height: 100px;
        }
        .head{
            height: 75px;
            width: 40px;
            padding-left: 2px;
            transform: translate(2px, 0px);
        }
        .glass{
            background-color: #BCDAEA;
            width: 40px;
            height: 75px;
            border-radius: 0px 50px 30px 0px;
        }
        .base{
            width: 230px;
            height: 10px;
            position: absolute;
            z-index: 1;
        }
        .wheel{
            display: flex;
        }
        .wheel_back{
            display: flex;
            transform: translateX(20px);
            z-index: 0;
        }
        .wheel_font{
            display: flex;
            transform: translateX(150px);
            z-index: 0;
        }

        .wheel_l{
            background-color: #B3B3B3;
            width: 14px;
            height: 30px;
            border-radius: 15px 0px 0px 15px;
            padding-right: 1px;
        }
        .wheel_r{
            background-color: #B3B3B3;
            width: 14px;
            height: 30px;
            border-radius: 0px 15px 15px 0px;
            padding-right: 1px;
            transform: translate(3px, 0px);
        }
    </style>
