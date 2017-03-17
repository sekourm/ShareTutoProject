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
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_home_site' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\HomeController::IndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::LoginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_register_site' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RegisterController::IndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_confirmation_email' => array (  0 =>   array (    0 => 'user_id',    1 => 'personal_key',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RegisterController::ConfirmationAccountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'personal_key',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'user_id',    ),    2 =>     array (      0 => 'text',      1 => '/confirmation/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_disconnect_site' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle:Login:Disconnect',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/disconnect',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_create_tutorial_site' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TutorialController::CreateTutorialAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tuto/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_view_my_tutorial_site' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TutorialController::allUserTutorialAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tuto/view/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_view_tutorial_by_categ_site' => array (  0 =>   array (    0 => 'categ_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TutorialController::ViewTutorialByCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'categ_id',    ),    1 =>     array (      0 => 'text',      1 => '/tuto/view/categ',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_view_tutorial_by_categ_user_site' => array (  0 =>   array (    0 => 'categ_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TutorialController::ViewTutorialByCategorieUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'categ_id',    ),    1 =>     array (      0 => 'text',      1 => '/tuto/view/categ/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_view_tuto_site' => array (  0 =>   array (    0 => 'tuto_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TutorialController::ViewTutorialAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tuto_id',    ),    1 =>     array (      0 => 'text',      1 => '/tuto/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_delete_tutorial_site' => array (  0 =>   array (    0 => 'tuto_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TutorialController::deleteTutorialAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tuto_id',    ),    1 =>     array (      0 => 'text',      1 => '/tuto/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_create_like_site' => array (  0 =>   array (    0 => 'tuto_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LikeController::CreateLikeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tuto_id',    ),    1 =>     array (      0 => 'text',      1 => '/like/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_delete_like_site' => array (  0 =>   array (    0 => 'tuto_id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LikeController::DeleteLikeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tuto_id',    ),    1 =>     array (      0 => 'text',      1 => '/like/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_show_like_site' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LikeController::ShowLikeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/like/view/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_search_tutorial_site' => array (  0 =>   array (    0 => 'title_tutorial',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SearchController::SearchTutorialAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'title_tutorial',    ),    1 =>     array (      0 => 'text',      1 => '/search/tutorial',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_search_tutorial_view_site' => array (  0 =>   array (    0 => 'title_tutorial',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SearchController::searchTutorialViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'title_tutorial',    ),    1 =>     array (      0 => 'text',      1 => '/search/tutorial/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pageNotFound' => array (  0 =>   array (    0 => 'path',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PageNotFoundController::pageNotFoundAction',    'path' => '',  ),  2 =>   array (    'path' => '.*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.*',      3 => 'path',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
