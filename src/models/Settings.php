<?php
/**
 * NSM Rollbar plugin for Craft CMS
 *
 * Rollbar integration for CraftCMS
 *
 * @link      https://newis.com.au
 * @copyright Copyright (c) 2019 Leevi Graham
 */

namespace newism\rollbar\models;

use craft\behaviors\EnvAttributeParserBehavior;
use craft\helpers\App;
use craft\base\Model;

/**
 * Rollbar Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Leevi Graham
 * @package   Rollbar
 * @since     0.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $accessToken;
    public $enableJs;
    public $postClientItemAccessToken;
    public $exceptionIgnoreList;

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            ['accessToken', 'string'],
            ['accessToken', 'required'],
            ['postClientItemAccessToken', 'string'],
            ['exceptionIgnoreList', 'default', 'value' => ''],
        ];
    }

    public function behaviors() :array
    {
        return [
            'parser' => [
                'class' => EnvAttributeParserBehavior::class,
                'attributes' => ['accessToken', 'postClientItemAccessToken'],
            ],
        ];
    }

    /**
     * Returns an Traversable containing all ignored exceptions
     * @return \Traversable
     */
    public function getExceptionsToIgnore() : \Traversable
    {
        if($this->exceptionIgnoreList != null)
        {
            foreach(explode(",", $this->exceptionIgnoreList) as $exception)
            {
                yield trim(strtolower($exception));
            }
        }
    }

    public function getAccessToken(): string
    {
        return App::parseEnv($this->accessToken);
    }

    public function getPostClientItemAccessToken(): string
    {
        return App::parseEnv($this->postClientItemAccessToken);
    }
}
