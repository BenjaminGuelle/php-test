<?php

namespace PhpTest\Services;

use PhpTest\Services\WeatherInfos;
use Throwable;

/**
 * Class WeatherService
 *
 * Open Weather Api doc : https://openweathermap.org/api
 *
 * @package PhpTest
 */
class WeatherService
{
    /**
     * @var string
     */
    private string $apiKey;

    /**
     * @var string
     */
    private string $apiUrl;

    /**
     * WeatherService constructor.
     * @param string $apiKey
     * @param string $apiUrl
     */
    public function __construct(string $apiKey = OPENWEATHER_API_KEY, string $apiUrl = 'https://api.openweathermap.org/data/2.5/')
    {
        $this->apiKey = $apiKey;
        $this->apiUrl = $apiUrl;
    }

    // @todo

    // ==================
    //       METHOD
    // ==================
    public function something() 
    {
        
    }

    public function getCurrentWeatherByName(string $name) 
    {
        try  {
            if ($name != null || $name != '')
            {
                $apiRequest = $this->getApiUrl() . "/weather?q=" . $name . "&units=metric&appid=" . $this->getApiKey();
                $response = json_decode(file_get_contents($apiRequest));
                return new WeatherInfos($response->name, $response->main->temp);
            }
            else echo "nom de ville invalide";
        } catch (\Throwable $th) {
            echo "nom de ville invalide";
        }
    }


    // ==================
    //  GETTER & SETTER
    // ==================

    /**
     * Get the value of apiKey
     *
     * @return  string
     */ 
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set the value of apiKey
     *
     * @param  string  $apiKey
     *
     * @return  self
     */ 
    public function setApiKey(string $apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get the value of apiUrl
     *
     * @return  string
     */ 
    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * Set the value of apiUrl
     *
     * @param  string  $apiUrl
     *
     * @return  self
     */ 
    public function setApiUrl(string $apiUrl)
    {
        $this->apiUrl = $apiUrl;

        return $this;
    }
}
