<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/survey')) {
                // quickSurvey_get_survey
                if (preg_match('#^/api/survey/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_quickSurvey_get_survey;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quickSurvey_get_survey')), array (  '_controller' => 'TplmBundle\\Controller\\SurveyController::getSurveyAction',  '_format' => NULL,));
                }
                not_quickSurvey_get_survey:

                // quickSurvey_get_surveys
                if ($pathinfo === '/api/surveys') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_quickSurvey_get_surveys;
                    }

                    return array (  '_controller' => 'TplmBundle\\Controller\\SurveyController::getSurveysAction',  '_format' => NULL,  '_route' => 'quickSurvey_get_surveys',);
                }
                not_quickSurvey_get_surveys:

            }

            if (0 === strpos($pathinfo, '/api/user')) {
                // quickSurvey_get_surveysByUser
                if (preg_match('#^/api/user/(?P<id>[^/]++)/surveys$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_quickSurvey_get_surveysByUser;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quickSurvey_get_surveysByUser')), array (  '_controller' => 'TplmBundle\\Controller\\SurveyController::getSurveysByUserAction',  '_format' => NULL,));
                }
                not_quickSurvey_get_surveysByUser:

                // quickSurvey_post_survey
                if (preg_match('#^/api/user/(?P<id>[^/]++)/survey$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_quickSurvey_post_survey;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quickSurvey_post_survey')), array (  '_controller' => 'TplmBundle\\Controller\\SurveyController::postSurveyAction',  '_format' => NULL,));
                }
                not_quickSurvey_post_survey:

            }

            if (0 === strpos($pathinfo, '/api/survey')) {
                // quickSurvey_put_survey
                if (preg_match('#^/api/survey/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_quickSurvey_put_survey;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quickSurvey_put_survey')), array (  '_controller' => 'TplmBundle\\Controller\\SurveyController::putSurveyAction',  '_format' => NULL,));
                }
                not_quickSurvey_put_survey:

                // quickSurvey_delete_survey
                if (preg_match('#^/api/survey/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_quickSurvey_delete_survey;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quickSurvey_delete_survey')), array (  '_controller' => 'TplmBundle\\Controller\\SurveyController::deleteSurveyAction',  '_format' => NULL,));
                }
                not_quickSurvey_delete_survey:

                // quickSurvey_get_personsBySurvey
                if (preg_match('#^/api/survey/(?P<id>[^/]++)/persons$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_quickSurvey_get_personsBySurvey;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quickSurvey_get_personsBySurvey')), array (  '_controller' => 'TplmBundle\\Controller\\PersonController::getPersonsBySurveyAction',  '_format' => NULL,));
                }
                not_quickSurvey_get_personsBySurvey:

            }

            // quickSurvey_get_persons
            if ($pathinfo === '/api/persons') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_quickSurvey_get_persons;
                }

                return array (  '_controller' => 'TplmBundle\\Controller\\PersonController::getPersonsAction',  '_format' => NULL,  '_route' => 'quickSurvey_get_persons',);
            }
            not_quickSurvey_get_persons:

            // quickSurvey_get_questions
            if ($pathinfo === '/api/questions') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_quickSurvey_get_questions;
                }

                return array (  '_controller' => 'TplmBundle\\Controller\\QuestionController::getQuestionsAction',  '_format' => NULL,  '_route' => 'quickSurvey_get_questions',);
            }
            not_quickSurvey_get_questions:

            if (0 === strpos($pathinfo, '/api/user')) {
                // quickSurvey_get_user
                if (preg_match('#^/api/user/(?P<username>[^/]++)/(?P<password>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_quickSurvey_get_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quickSurvey_get_user')), array (  '_controller' => 'TplmBundle\\Controller\\UserAccountController::getUserAccountAction',  '_format' => NULL,));
                }
                not_quickSurvey_get_user:

                // quickSurvey_create_user
                if ($pathinfo === '/api/user') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_quickSurvey_create_user;
                    }

                    return array (  '_controller' => 'TplmBundle\\Controller\\UserAccountController::createUserAccountAction',  '_format' => NULL,  '_route' => 'quickSurvey_create_user',);
                }
                not_quickSurvey_create_user:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
