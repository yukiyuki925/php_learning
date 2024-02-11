<?php
$members_2 = [
    'ホンダ' => [
      'height' => 170,
      'hobby' => 'サッカー'
    ],
    '香川' => [
      'height' => 175,
      'hobby' => 'ドリブル'
    ]
];

foreach ($members_2 as $member_1){
  foreach($member_1 as $member){
    echo $member;
  }
}
?>