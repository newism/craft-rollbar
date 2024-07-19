<p align="center"><img src="./src/icon.svg" width="100" height="100" alt="Rollbar for Craft CMS"></p>

<h1 align="center">Rollbar plugin for Craft CMS</h1>

This plugin provides [Rollbar](https://rollbar.com) integration for [Craft CMS](https://craftcms.com).

## Features

* PHP Exception reporting to Rollbar
* JS Exception reporting to Rollbar (optional)

## Requirements

This plugin requires Craft CMS 3.1 or later

## Installation

### Plugin Store

To install `Rollbar`, navigate to the Plugin Store section of your Craft control panel, search for `Rollbar`, and click the Try button.

### Composer

You can also add the package to your project using Composer.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require newism/craft-rollbar

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Rollbar.

## Configuration

First you'll need to setup a [Rollbar account](https://rollbar.com/).

Once you have an account you'll be provided with an `Access Key`. 

To add the Afterpay payment gateway, go to Settings → Plugins → Rollbar and enter the access key.

You may then decide to configure your Rollbar gateway using a [config file](https://docs.craftcms.com/commerce/v2/gateway-config.html#gateway-configuration). An example file looks like:

    <?php
    return [
        // Your project's post_server_item access token, which you can find in the Rollbar.com interface.
        "accessToken" => '',

        // See: https://docs.rollbar.com/docs/browser-js
        "enableJs" => '',

        // Your project's post_client_item access token, which you can find in the Rollbar.com interface.
        'postClientItemAccessToken' => '',
        
        // If you wish Rollbar to ignore any exception types, please provide the fully qualified name here, separated by a comma
        'exceptionIgnoreList' => '',
    ];

## Support

If you've found a bug, or would like to make a feature request,
head to the [GitHub Repo](https://github.com/newism/craft-rollbar/issues) and file an issue. 
Pull requests are also most welcome!

### Email

Any feedback, comments, questions or suggestions please email us at `dev at mou.me`.

----

Brought to you by [Newism](https://newism.com.au), maintained by [Chris Chrisostomou](https://mou.me)
