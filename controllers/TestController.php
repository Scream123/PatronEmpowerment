<?php

class TestController
{

    public  function showUsers()
    {
       $users =  User::getUsers();

       require ROOT . '/view/header.php';
        require (ROOT . '/view/show.php');
        require ROOT . '/view/footer.php';


        return;
    }
    public function  getCount($value, $array)
    {
        $counter = 0;
        foreach($array as $value)
        {
            if($value === $value)
                $counter++;
        }
        return $counter;

    }

    public function arrayItem(){
        $needle = 'apple';
        $fruits = [
            'banana',
            [
                [
                    'pear',
                    'apple',
                    'cherry'
                ],
                'apple',
                'pear',
                [
                    'peach',
                    [
                        'lemon',
                        'apple',
                    ]
                ]

            ],
            'lemon',
            'cherry',
        ];
        $res = $this->getCount($needle, $fruits);
        require (ROOT . '/view/show.php');
        return;
    }
}