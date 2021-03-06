<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // BloggerBlogBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'BloggerBlogBundle_homepage');
            }

            return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::indexAction',  '_route' => 'BloggerBlogBundle_homepage',);
        }

        // BloggerBlogBundle_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::aboutAction',  '_route' => 'BloggerBlogBundle_about',);
        }

        // BloggerBlogBundle_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::contactAction',  '_route' => 'BloggerBlogBundle_contact',);
        }

        // BloggerBlogBundle_blog_show
        if (preg_match('#^/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BloggerBlogBundle_blog_show')), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::showAction',));
        }

        if (0 === strpos($pathinfo, '/comment')) {
            // BloggerBlogBundle_comment_create
            if (preg_match('#^/comment/(?P<blog_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BloggerBlogBundle_comment_create')), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\CommentController::createAction',));
            }

            // BloggerBlogBundle_comment_delete
            if (0 === strpos($pathinfo, '/comment/delete') && preg_match('#^/comment/delete/(?P<commentId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BloggerBlogBundle_comment_delete')), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\CommentController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // BloggerBlogBundle_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::indexAction',  '_route' => 'BloggerBlogBundle_admin',);
            }

            // BloggerBlogBundle_admin_add
            if ($pathinfo === '/admin/addBlog') {
                return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::addAction',  '_route' => 'BloggerBlogBundle_admin_add',);
            }

            // BloggerBlogBundle_admin_create
            if ($pathinfo === '/admin/createBlog') {
                return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::createAction',  '_route' => 'BloggerBlogBundle_admin_create',);
            }

            // BloggerBlogBundle_blog_delete
            if (0 === strpos($pathinfo, '/admin/blogDelete') && preg_match('#^/admin/blogDelete/(?P<blogId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BloggerBlogBundle_blog_delete')), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::deleteAction',));
            }

            // BloggerBlogBundle_blog_change
            if (0 === strpos($pathinfo, '/admin/change') && preg_match('#^/admin/change/(?P<blogId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BloggerBlogBundle_blog_change')), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::changeAction',));
            }

            // BloggerBlogBundle_blog_update
            if (0 === strpos($pathinfo, '/admin/update') && preg_match('#^/admin/update/(?P<blogId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BloggerBlogBundle_blog_update')), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\AdminController::updateAction',));
            }

            if (0 === strpos($pathinfo, '/admins')) {
                // sonata_admin_redirect
                if (rtrim($pathinfo, '/') === '/admins') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                }

                // sonata_admin_dashboard
                if ($pathinfo === '/admins/dashboard') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admins/core')) {
                    // sonata_admin_retrieve_form_element
                    if ($pathinfo === '/admins/core/get-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_append_form_element
                    if ($pathinfo === '/admins/core/append-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admins/core/get-short-object-description') && preg_match('#^/admins/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_set_object_field_value
                    if ($pathinfo === '/admins/core/set-object-field-value') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                // sonata_admin_search
                if ($pathinfo === '/admins/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                // sonata_admin_retrieve_autocomplete_items
                if ($pathinfo === '/admins/core/get-autocomplete-items') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admins/blogger/blog')) {
            if (0 === strpos($pathinfo, '/admins/blogger/blog/blog')) {
                // admin_blogger_blog_blog_list
                if ($pathinfo === '/admins/blogger/blog/blog/list') {
                    return array (  '_controller' => 'Blogger\\BlogBundle\\Admin\\BlogAdmin:listAction',  '_sonata_admin' => 'admin.blog',  '_sonata_name' => 'admin_blogger_blog_blog_list',  '_route' => 'admin_blogger_blog_blog_list',);
                }

                // admin_blogger_blog_blog_create
                if ($pathinfo === '/admins/blogger/blog/blog/create') {
                    return array (  '_controller' => 'Blogger\\BlogBundle\\Admin\\BlogAdmin:createAction',  '_sonata_admin' => 'admin.blog',  '_sonata_name' => 'admin_blogger_blog_blog_create',  '_route' => 'admin_blogger_blog_blog_create',);
                }

                // admin_blogger_blog_blog_batch
                if ($pathinfo === '/admins/blogger/blog/blog/batch') {
                    return array (  '_controller' => 'Blogger\\BlogBundle\\Admin\\BlogAdmin:batchAction',  '_sonata_admin' => 'admin.blog',  '_sonata_name' => 'admin_blogger_blog_blog_batch',  '_route' => 'admin_blogger_blog_blog_batch',);
                }

                // admin_blogger_blog_blog_edit
                if (preg_match('#^/admins/blogger/blog/blog/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blogger_blog_blog_edit')), array (  '_controller' => 'Blogger\\BlogBundle\\Admin\\BlogAdmin:editAction',  '_sonata_admin' => 'admin.blog',  '_sonata_name' => 'admin_blogger_blog_blog_edit',));
                }

                // admin_blogger_blog_blog_delete
                if (preg_match('#^/admins/blogger/blog/blog/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blogger_blog_blog_delete')), array (  '_controller' => 'Blogger\\BlogBundle\\Admin\\BlogAdmin:deleteAction',  '_sonata_admin' => 'admin.blog',  '_sonata_name' => 'admin_blogger_blog_blog_delete',));
                }

                // admin_blogger_blog_blog_show
                if (preg_match('#^/admins/blogger/blog/blog/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blogger_blog_blog_show')), array (  '_controller' => 'Blogger\\BlogBundle\\Admin\\BlogAdmin:showAction',  '_sonata_admin' => 'admin.blog',  '_sonata_name' => 'admin_blogger_blog_blog_show',));
                }

                // admin_blogger_blog_blog_export
                if ($pathinfo === '/admins/blogger/blog/blog/export') {
                    return array (  '_controller' => 'Blogger\\BlogBundle\\Admin\\BlogAdmin:exportAction',  '_sonata_admin' => 'admin.blog',  '_sonata_name' => 'admin_blogger_blog_blog_export',  '_route' => 'admin_blogger_blog_blog_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admins/blogger/blog/comment')) {
                // admin_blogger_blog_comment_list
                if ($pathinfo === '/admins/blogger/blog/comment/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.comment',  '_sonata_name' => 'admin_blogger_blog_comment_list',  '_route' => 'admin_blogger_blog_comment_list',);
                }

                // admin_blogger_blog_comment_create
                if ($pathinfo === '/admins/blogger/blog/comment/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.comment',  '_sonata_name' => 'admin_blogger_blog_comment_create',  '_route' => 'admin_blogger_blog_comment_create',);
                }

                // admin_blogger_blog_comment_batch
                if ($pathinfo === '/admins/blogger/blog/comment/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.comment',  '_sonata_name' => 'admin_blogger_blog_comment_batch',  '_route' => 'admin_blogger_blog_comment_batch',);
                }

                // admin_blogger_blog_comment_edit
                if (preg_match('#^/admins/blogger/blog/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blogger_blog_comment_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.comment',  '_sonata_name' => 'admin_blogger_blog_comment_edit',));
                }

                // admin_blogger_blog_comment_delete
                if (preg_match('#^/admins/blogger/blog/comment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blogger_blog_comment_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.comment',  '_sonata_name' => 'admin_blogger_blog_comment_delete',));
                }

                // admin_blogger_blog_comment_show
                if (preg_match('#^/admins/blogger/blog/comment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blogger_blog_comment_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.comment',  '_sonata_name' => 'admin_blogger_blog_comment_show',));
                }

                // admin_blogger_blog_comment_export
                if ($pathinfo === '/admins/blogger/blog/comment/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.comment',  '_sonata_name' => 'admin_blogger_blog_comment_export',  '_route' => 'admin_blogger_blog_comment_export',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
