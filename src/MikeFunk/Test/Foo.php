<?php
/**
 * @package DIExample
 * @copyright 2013 Internet Brands, Inc. All Rights Reserved.
 */
namespace MikeFunk\Test;

/**
 * Foo
 *
 * @author Michael Funk <mfunk@internetbrands.com>
 */
class Foo
{

    /**
     * This just holds the injected instance of Bar
     * @var MikeFunk\Test\Bar
     */
    protected $bar;

    /**
     * inject Bar into $bar and then $this->bar with type hinting. The Bar
     * class is bound to the BarInterface in config/di.yml
     *
     * @return void
     */
    public function __construct(BarInterface $bar)
    {
        $this->bar = $bar;
    }

    /**
     * Just return the string from Bar::returnMe()
     *
     * @return string
     */
    public function returnMe()
    {
        return $this->bar->returnMe();
    }
}
