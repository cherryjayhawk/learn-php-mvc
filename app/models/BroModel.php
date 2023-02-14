<?php

class BroModel
{
    private $bro = [
        [
            "name" => "FlyingTurtle",
            "job" => "Software Engineer",
            "age" => "30",
            "interest" => "NLP"
        ],

        [
            "name" => "ExecutionerGoat",
            "job" => "Software Engineer",
            "age" => "30",
            "interest" => "NLP"
        ],

        [
            "name" => "AllanTheBeaver",
            "job" => "Software Engineer",
            "age" => "30",
            "interest" => "NLP"
        ]
    ];

    public function getBros() {
        return $this->bro;
    }
}

