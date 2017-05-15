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

        if (0 === strpos($pathinfo, '/panier')) {
            // new_panier
            if (0 === strpos($pathinfo, '/panier/new') && preg_match('#^/panier/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_new_panier;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_panier')), array (  '_controller' => 'MainBundle\\Controller\\PanierController::newAction',));
            }
            not_new_panier:

            // my_cart
            if (rtrim($pathinfo, '/') === '/panier') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_my_cart;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_cart');
                }

                return array (  '_controller' => 'MainBundle\\Controller\\PanierController::indexAction',  '_route' => 'my_cart',);
            }
            not_my_cart:

            // my_cart_del
            if (0 === strpos($pathinfo, '/panier/delete') && preg_match('#^/panier/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_my_cart_del;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_cart_del')), array (  '_controller' => 'MainBundle\\Controller\\PanierController::deleteAction',));
            }
            not_my_cart_del:

            // checkout
            if ($pathinfo === '/panier/checkout') {
                return array (  '_controller' => 'MainBundle\\Controller\\PanierController::checkoutAction',  '_route' => 'checkout',);
            }

            // order
            if (0 === strpos($pathinfo, '/panier/order') && preg_match('#^/panier/order/(?P<idcommande>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_order;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order')), array (  '_controller' => 'MainBundle\\Controller\\PanierController::orderAction',));
            }
            not_order:

            // thanks
            if ($pathinfo === '/panier/thankyou') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_thanks;
                }

                return array (  '_controller' => 'MainBundle\\Controller\\PanierController::thanksAction',  '_route' => 'thanks',);
            }
            not_thanks:

        }

        if (0 === strpos($pathinfo, '/venteflash')) {
            // venteflash_index
            if (rtrim($pathinfo, '/') === '/venteflash') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_venteflash_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'venteflash_index');
                }

                return array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::indexAction',  '_route' => 'venteflash_index',);
            }
            not_venteflash_index:

            // venteflash_show
            if (preg_match('#^/venteflash/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venteflash_show')), array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::showAction',));
            }

            // venteflash_new
            if ($pathinfo === '/venteflash/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_venteflash_new;
                }

                return array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::newAction',  '_route' => 'venteflash_new',);
            }
            not_venteflash_new:

            // venteflash_edit
            if (preg_match('#^/venteflash/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_venteflash_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venteflash_edit')), array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::editAction',));
            }
            not_venteflash_edit:

            // venteflash_delete
            if (preg_match('#^/venteflash/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_venteflash_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venteflash_delete')), array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::deleteAction',));
            }
            not_venteflash_delete:

            // venteflash_list
            if ($pathinfo === '/venteflash/list') {
                return array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::listAction',  '_route' => 'venteflash_list',);
            }

            // venteflash_supprimerproduit
            if (0 === strpos($pathinfo, '/venteflash/ajaxresult1') && preg_match('#^/venteflash/ajaxresult1/(?P<id>[^/]++)/(?P<prod>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venteflash_supprimerproduit')), array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::deletefromvente1Action',));
            }

            // venteflash_position
            if ($pathinfo === '/venteflash/position') {
                return array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::positionAction',  '_route' => 'venteflash_position',);
            }

            // venteflash_index1
            if (preg_match('#^/venteflash/(?P<id>[^/]++)/(?P<operation>[^/]++)/ajax$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venteflash_index1')), array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::ajaxindexAction',));
            }

            // venteflash_ajouterproduit
            if (0 === strpos($pathinfo, '/venteflash/ajaxresult') && preg_match('#^/venteflash/ajaxresult/(?P<id>[^/]++)/(?P<prod>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venteflash_ajouterproduit')), array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::addtovente1Action',));
            }

            // venteflash_Listing
            if (preg_match('#^/venteflash/(?P<id>[^/]++)/(?P<operation>[^/]++)/ajaxoperation$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_venteflash_Listing;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venteflash_Listing')), array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::ajaxlistAction',));
            }
            not_venteflash_Listing:

            // venteflash_setflash
            if (preg_match('#^/venteflash/(?P<id>[^/]++)/setflash$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venteflash_setflash')), array (  '_controller' => 'MainBundle\\Controller\\VenteFlashController::setflashAction',));
            }

        }

        if (0 === strpos($pathinfo, '/product')) {
            // product_index
            if (rtrim($pathinfo, '/') === '/product') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_product_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'product_index');
                }

                return array (  '_controller' => 'MainBundle\\Controller\\ProductController::indexAction',  '_route' => 'product_index',);
            }
            not_product_index:

            // product_valable
            if (preg_match('#^/product/(?P<id>[^/]++)/valable$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_product_valable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_valable')), array (  '_controller' => 'MainBundle\\Controller\\ProductController::valableAction',));
            }
            not_product_valable:

            // product_indexme
            if ($pathinfo === '/product/myproducts') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_product_indexme;
                }

                return array (  '_controller' => 'MainBundle\\Controller\\ProductController::indexmeAction',  '_route' => 'product_indexme',);
            }
            not_product_indexme:

            // product_show
            if (preg_match('#^/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_product_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'MainBundle\\Controller\\ProductController::showAction',));
            }
            not_product_show:

            // product_new
            if ($pathinfo === '/product/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_product_new;
                }

                return array (  '_controller' => 'MainBundle\\Controller\\ProductController::newAction',  '_route' => 'product_new',);
            }
            not_product_new:

            // product_edit
            if (preg_match('#^/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_product_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'MainBundle\\Controller\\ProductController::editAction',));
            }
            not_product_edit:

            // product_delete
            if (preg_match('#^/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_product_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'MainBundle\\Controller\\ProductController::deleteAction',));
            }
            not_product_delete:

            // product_change
            if ($pathinfo === '/product/data') {
                return array (  '_controller' => 'MainBundle\\Controller\\ProductController::projetajaxAction',  '_route' => 'product_change',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/client')) {
                // user_index
                if ($pathinfo === '/user/clientindex') {
                    return array (  '_controller' => 'MainBundle\\Controller\\UserController::clientsindexAction',  '_route' => 'user_index',);
                }

                // user_list
                if ($pathinfo === '/user/clientAjax') {
                    return array (  '_controller' => 'MainBundle\\Controller\\UserController::clientsAction',  '_route' => 'user_list',);
                }

            }

            // user_wishlist
            if ($pathinfo === '/user/wishlist') {
                return array (  '_controller' => 'MainBundle\\Controller\\UserController::mywishAction',  '_route' => 'user_wishlist',);
            }

            // newwish
            if (0 === strpos($pathinfo, '/user/new') && preg_match('#^/user/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newwish')), array (  '_controller' => 'MainBundle\\Controller\\UserController::newwishAction',));
            }

        }

        if (0 === strpos($pathinfo, '/coupon')) {
            // coupon_index
            if (rtrim($pathinfo, '/') === '/coupon') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_coupon_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'coupon_index');
                }

                return array (  '_controller' => 'MainBundle\\Controller\\CouponController::indexAction',  '_route' => 'coupon_index',);
            }
            not_coupon_index:

            // coupon_show
            if (preg_match('#^/coupon/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_coupon_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupon_show')), array (  '_controller' => 'MainBundle\\Controller\\CouponController::showAction',));
            }
            not_coupon_show:

            // coupon_new
            if ($pathinfo === '/coupon/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_coupon_new;
                }

                return array (  '_controller' => 'MainBundle\\Controller\\CouponController::newAction',  '_route' => 'coupon_new',);
            }
            not_coupon_new:

            // coupon_edit
            if (preg_match('#^/coupon/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_coupon_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupon_edit')), array (  '_controller' => 'MainBundle\\Controller\\CouponController::editAction',));
            }
            not_coupon_edit:

            // coupon_delete
            if (preg_match('#^/coupon/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_coupon_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupon_delete')), array (  '_controller' => 'MainBundle\\Controller\\CouponController::deleteAction',));
            }
            not_coupon_delete:

            // coupon_print
            if (0 === strpos($pathinfo, '/coupon/print') && preg_match('#^/coupon/print/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_coupon_print;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupon_print')), array (  '_controller' => 'MainBundle\\Controller\\CouponController::printAction',));
            }
            not_coupon_print:

            // coupon_list
            if ($pathinfo === '/coupon/list') {
                return array (  '_controller' => 'MainBundle\\Controller\\CouponController::listescouponAction',  '_route' => 'coupon_list',);
            }

        }

        // endroid_qrcode
        if (0 === strpos($pathinfo, '/qrcode') && preg_match('#^/qrcode/(?P<text>[\\w\\W]+)\\.(?P<extension>jpg|png|gif)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'endroid_qrcode')), array (  '_controller' => 'Endroid\\QrCode\\Bundle\\Controller\\QrCodeController::generateAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // categorie_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categorie_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categorie_index');
                }

                return array (  '_controller' => 'MainBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie_index',);
            }
            not_categorie_index:

            // categorie_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categorie_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'MainBundle\\Controller\\CategorieController::showAction',));
            }
            not_categorie_show:

            // categorie_new
            if ($pathinfo === '/admin/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_categorie_new;
                }

                return array (  '_controller' => 'MainBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
            }
            not_categorie_new:

            // categorie_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_categorie_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'MainBundle\\Controller\\CategorieController::editAction',));
            }
            not_categorie_edit:

            // categorie_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_categorie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'MainBundle\\Controller\\CategorieController::deleteAction',));
            }
            not_categorie_delete:

        }

        // main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'main_homepage');
            }

            return array (  '_controller' => 'MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'main_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_index
            if ($pathinfo === '/admin/index') {
                return array (  '_controller' => 'MainBundle\\Controller\\CouponController::testAction',  '_route' => 'admin_index',);
            }

            // admin_users
            if ($pathinfo === '/admin/members') {
                return array (  '_controller' => 'MainBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_users',);
            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                // aff_autoriser_coupon
                if ($pathinfo === '/admin/affautoriser') {
                    return array (  '_controller' => 'MainBundle\\Controller\\CouponController::affautoriserAction',  '_route' => 'aff_autoriser_coupon',);
                }

                if (0 === strpos($pathinfo, '/admin/autProduit')) {
                    // admin_autoriser_produit
                    if ($pathinfo === '/admin/autProduit') {
                        return array (  '_controller' => 'MainBundle\\Controller\\ProductController::indexAdminAction',  '_route' => 'admin_autoriser_produit',);
                    }

                    // admin_autoriser_produitAjax
                    if ($pathinfo === '/admin/autProduitAjax') {
                        return array (  '_controller' => 'MainBundle\\Controller\\ProductController::ajaxListAction',  '_route' => 'admin_autoriser_produitAjax',);
                    }

                }

                // admin_ajaxListProd
                if ($pathinfo === '/admin/ajaxproduit') {
                    return array (  '_controller' => 'MainBundle\\Controller\\ProductController::ActiverAction',  '_route' => 'admin_ajaxListProd',);
                }

            }

            // coupon_accepter
            if (0 === strpos($pathinfo, '/admin/traite') && preg_match('#^/admin/traite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupon_accepter')), array (  '_controller' => 'MainBundle\\Controller\\CouponController::AccepterAction',));
            }

            // coupon_refuser
            if (0 === strpos($pathinfo, '/admin/refuser') && preg_match('#^/admin/refuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupon_refuser')), array (  '_controller' => 'MainBundle\\Controller\\CouponController::refuserAction',));
            }

            // admin_activer_users
            if (0 === strpos($pathinfo, '/admin/activer') && preg_match('#^/admin/activer(?:/(?P<etat>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_activer_users')), array (  '_controller' => 'MainBundle\\Controller\\UserController::ActiverAction',  'etat' => '1',));
            }

            // admin_ajaxList
            if ($pathinfo === '/admin/users') {
                return array (  '_controller' => 'MainBundle\\Controller\\UserController::ajaxListAction',  '_route' => 'admin_ajaxList',);
            }

        }

        // Page_User
        if ($pathinfo === '/user') {
            return array (  '_controller' => 'MainBundle\\Controller\\DefaultController::AdminAction',  '_route' => 'Page_User',);
        }

        // Page_Clients
        if ($pathinfo === '/clients') {
            return array (  '_controller' => 'MainBundle\\Controller\\DefaultController::AdminAction',  '_route' => 'Page_Clients',);
        }

        if (0 === strpos($pathinfo, '/magasin')) {
            if (0 === strpos($pathinfo, '/magasin/list')) {
                // Magasin_List
                if ($pathinfo === '/magasin/list') {
                    return array (  '_controller' => 'MainBundle\\Controller\\MagasinController::listAction',  '_route' => 'Magasin_List',);
                }

                // Magasin_List_Perso
                if ($pathinfo === '/magasin/listPerso') {
                    return array (  '_controller' => 'MainBundle\\Controller\\MagasinController::listPersoAction',  '_route' => 'Magasin_List_Perso',);
                }

            }

            // Magasin_Add
            if ($pathinfo === '/magasin/add') {
                return array (  '_controller' => 'MainBundle\\Controller\\MagasinController::addAction',  '_route' => 'Magasin_Add',);
            }

            // Magasin_Details
            if (0 === strpos($pathinfo, '/magasin/magasinDetail') && preg_match('#^/magasin/magasinDetail/(?P<idMagasin>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Magasin_Details')), array (  '_controller' => 'MainBundle\\Controller\\MagasinController::magasinDetailAction',));
            }

            // Magasin_Edit
            if (0 === strpos($pathinfo, '/magasin/edit') && preg_match('#^/magasin/edit/(?P<idMagasin>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Magasin_Edit')), array (  '_controller' => 'MainBundle\\Controller\\MagasinController::editAction',));
            }

            // Magasin_Delete
            if (0 === strpos($pathinfo, '/magasin/delete') && preg_match('#^/magasin/delete/(?P<idMagasin>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Magasin_Delete')), array (  '_controller' => 'MainBundle\\Controller\\MagasinController::deleteAction',));
            }

            // Magasin_produits
            if ($pathinfo === '/magasin/products') {
                return array (  '_controller' => 'MainBundle\\Controller\\MagasinController::productsAction',  '_route' => 'Magasin_produits',);
            }

            if (0 === strpos($pathinfo, '/magasin/addproduct')) {
                // Magasin_produitsinception
                if ($pathinfo === '/magasin/addproduct') {
                    return array (  '_controller' => 'MainBundle\\Controller\\MagasinController::productsinceptionAction',  '_route' => 'Magasin_produitsinception',);
                }

                // Magasin_produitsinceptionadd
                if ($pathinfo === '/magasin/addproducts') {
                    return array (  '_controller' => 'MainBundle\\Controller\\MagasinController::addproductsAction',  '_route' => 'Magasin_produitsinceptionadd',);
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
