<?php
$user = [
    "student" =>   [
        "name" => [
            "firstname" => "pooya",
            "lastname" => "valikhanli"
        ],
        "tele" => [
            "telehome" => "1131231548",
            "phonenumber" => "31326516540"
        ],
        "address" => [
            "homeaddress" => "dsvasddsv asdv sdav sdavasd v",
            "workaddress" => "djvbjbvdjadvadsadsv"
        ],
        "emailAddress" => "dfjkgmflkdg@3456465",
    ],
    "ostad" => [
        "name" => [
            "firstname" => "aliajscdjkagjkdgkajdhkjahbdk",
            "lastname" => "valikhanli"
        ],
        "tele" => [
            "telehome" => "1131231548",
            "phonenumber" => "31326516540"
        ],
        "address" => [
            "homeaddress" => "dsvasddsv asdv sdav sdavasd v",
            "workaddress" => "djvbjbvdjadvadsadsv"
        ], "emailAddress" => "dfjkgmflkdg@3456465",
    ]
];
//code jason
$js = json_encode($user);
print_r($js);
echo "<hr><br>";
//decode json
$ob=json_decode($js,0);//json to object
$pb=json_decode($js,1);//json to array

//print array
print_r($pb);
echo"<hr>";
//print object 
print_r($ob);
//print object
echo"<hr>".($ob->ostad->name->firstname);
//print array 
echo "<hr>".($pb["student"]["name"]["firstname"]);
