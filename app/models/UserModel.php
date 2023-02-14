<?php

class UserModel
{
    // Data statis 
    private $name = 'Cherryjayhawk';
    private $job = 'Brogrammer';
    private $age = '20';
    private $interest = 'Coffee';

    public function getInterest()
    {
        return $this->interest;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getJob()
    {
        return $this->job;
    }

    public function getName()
    {
        return $this->name;
    }
}