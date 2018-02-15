<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quickSurvey_get_survey' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TplmBundle\\Controller\\SurveyController::getSurveyAction',    '_format' => NULL,  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/survey',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quickSurvey_get_surveys' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TplmBundle\\Controller\\SurveyController::getSurveysAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/surveys',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quickSurvey_get_surveysByUser' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TplmBundle\\Controller\\SurveyController::getSurveysByUserAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/surveys',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quickSurvey_post_survey' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TplmBundle\\Controller\\SurveyController::postSurveyAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/survey',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quickSurvey_put_survey' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TplmBundle\\Controller\\SurveyController::putSurveyAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/survey',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quickSurvey_delete_survey' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TplmBundle\\Controller\\SurveyController::deleteSurveyAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/survey',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quickSurvey_get_personsBySurvey' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TplmBundle\\Controller\\PersonController::getPersonsBySurveyAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/persons',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/survey',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quickSurvey_get_persons' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TplmBundle\\Controller\\PersonController::getPersonsAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/persons',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quickSurvey_get_questions' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TplmBundle\\Controller\\QuestionController::getQuestionsAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/questions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quickSurvey_get_user' => array (  0 =>   array (    0 => 'username',    1 => 'password',  ),  1 =>   array (    '_controller' => 'TplmBundle\\Controller\\UserAccountController::getUserAccountAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'password',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'username',    ),    2 =>     array (      0 => 'text',      1 => '/api/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'quickSurvey_create_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TplmBundle\\Controller\\UserAccountController::createUserAccountAction',    '_format' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
