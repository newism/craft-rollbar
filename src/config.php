<?php
/**
 * NSM Rollbar plugin for Craft CMS 3.x
 *
 * Rollbar integration for CraftCMS
 *
 * @link      https://newis.com.au
 * @copyright Copyright (c) 2019 Leevi Graham
 */

/**
 * Rollbar config.php
 *
 * This file exists only as a template for the Rollbar settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'newism-rollbar.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [

    // Your project's post_server_item access token, which you can find in the Rollbar.com interface.
    "accessToken" => '',

    // See: https://docs.rollbar.com/docs/browser-js
    "enableJs" => '',

    // Your project's post_client_item access token, which you can find in the Rollbar.com interface.
    'postClientItemAccessToken' => '',

];
