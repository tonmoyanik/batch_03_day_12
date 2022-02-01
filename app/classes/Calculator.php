<?php
namespace App\classes;
use App\classes\User;
class Calculator extends User
{
    public $firstNumber;
    protected $secondNumber;
    private $operator;
    public $result;
    public $user;


    public function __construct($data)
    {
       $this->firstNumber   =   $data['first_number'];
       $this->secondNumber  =   $data['second_number'];
       $this->operator      =   $data['operator'];

    }

    public function index()
    {
        switch ($this->operator)
        {
            case '+':
                $this->result = $this->add();
                break;

            case '-':
                $this->result = $this->sub();
                break;

            case '*':
                $this->result =  $this->multiplication();
                break;

            case '/':
                $this->result =  $this->division();
                break;

            case '/':
                $this->result =  $this->remainder();
                break;

        }

        return $this->result;

    }

    protected function add()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    protected function sub()
    {
        return $this->firstNumber - $this->secondNumber;
    }

    protected function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;
    }

    protected function division()
    {
        return $this->firstNumber / $this->secondNumber;
    }

    protected function remainder()
    {
        return $this->firstNumber % $this->secondNumber;
    }

    private function two()
    {
        echo 'In Three';
    }

}