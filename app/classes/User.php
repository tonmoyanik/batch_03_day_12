<?php
namespace App\classes;
class User
{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'Karwabbazar';

    public function login()
    {
        echo 'In Login';
    }

    protected function logout()
    {
        echo 'In logout';
    }

    private function profile()
    {
        echo 'In profile';
    }
}