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

        if (0 === strpos($pathinfo, '/bundles/tchweb')) {
            if (0 === strpos($pathinfo, '/bundles/tchweb/js/main')) {
                // _assetic_1deff1f
                if ($pathinfo === '/bundles/tchweb/js/main.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1deff1f',);
                }

                if (0 === strpos($pathinfo, '/bundles/tchweb/js/main_')) {
                    // _assetic_1deff1f_0
                    if ($pathinfo === '/bundles/tchweb/js/main_jquery.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1deff1f_0',);
                    }

                    // _assetic_1deff1f_1
                    if ($pathinfo === '/bundles/tchweb/js/main_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1deff1f_1',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/tchweb/js/main_j')) {
                        // _assetic_1deff1f_2
                        if ($pathinfo === '/bundles/tchweb/js/main_js.cookie.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1deff1f_2',);
                        }

                        if (0 === strpos($pathinfo, '/bundles/tchweb/js/main_jquery.')) {
                            // _assetic_1deff1f_3
                            if ($pathinfo === '/bundles/tchweb/js/main_jquery.slimscroll.min_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_1deff1f_3',);
                            }

                            // _assetic_1deff1f_4
                            if ($pathinfo === '/bundles/tchweb/js/main_jquery.blockui.min_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_1deff1f_4',);
                            }

                        }

                    }

                    // _assetic_1deff1f_5
                    if ($pathinfo === '/bundles/tchweb/js/main_bootstrap-switch.min_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_1deff1f_5',);
                    }

                    // _assetic_1deff1f_6
                    if ($pathinfo === '/bundles/tchweb/js/main_app_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_1deff1f_6',);
                    }

                    // _assetic_1deff1f_7
                    if ($pathinfo === '/bundles/tchweb/js/main_jquery.validate.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_1deff1f_7',);
                    }

                    // _assetic_1deff1f_8
                    if ($pathinfo === '/bundles/tchweb/js/main_additional-methods.min_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_1deff1f_8',);
                    }

                    // _assetic_1deff1f_9
                    if ($pathinfo === '/bundles/tchweb/js/main_select2.full.min_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_1deff1f_9',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/tchweb/js/main_moment')) {
                        // _assetic_1deff1f_10
                        if ($pathinfo === '/bundles/tchweb/js/main_moment.min_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_1deff1f_10',);
                        }

                        // _assetic_1deff1f_11
                        if ($pathinfo === '/bundles/tchweb/js/main_moment-timezone-with-data.min_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_1deff1f_11',);
                        }

                    }

                    // _assetic_1deff1f_12
                    if ($pathinfo === '/bundles/tchweb/js/main_bootstrap-datepicker.min_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_1deff1f_12',);
                    }

                    // _assetic_1deff1f_13
                    if ($pathinfo === '/bundles/tchweb/js/main_layout.min_14.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_1deff1f_13',);
                    }

                    // _assetic_1deff1f_14
                    if ($pathinfo === '/bundles/tchweb/js/main_demo.min_15.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_1deff1f_14',);
                    }

                    // _assetic_1deff1f_15
                    if ($pathinfo === '/bundles/tchweb/js/main_quick-sidebar.min_16.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_1deff1f_15',);
                    }

                    // _assetic_1deff1f_16
                    if ($pathinfo === '/bundles/tchweb/js/main_autobahn.min_17.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_1deff1f_16',);
                    }

                    // _assetic_1deff1f_17
                    if ($pathinfo === '/bundles/tchweb/js/main_gos_web_socket_client_18.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_1deff1f_17',);
                    }

                    // _assetic_1deff1f_18
                    if ($pathinfo === '/bundles/tchweb/js/main_custom_call_reminer_20.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1deff1f',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_1deff1f_18',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/tchweb/js/main_ie9')) {
                        // _assetic_961540b
                        if ($pathinfo === '/bundles/tchweb/js/main_ie9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '961540b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_961540b',);
                        }

                        if (0 === strpos($pathinfo, '/bundles/tchweb/js/main_ie9_')) {
                            // _assetic_961540b_0
                            if ($pathinfo === '/bundles/tchweb/js/main_ie9_respond.min_1.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '961540b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_961540b_0',);
                            }

                            // _assetic_961540b_1
                            if ($pathinfo === '/bundles/tchweb/js/main_ie9_excanvas.min_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '961540b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_961540b_1',);
                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/bundles/tchweb/css/main_compile')) {
                // _assetic_a863daa
                if ($pathinfo === '/bundles/tchweb/css/main_compile.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a863daa',);
                }

                if (0 === strpos($pathinfo, '/bundles/tchweb/css/main_compile_')) {
                    // _assetic_a863daa_0
                    if ($pathinfo === '/bundles/tchweb/css/main_compile_font-awesome.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a863daa_0',);
                    }

                    // _assetic_a863daa_1
                    if ($pathinfo === '/bundles/tchweb/css/main_compile_simple-line-icons.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_a863daa_1',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/tchweb/css/main_compile_b')) {
                        if (0 === strpos($pathinfo, '/bundles/tchweb/css/main_compile_bootstrap')) {
                            // _assetic_a863daa_2
                            if ($pathinfo === '/bundles/tchweb/css/main_compile_bootstrap.min_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_a863daa_2',);
                            }

                            if (0 === strpos($pathinfo, '/bundles/tchweb/css/main_compile_bootstrap-')) {
                                // _assetic_a863daa_3
                                if ($pathinfo === '/bundles/tchweb/css/main_compile_bootstrap-switch.min_4.css') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_a863daa_3',);
                                }

                                // _assetic_a863daa_4
                                if ($pathinfo === '/bundles/tchweb/css/main_compile_bootstrap-datepicker3.min_5.css') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_a863daa_4',);
                                }

                            }

                        }

                        // _assetic_a863daa_5
                        if ($pathinfo === '/bundles/tchweb/css/main_compile_build_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_a863daa_5',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/bundles/tchweb/css/main_compile_select2')) {
                        // _assetic_a863daa_6
                        if ($pathinfo === '/bundles/tchweb/css/main_compile_select2.min_7.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_a863daa_6',);
                        }

                        // _assetic_a863daa_7
                        if ($pathinfo === '/bundles/tchweb/css/main_compile_select2-bootstrap.min_8.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_a863daa_7',);
                        }

                    }

                    // _assetic_a863daa_8
                    if ($pathinfo === '/bundles/tchweb/css/main_compile_components-md.min_9.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_a863daa_8',);
                    }

                    // _assetic_a863daa_9
                    if ($pathinfo === '/bundles/tchweb/css/main_compile_plugins-md.min_10.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_a863daa_9',);
                    }

                    // _assetic_a863daa_10
                    if ($pathinfo === '/bundles/tchweb/css/main_compile_layout.min_11.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_a863daa_10',);
                    }

                    // _assetic_a863daa_11
                    if ($pathinfo === '/bundles/tchweb/css/main_compile_blue.min_12.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_a863daa_11',);
                    }

                    // _assetic_a863daa_12
                    if ($pathinfo === '/bundles/tchweb/css/main_compile_custom_13.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 12,  '_format' => 'css',  '_route' => '_assetic_a863daa_12',);
                    }

                    // _assetic_a863daa_13
                    if ($pathinfo === '/bundles/tchweb/css/main_compile_app_14.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a863daa',  'pos' => 13,  '_format' => 'css',  '_route' => '_assetic_a863daa_13',);
                    }

                }

            }

        }

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

        // tch_web_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tch_web_homepage');
            }

            return array (  '_controller' => 'TCH\\WebBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tch_web_homepage',);
        }

        // tch_web_todo
        if ($pathinfo === '/todo') {
            return array (  '_controller' => 'TCH\\WebBundle\\Controller\\DefaultController::todoAction',  '_route' => 'tch_web_todo',);
        }

        if (0 === strpos($pathinfo, '/api/v1')) {
            // api_json_ld_entrypoint
            if (rtrim($pathinfo, '/') === '/api/v1') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_json_ld_entrypoint;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_json_ld_entrypoint');
                }

                return array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\JsonLdController::entrypointAction',  '_route' => 'api_json_ld_entrypoint',);
            }
            not_api_json_ld_entrypoint:

            if (0 === strpos($pathinfo, '/api/v1/contexts')) {
                // api_json_ld_entrypoint_context
                if ($pathinfo === '/api/v1/contexts/Entrypoint') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_json_ld_entrypoint_context;
                    }

                    return array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\JsonLdController::entrypointContextAction',  '_route' => 'api_json_ld_entrypoint_context',);
                }
                not_api_json_ld_entrypoint_context:

                // api_json_ld_context
                if (preg_match('#^/api/v1/contexts/(?P<shortName>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_json_ld_context;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_json_ld_context')), array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\JsonLdController::contextAction',));
                }
                not_api_json_ld_context:

            }

            // api_hydra_vocab
            if ($pathinfo === '/api/v1/apidoc') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_hydra_vocab;
                }

                return array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\HydraController::docAction',  '_route' => 'api_hydra_vocab',);
            }
            not_api_hydra_vocab:

            if (0 === strpos($pathinfo, '/api/v1/categor')) {
                if (0 === strpos($pathinfo, '/api/v1/categories')) {
                    // api_categories_cget
                    if ($pathinfo === '/api/v1/categories') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_api_categories_cget;
                        }

                        return array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\ResourceController::cgetAction',  '_resource' => 'Category',  '_route' => 'api_categories_cget',);
                    }
                    not_api_categories_cget:

                    // api_categories_cpost
                    if ($pathinfo === '/api/v1/categories') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_api_categories_cpost;
                        }

                        return array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\ResourceController::cpostAction',  '_resource' => 'Category',  '_route' => 'api_categories_cpost',);
                    }
                    not_api_categories_cpost:

                    // api_categories_get
                    if (preg_match('#^/api/v1/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_api_categories_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_categories_get')), array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\ResourceController::getAction',  '_resource' => 'Category',));
                    }
                    not_api_categories_get:

                    // api_categories_put
                    if (preg_match('#^/api/v1/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_api_categories_put;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_categories_put')), array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\ResourceController::putAction',  '_resource' => 'Category',));
                    }
                    not_api_categories_put:

                    // api_categories_delete
                    if (preg_match('#^/api/v1/categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_api_categories_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_categories_delete')), array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\ResourceController::deleteAction',  '_resource' => 'Category',));
                    }
                    not_api_categories_delete:

                }

                if (0 === strpos($pathinfo, '/api/v1/category_items')) {
                    // api_category_items_cget
                    if ($pathinfo === '/api/v1/category_items') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_api_category_items_cget;
                        }

                        return array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\ResourceController::cgetAction',  '_resource' => 'CategoryItem',  '_route' => 'api_category_items_cget',);
                    }
                    not_api_category_items_cget:

                    // api_category_items_cpost
                    if ($pathinfo === '/api/v1/category_items') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_api_category_items_cpost;
                        }

                        return array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\ResourceController::cpostAction',  '_resource' => 'CategoryItem',  '_route' => 'api_category_items_cpost',);
                    }
                    not_api_category_items_cpost:

                    // api_category_items_get
                    if (preg_match('#^/api/v1/category_items/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_api_category_items_get;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_category_items_get')), array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\ResourceController::getAction',  '_resource' => 'CategoryItem',));
                    }
                    not_api_category_items_get:

                    // api_category_items_put
                    if (preg_match('#^/api/v1/category_items/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_api_category_items_put;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_category_items_put')), array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\ResourceController::putAction',  '_resource' => 'CategoryItem',));
                    }
                    not_api_category_items_put:

                    // api_category_items_delete
                    if (preg_match('#^/api/v1/category_items/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_api_category_items_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_category_items_delete')), array (  '_controller' => 'Dunglas\\ApiBundle\\Controller\\ResourceController::deleteAction',  '_resource' => 'CategoryItem',));
                    }
                    not_api_category_items_delete:

                }

            }

        }

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/doc') && preg_match('#^/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
