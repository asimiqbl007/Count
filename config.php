<?php
class Config {
	/* global cache settings */
    public $cache = 'memcache';          // 'memcache', 'apc' or 'file' - leave blank to disable caching
    public $cache_time = 86400;  // in seconds e.g. 86400 = 24h
    
    /* memcache settings - only required if cache set to memcache */
    public $cache_server = 'localhost';
    public $cache_port = 42;
    public $cache_persistent = true;
    
    /* filecache settings - only required if cache set to file */
    public $cache_directory = '/blstat/'; // needs trailing slash!
    
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
