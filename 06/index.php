<?php
class ProductionTime
{
    public function Delivery($order_date)
    {
        // return delivery date
    }
    protected function isHoliday($order_dat)
    {
        $holiday = [2018-01-01, 2018-01-02, 2018-03-01, 2018-04-06, 2018-04-13, 2018-04-14, 2018-04-15,
            2018-04-16, 2018-05-01];
    }
}
echo ProductionTime::Delivery('2018-04-11');
// result 2018-04-17
echo $today = date("D M j G:i:s T Y");
?>