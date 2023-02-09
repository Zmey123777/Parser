<?php
// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 9.50.2.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

    namespace App\Service { 
            /**
     * 
     *
     */ 
        class ParserService {
         
    }
     
}

    namespace Vedmant\FeedReader\Facades { 
            /**
     * 
     *
     */ 
        class FeedReader {
                    /**
         * Used to parse an RSS feed.
         *
         * @param $url
         * @param string $configuration
         * @param array $options
         * @return \SimplePie 
         * @static 
         */ 
        public static function read($url, $configuration = 'default', $options = [])
        {
                        /** @var \Vedmant\FeedReader\FeedReader $instance */
                        return $instance->read($url, $configuration, $options);
        }
         
    }
     
}

    namespace Illuminate\Support\Facades { 
            /**
     * 
     *
     * @see \Illuminate\Config\Repository
     */ 
        class Config {
                    /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->has($key);
        }
                    /**
         * Get the specified configuration value.
         *
         * @param array|string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * Get many configuration values.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function getMany($keys)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->getMany($keys);
        }
                    /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function set($key, $value = null)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        $instance->set($key, $value);
        }
                    /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function prepend($key, $value)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        $instance->prepend($key, $value);
        }
                    /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function push($key, $value)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        $instance->push($key, $value);
        }
                    /**
         * Get all of the configuration items for the application.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->all();
        }
                    /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * Get a configuration option.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        $instance->offsetSet($key, $value);
        }
                    /**
         * Unset a configuration option.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
                        /** @var \Illuminate\Config\Repository $instance */
                        $instance->offsetUnset($key);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \Illuminate\Config\Repository::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        \Illuminate\Config\Repository::mixin($mixin, $replace);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Config\Repository::hasMacro($name);
        }
                    /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
                        \Illuminate\Config\Repository::flushMacros();
        }
         
    }
     
}

    namespace Spatie\LaravelIgnition\Facades { 
            /**
     * 
     *
     * @see \Spatie\FlareClient\Flare
     */ 
        class Flare {
                    /**
         * 
         *
         * @static 
         */ 
        public static function make($apiKey = null, $contextDetector = null)
        {
                        return \Spatie\FlareClient\Flare::make($apiKey, $contextDetector);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setApiToken($apiToken)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setApiToken($apiToken);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function apiTokenSet()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->apiTokenSet();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setBaseUrl($baseUrl)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setBaseUrl($baseUrl);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setStage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setStage($stage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sendReportsImmediately()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendReportsImmediately();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function determineVersionUsing($determineVersionCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->determineVersionUsing($determineVersionCallable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reportErrorLevels($reportErrorLevels)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportErrorLevels($reportErrorLevels);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function filterExceptionsUsing($filterExceptionsCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->filterExceptionsUsing($filterExceptionsCallable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function filterReportsUsing($filterReportsCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->filterReportsUsing($filterReportsCallable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function version()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->version();
        }
                    /**
         * 
         *
         * @return array<int, FlareMiddleware|class-string<FlareMiddleware>> 
         * @static 
         */ 
        public static function getMiddleware()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddleware();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContextProviderDetector($contextDetector)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContextProviderDetector($contextDetector);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerFlareHandlers()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerFlareHandlers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerExceptionHandler()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerExceptionHandler();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerErrorHandler()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerErrorHandler();
        }
                    /**
         * 
         *
         * @param \Spatie\FlareClient\FlareMiddleware\FlareMiddleware|array<FlareMiddleware>|\Spatie\FlareClient\class-string<FlareMiddleware> $middleware
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function registerMiddleware($middleware)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerMiddleware($middleware);
        }
                    /**
         * 
         *
         * @return array<int,FlareMiddleware|class-string<FlareMiddleware>> 
         * @static 
         */ 
        public static function getMiddlewares()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddlewares();
        }
                    /**
         * 
         *
         * @param string $name
         * @param string $messageLevel
         * @param \Spatie\FlareClient\array<int,  mixed> $metaData
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function glow($name, $messageLevel = 'info', $metaData = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->glow($name, $messageLevel, $metaData);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function handleException($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleException($throwable);
        }
                    /**
         * 
         *
         * @return mixed 
         * @static 
         */ 
        public static function handleError($code, $message, $file = '', $line = 0)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleError($code, $message, $file, $line);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function applicationPath($applicationPath)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->applicationPath($applicationPath);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function report($throwable, $callback = null, $report = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->report($throwable, $callback, $report);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reportMessage($message, $logLevel, $callback = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportMessage($message, $logLevel, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sendTestReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendTestReport($throwable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reset()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reset();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function anonymizeIp()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->anonymizeIp();
        }
                    /**
         * 
         *
         * @param \Spatie\FlareClient\array<int,  string> $fieldNames
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function censorRequestBodyFields($fieldNames)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->censorRequestBodyFields($fieldNames);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReport($throwable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createReportFromMessage($message, $logLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReportFromMessage($message, $logLevel);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->stage($stage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function messageLevel($messageLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->messageLevel($messageLevel);
        }
                    /**
         * 
         *
         * @param string $groupName
         * @param mixed $default
         * @return array<int, mixed> 
         * @static 
         */ 
        public static function getGroup($groupName = 'context', $default = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getGroup($groupName, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function context($key, $value)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->context($key, $value);
        }
                    /**
         * 
         *
         * @param string $groupName
         * @param \Spatie\FlareClient\array<string,  mixed> $properties
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function group($groupName, $properties)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->group($groupName, $properties);
        }
         
    }
     
}

    namespace Illuminate\Http { 
            /**
     * 
     *
     */ 
        class Request {
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validate($rules, ...$params)
        {
                        return \Illuminate\Http\Request::validate($rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
                        return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignature($absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignature($absolute);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static 
         */ 
        public static function hasValidRelativeSignature()
        {
                        return \Illuminate\Http\Request::hasValidRelativeSignature();
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }
         
    }
     
}


namespace  { 
            class MyParser extends \App\Service\ParserService {}
            class FeedReader extends \Vedmant\FeedReader\Facades\FeedReader {}
            class Config extends \Illuminate\Support\Facades\Config {}
            class Flare extends \Spatie\LaravelIgnition\Facades\Flare {}
     
}




