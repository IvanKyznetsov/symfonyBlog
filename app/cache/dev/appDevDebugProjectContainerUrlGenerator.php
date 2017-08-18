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
        '_assetic_d8f44a4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd8f44a4',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/d8f44a4.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d8f44a4_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd8f44a4',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/d8f44a4_part_1_blog_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d8f44a4_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd8f44a4',    'pos' => 1,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/d8f44a4_part_1_sidebar_2.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_51c56cc' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '51c56cc',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/51c56cc.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_51c56cc_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '51c56cc',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/51c56cc_part_1_screen_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
        'BloggerBlogBundle_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::indexAction',  ),  2 =>   array (    'methods' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'BloggerBlogBundle_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::aboutAction',  ),  2 =>   array (    'methods' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'BloggerBlogBundle_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::contactAction',  ),  2 =>   array (    'methods' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'BloggerBlogBundle_blog_show' => array (  0 =>   array (    0 => 'id',    1 => 'slug',  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::showAction',  ),  2 =>   array (    'methods' => 'GET',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'BloggerBlogBundle_comment_create' => array (  0 =>   array (    0 => 'blog_id',  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\CommentController::createAction',  ),  2 =>   array (    'methods' => 'POST',    'blog_id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'blog_id',    ),    1 =>     array (      0 => 'text',      1 => '/comment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'BloggerBlogBundle_comment_delete' => array (  0 =>   array (    0 => 'commentId',  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\CommentController::deleteAction',  ),  2 =>   array (    'methods' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    1 =>     array (      0 => 'text',      1 => '/comment/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'BloggerBlogBundle_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (    'methods' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'BloggerBlogBundle_admin_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::addAction',  ),  2 =>   array (    'methods' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addBlog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'BloggerBlogBundle_admin_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::createAction',  ),  2 =>   array (    'methods' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/createBlog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'BloggerBlogBundle_blog_delete' => array (  0 =>   array (    0 => 'blogId',  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::deleteAction',  ),  2 =>   array (    'methods' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'blogId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/blogDelete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'BloggerBlogBundle_blog_change' => array (  0 =>   array (    0 => 'blogId',  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::changeAction',  ),  2 =>   array (    'methods' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'blogId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/change',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'BloggerBlogBundle_blog_update' => array (  0 =>   array (    0 => 'blogId',  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::updateAction',  ),  2 =>   array (    'methods' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'blogId',    ),    1 =>     array (      0 => 'text',      1 => '/admin/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'sonata_admin_dashboard',    'permanent' => 'true',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/core/get-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_append_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/core/append-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_short_object_information' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',    '_format' => 'html',  ),  2 =>   array (    '_format' => 'html|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/admins/core/get-short-object-description',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_set_object_field_value' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/core/set-object-field-value',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_autocomplete_items' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/core/get-autocomplete-items',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_blog_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',    '_sonata_admin' => 'admin.blog',    '_sonata_name' => 'admin_blogger_blog_blog_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/blog/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_blog_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',    '_sonata_admin' => 'admin.blog',    '_sonata_name' => 'admin_blogger_blog_blog_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/blog/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_blog_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',    '_sonata_admin' => 'admin.blog',    '_sonata_name' => 'admin_blogger_blog_blog_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/blog/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_blog_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',    '_sonata_admin' => 'admin.blog',    '_sonata_name' => 'admin_blogger_blog_blog_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_blog_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',    '_sonata_admin' => 'admin.blog',    '_sonata_name' => 'admin_blogger_blog_blog_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_blog_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',    '_sonata_admin' => 'admin.blog',    '_sonata_name' => 'admin_blogger_blog_blog_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_blog_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',    '_sonata_admin' => 'admin.blog',    '_sonata_name' => 'admin_blogger_blog_blog_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/blog/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_comment_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',    '_sonata_admin' => 'admin.comment',    '_sonata_name' => 'admin_blogger_blog_comment_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/comment/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_comment_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',    '_sonata_admin' => 'admin.comment',    '_sonata_name' => 'admin_blogger_blog_comment_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/comment/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_comment_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',    '_sonata_admin' => 'admin.comment',    '_sonata_name' => 'admin_blogger_blog_comment_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/comment/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_comment_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',    '_sonata_admin' => 'admin.comment',    '_sonata_name' => 'admin_blogger_blog_comment_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/comment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_comment_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',    '_sonata_admin' => 'admin.comment',    '_sonata_name' => 'admin_blogger_blog_comment_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/comment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_comment_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',    '_sonata_admin' => 'admin.comment',    '_sonata_name' => 'admin_blogger_blog_comment_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/comment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_comment_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',    '_sonata_admin' => 'admin.comment',    '_sonata_name' => 'admin_blogger_blog_comment_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/comment/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_user_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',    '_sonata_admin' => 'admin.user',    '_sonata_name' => 'admin_blogger_blog_user_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/user/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',    '_sonata_admin' => 'admin.user',    '_sonata_name' => 'admin_blogger_blog_user_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_user_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',    '_sonata_admin' => 'admin.user',    '_sonata_name' => 'admin_blogger_blog_user_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/user/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',    '_sonata_admin' => 'admin.user',    '_sonata_name' => 'admin_blogger_blog_user_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',    '_sonata_admin' => 'admin.user',    '_sonata_name' => 'admin_blogger_blog_user_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',    '_sonata_admin' => 'admin.user',    '_sonata_name' => 'admin_blogger_blog_user_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_blogger_blog_user_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',    '_sonata_admin' => 'admin.user',    '_sonata_name' => 'admin_blogger_blog_user_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admins/blogger/blog/user/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_users_get_user' => array (  0 =>   array (    0 => 'param',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\UsersController::getUserAction',    '_format' => NULL,  ),  2 =>   array (    '_format' => 'json|html',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'param',    ),    2 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_blogs_show' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::showAction',    '_format' => NULL,  ),  2 =>   array (    '_format' => 'json|html',    '_method' => 'PATCH',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/show',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/api',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_blogs_get_blogs' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::getBlogsAction',    '_format' => NULL,  ),  2 =>   array (    '_format' => 'json|html',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/blogs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_blogs_get_blog' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::getBlogAction',    '_format' => NULL,  ),  2 =>   array (    '_format' => 'json|html',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/blogs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
