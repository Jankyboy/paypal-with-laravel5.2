<?php
return array(
    // set your paypal credential
    'client_id' => 'ASd9cKHWY_XiF-aaBKmbqI0woJgz6mzjDxkssKvrCNdSbX24oPlN0sbBwGfI10EaeTZ0Alw6YAeu_fjw1',
    'secret' => 'EHsKdK-GLOI0PhIo2iXMqWepORHkCOVhgHkXniMY6nNOj30SJvlanQOSvyDeGPokZfwgKDpYMi0qRfZe2',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 300,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);