<?php


namespace Mouf\Javascript\JqBootstrapValidation;


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
