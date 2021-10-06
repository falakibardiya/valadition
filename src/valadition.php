<?php namespace RoocketValidation;

class Validation{
    public function has(array $data , string $fild)
    {
        return isset($data[$fild]);
    }
}