<?php

namespace PhpTest\Services;

/**
 * Class WeatherInfos
 *
 * Open Weather Api doc : https://openweathermap.org/api
 *
 * @package PhpTest
 */
class WeatherInfos
{
    /**
     * @var string
     */
    private string $cityName;

    /**
     * @var string
     */
    private string $temp;

    /**
     * WeatherService constructor.
     * @param string $cityName
     * @param string $temp
     */
    public function __construct(string $cityName, string $temp)
    {
        $this->cityName = $cityName;
        $this->temp = $temp;
    }

    // ==================
    //       METHOD
    // ==================

    // ==================
    //  GETTER & SETTER
    // ==================
    /**
     * Get the value of cityName
     *
     * @return  string
     */ 
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set the value of cityName
     *
     * @param  string  $cityName
     *
     * @return  self
     */ 
    public function setCityName(string $cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Get the value of temp
     *
     * @return  string
     */ 
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set the value of temp
     *
     * @param  string  $temp
     *
     * @return  self
     */ 
    public function setTemp(string $temp)
    {
        $this->temp = $temp;

        return $this;
    }
}