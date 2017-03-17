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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

        // app_home_site
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::IndexAction',  '_route' => 'app_home_site',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::LoginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // app_register_site
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegisterController::IndexAction',  '_route' => 'app_register_site',);
        }

        // app_confirmation_email
        if (0 === strpos($pathinfo, '/confirmation/account') && preg_match('#^/confirmation/account/(?P<user_id>[^/]++)/(?P<personal_key>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_confirmation_email')), array (  '_controller' => 'AppBundle\\Controller\\RegisterController::ConfirmationAccountAction',));
        }

        // app_disconnect_site
        if ($pathinfo === '/login/disconnect') {
            return array (  '_controller' => 'AppBundle:Login:Disconnect',  '_route' => 'app_disconnect_site',);
        }

        if (0 === strpos($pathinfo, '/tuto')) {
            // app_create_tutorial_site
            if ($pathinfo === '/tuto/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\TutorialController::CreateTutorialAction',  '_route' => 'app_create_tutorial_site',);
            }

            if (0 === strpos($pathinfo, '/tuto/view')) {
                // app_view_my_tutorial_site
                if (rtrim($pathinfo, '/') === '/tuto/view/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'app_view_my_tutorial_site');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TutorialController::allUserTutorialAction',  '_route' => 'app_view_my_tutorial_site',);
                }

                if (0 === strpos($pathinfo, '/tuto/view/categ')) {
                    // app_view_tutorial_by_categ_site
                    if (preg_match('#^/tuto/view/categ/(?P<categ_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_view_tutorial_by_categ_site')), array (  '_controller' => 'AppBundle\\Controller\\TutorialController::ViewTutorialByCategorieAction',));
                    }

                    // app_view_tutorial_by_categ_user_site
                    if (0 === strpos($pathinfo, '/tuto/view/categ/user') && preg_match('#^/tuto/view/categ/user/(?P<categ_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_view_tutorial_by_categ_user_site')), array (  '_controller' => 'AppBundle\\Controller\\TutorialController::ViewTutorialByCategorieUserAction',));
                    }

                }

                // app_view_tuto_site
                if (preg_match('#^/tuto/view/(?P<tuto_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_view_tuto_site')), array (  '_controller' => 'AppBundle\\Controller\\TutorialController::ViewTutorialAction',));
                }

            }

            // app_delete_tutorial_site
            if (0 === strpos($pathinfo, '/tuto/delete') && preg_match('#^/tuto/delete/(?P<tuto_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_delete_tutorial_site')), array (  '_controller' => 'AppBundle\\Controller\\TutorialController::deleteTutorialAction',));
            }

        }

        if (0 === strpos($pathinfo, '/like')) {
            // app_create_like_site
            if (0 === strpos($pathinfo, '/like/create') && preg_match('#^/like/create/(?P<tuto_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_create_like_site')), array (  '_controller' => 'AppBundle\\Controller\\LikeController::CreateLikeAction',));
            }

            // app_delete_like_site
            if (0 === strpos($pathinfo, '/like/delete') && preg_match('#^/like/delete/(?P<tuto_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_delete_like_site')), array (  '_controller' => 'AppBundle\\Controller\\LikeController::DeleteLikeAction',));
            }

            // app_show_like_site
            if (rtrim($pathinfo, '/') === '/like/view') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_show_like_site');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LikeController::ShowLikeAction',  '_route' => 'app_show_like_site',);
            }

        }

        if (0 === strpos($pathinfo, '/search/tutorial')) {
            // app_search_tutorial_site
            if (preg_match('#^/search/tutorial/(?P<title_tutorial>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_search_tutorial_site')), array (  '_controller' => 'AppBundle\\Controller\\SearchController::SearchTutorialAction',));
            }

            // app_search_tutorial_view_site
            if (0 === strpos($pathinfo, '/search/tutorial/view') && preg_match('#^/search/tutorial/view/(?P<title_tutorial>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_search_tutorial_view_site')), array (  '_controller' => 'AppBundle\\Controller\\SearchController::searchTutorialViewAction',));
            }

        }

        // pageNotFound
        if (preg_match('#^/(?P<path>.*)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pageNotFound')), array (  '_controller' => 'AppBundle\\Controller\\PageNotFoundController::pageNotFoundAction',  'path' => '',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
