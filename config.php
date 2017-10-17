<?php
class Config {
	/* global cache settings */
    public $cache = 'memcache';          // 'memcache', 'apc' or 'file' - leave blank to disable caching
    public $cache_time = 86400;  // in seconds e.g. 86400 = 24h
    
    /* memcache settings - only required if cache set to memcache */
    public $cache_server = 'countstat-php-countstat.1d35.starter-us-east-1.openshiftapps.com';
    public $cache_port = 8080;
    public $cache_persistent = true;
    
    /* filecache settings - only required if cache set to file */
    public $cache_directory = '/countstat/'; // needs trailing slash!
    
    /* database settings - only required to track shares */
    public $db_type = '';
    public $db_host = '';
    public $db_name = '';
    public $db_user = '';
    public $db_pass = '';
    
    /* default output settings - ignored if url parameter has been passed */
    public $format = 'json';              // 'json', 'jsonp' or 'xml'
    public $callback = 'processShares';   // default jsonp callback function name
    
}
