<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 16/03/2019
 * Time: 12:37
 */

call_user_func(
    function ($_EXTKEY) {
        /***************
         * Static templates
         */
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $_EXTKEY,
            'Configuration/TypoScript',
            'Customer'
        );
    },
    'user_customer'
);
