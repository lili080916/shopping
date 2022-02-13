<?php
return array(
    // set your paypal credential
    'client_id' => 'AfTaDUoc9CZYaEV9IIIcGbkipX6DGYOkviTu8h-bnk1di-0TkLrtBLkZM4Zf3k-NmvXnVl_mDmDM-s2y',
    'secret' => 'EDJ3Jqw9M38N15OsyggGKMOF4Ap-YRcQWWa1f6OvH2mFAGEcE5YAO--jCSUuGBQkkCtKHsDjXDJv2lXK',
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
        'http.ConnectionTimeOut' => 60,
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
