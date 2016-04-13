<?php

$object = new class {
    public function hello($message)
    {
        return "Hello $message";
    }
};

echo $object->hello('PHP');
