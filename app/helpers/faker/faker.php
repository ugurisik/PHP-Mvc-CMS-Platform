<?php

class faker
{

    public $faker;
    public function __construct()
    {
        $this->faker = Faker\Factory::create();
    }

    public function name()
    {
        return $this->faker->name;
    }

    public function email()
    {
        return $this->faker->email;
    }

    public function password()
    {
        return $this->faker->password;
    }

    public function phone()
    {
        return $this->faker->phoneNumber;
    }

    public function address()
    {
        return $this->faker->address;
    }

    public function city()
    {
        return $this->faker->city;
    }

    public function country()
    {
        return $this->faker->country;
    }

    public function text($length = 200)
    {
        return $this->faker->text($length);
    }

    public function sentence($length = 6)
    {
        return $this->faker->sentence($length);
    }

    public function paragraph($length = 3)
    {
        return $this->faker->paragraph($length);
    }

    public function date($format = 'Y-m-d')
    {
        return $this->faker->date($format);
    }

    public function time($format = 'H:i:s')
    {
        return $this->faker->time($format);
    }

    public function dateTime($format = 'Y-m-d H:i:s')
    {
        return $this->faker->dateTime($format);
    }

    public function number($min = 0, $max = 100)
    {
        return $this->faker->numberBetween($min, $max);
    }

    public function image($width = 640, $height = 480)
    {
        return $this->faker->imageUrl($width, $height);
    }

    public function color()
    {
        return $this->faker->hexColor;
    }

    public function ipv4()
    {
        return $this->faker->ipv4;
    }

    public function ipv6()
    {
        return $this->faker->ipv6;
    }

    public function macAddress()
    {
        return $this->faker->macAddress;
    }

    public function url()
    {
        return $this->faker->url;
    }

    public function domainName()
    {
        return $this->faker->domainName;
    }

    public function slug($length = 6)
    {
        return $this->faker->slug($length);
    }
}
