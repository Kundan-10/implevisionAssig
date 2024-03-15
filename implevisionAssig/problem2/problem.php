function detectFra($trans){

    $fraud=[];

    foreach($trasns as tran){

        $id=$tran[0];
        $amount=$tran[1];
        $city=$tran[3];
        $time=$tran[4];


        foreach($trans as others){
            $others_id=$others[0];
            $others_amount=$others[1];
            $others_city=$others[3];
            $others_time=$others[4];


            if($id != $others_id && abs($time-$others_time) <= 30 && $city != $others_city){
                $fraud[$id]=true;
                $$fraud[$others_id]=true;
            }
        }

        if($amount  > 10000){
            $fraud[$id]=true;
        }
    }

    return array_keys($fraud);

}

$trans=[ [1, 1000, 500.00, “Vadodara”, 0], [2, 1000, 500.00, “Mumbai”, 5], [3, 1001, 500.00, “Mumbai”, 10], [4, 
1001, 10000.00, “Mumbai”, 10]] ;