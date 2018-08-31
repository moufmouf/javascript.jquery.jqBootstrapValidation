<?php


namespace Mouf\Javascript\JqBootstrapValidation;


use Mouf\Html\Utils\WebLibraryManager\WebLibrary;
use TheCodingMachine\Funky\Annotations\Factory;
use TheCodingMachine\Funky\ServiceProvider;
use TheCodingMachine\Funky\Annotations\Tag;

class JqBootstrapValidationServiceProvider extends ServiceProvider
{
    /**
     * @Factory(name="jqBootstrapValidationWebLibrary", tags={@Tag(name="webLibraries", priority=-10.0)})
     */
    public static function createRootUrlWebLibrary(): WebLibrary
    {
        return new WebLibrary(['vendor/mouf/javascript.jquery.jq-bootstrap-validation/lib/jqBootstrapValidation.js'], []);
    }
}
