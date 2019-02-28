<?php
CONST BR="<br/>";

$students= array(2,4,3,5,7,1,3,3,6,7,5,5,4,1,3,3,7,3,5,6);
rsort($students);

for($i=0;count($students) > $i;$i++){
   
    if($students[$i] == 7){

        $first= [$students[$i],1];
   
    }
    if($students[$i] == 6){

        $second= [$students[$i],2];
   
    }
    if($students[$i] == 5){

        $third= [$students[$i],3];
   
    }
    if($students[$i] == 4){

        $forth=[ $students[$i],4];
   
    }
    if($students[$i] == 3){

        $fifth= [$students[$i],5];
   
    }
    if($students[$i] == 2){

        $sixth= [$students[$i],6];
   
    }
    if($students[$i] == 1){

        $seventh= [$students[$i],7];
   
    }

}

$array =[
         [ 'number' => $first[0], 'position' => $first[1]],
         [ 'number' => $first[0], 'position' => $first[1]],
         [ 'number' => $first[0], 'position' => $first[1]],
         [ 'number' => $second[0],'position' => $second[1]], //...
         [ 'number' => $second[0],'position' => $second[1]],
         [ 'number' => $third[0],'position' => $third[1]],
         [ 'number' => $third[0],'position' => $third[1]],
         [ 'number' => $third[0],'position' => $third[1]],
         [ 'number' => $third[0],'position' => $third[1]],
         [ 'number' => $forth[0],'position' => $forth[1]],
         [ 'number' => $forth[0],'position' => $forth[1]],
         [ 'number' => $fifth[0],'position' => $fifth[1]],
         [ 'number' => $fifth[0],'position' => $fifth[1]],
         [ 'number' => $fifth[0],'position' => $fifth[1]],
         [ 'number' => $fifth[0],'position' => $fifth[1]],
         [ 'number' => $fifth[0],'position' => $fifth[1]],
         [ 'number' => $fifth[0],'position' => $fifth[1]],
         [ 'number' => $sixth[0],'position' => $sixth[1]],
         [ 'number' => $seventh[0],'position' => $seventh[1]],
         [ 'number' => $seventh[0],'position' => $seventh[1]]
];

