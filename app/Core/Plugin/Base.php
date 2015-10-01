<?php

namespace Core\Plugin;

/**
 * Plugin Base class
 *
 * @package  plugin
 * @author   Frederic Guillot
 */
abstract class Base extends \Core\Base
{
    /**
     * Method called for each request
     *
     * @abstract
     * @access public
     */
    abstract public function initialize();

    /**
     * Returns all classes that needs to be stored in the DI container
     *
     * @access public
     * @return array
     */
    public function getClasses()
    {
        return array();
    }

    /**
     * Listen on internal events
     *
     * @access public
     * @param  string   $event
     * @param  callable $callback
     */
    public function on($event, $callback)
    {
        $container = $this->container;

        $this->container['dispatcher']->addListener($event, function() use ($container, $callback) {
            call_user_func($callback, $container);
        });
    }

    /**
     * Get plugin name
     *
     * This method should be overrided by your Plugin class
     *
     * @access public
     * @return string
     */
    public function getPluginName()
    {
        return ucfirst(substr(get_called_class(), 7, -7));
    }

    /**
     * Get plugin description
     *
     * This method should be overrided by your Plugin class
     *
     * @access public
     * @return string
     */
    public function getPluginDescription()
    {
        return '';
    }

    /**
     * Get plugin author
     *
     * This method should be overrided by your Plugin class
     *
     * @access public
     * @return string
     */
    public function getPluginAuthor()
    {
        return '?';
    }

    /**
     * Get plugin version
     *
     * This method should be overrided by your Plugin class
     *
     * @access public
     * @return string
     */
    public function getPluginVersion()
    {
        return '?';
    }

    /**
     * Get plugin homepage
     *
     * This method should be overrided by your Plugin class
     *
     * @access public
     * @return string
     */
    public function getPluginHomepage()
    {
        return '';
    }
}
