<?php

/* TCHWebBundle:Blocks/Layout:page_top.html.twig */
class __TwigTemplate_9346c18972302df359d60a29f7be3fb0e5a6adadbae5495e8f2aefed585bf8e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d3b59f75466104093fe47d025e64c23282a38a9017e71bddafea4df3ff35d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3b59f75466104093fe47d025e64c23282a38a9017e71bddafea4df3ff35d28->enter($__internal_8d3b59f75466104093fe47d025e64c23282a38a9017e71bddafea4df3ff35d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Blocks/Layout:page_top.html.twig"));

        // line 1
        echo "<div class=\"page-top\">
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class=\"top-menu\">
        <ul class=\"nav navbar-nav pull-right\">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                ";
        // line 8
        echo "                   ";
        // line 9
        echo "                <div class=\"dropdown-toggle\">
                    <i class=\"icon-bell\"></i>
                    <span class=\"badge badge-default\"> 7 </span>
                </div>
            </li>
            <!-- END NOTIFICATION DROPDOWN -->

            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class=\"dropdown dropdown-user\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                   data-close-others=\"true\">
                    <img alt=\"\" class=\"img-circle\"
                         src=\"/bundles/tchweb/img/avatar3_small.jpg\"/>
                    <span class=\"username username-hide-on-mobile\"> HauTruong </span>
                    <i class=\"fa fa-angle-down\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-default\">
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-user\"></i> My Profile </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-key\"></i> Log Out </a>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
        </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
</div>";
        
        $__internal_8d3b59f75466104093fe47d025e64c23282a38a9017e71bddafea4df3ff35d28->leave($__internal_8d3b59f75466104093fe47d025e64c23282a38a9017e71bddafea4df3ff35d28_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Blocks/Layout:page_top.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  30 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-top\">
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class=\"top-menu\">
        <ul class=\"nav navbar-nav pull-right\">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                {#<a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"#}
                   {#data-close-others=\"true\">#}
                <div class=\"dropdown-toggle\">
                    <i class=\"icon-bell\"></i>
                    <span class=\"badge badge-default\"> 7 </span>
                </div>
            </li>
            <!-- END NOTIFICATION DROPDOWN -->

            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class=\"dropdown dropdown-user\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\"
                   data-close-others=\"true\">
                    <img alt=\"\" class=\"img-circle\"
                         src=\"/bundles/tchweb/img/avatar3_small.jpg\"/>
                    <span class=\"username username-hide-on-mobile\"> HauTruong </span>
                    <i class=\"fa fa-angle-down\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-default\">
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-user\"></i> My Profile </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-key\"></i> Log Out </a>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
        </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
</div>", "TCHWebBundle:Blocks/Layout:page_top.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Blocks/Layout/page_top.html.twig");
    }
}
