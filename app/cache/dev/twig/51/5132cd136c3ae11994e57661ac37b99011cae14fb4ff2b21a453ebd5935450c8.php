<?php

/* TCHWebBundle:Layout:main.html.twig */
class __TwigTemplate_7a36ad9ee4f2ab5d619b01c6c78c44d6750ab5e3d829a5fae140398a7f4c4ee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_title' => array($this, 'block_page_title'),
            'short_description' => array($this, 'block_short_description'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'footer_javascripts' => array($this, 'block_footer_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9bf0829f1d6b617dfc0d012e33fe9809faea94c26b6ab30d396275469789e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bf0829f1d6b617dfc0d012e33fe9809faea94c26b6ab30d396275469789e73->enter($__internal_b9bf0829f1d6b617dfc0d012e33fe9809faea94c26b6ab30d396275469789e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Layout:main.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>
<html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]>
<html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset=\"utf-8\"/>
    <title>";
        // line 12
        $this->displayBlock('header_title', $context, $blocks);
        echo " | ICare Benefits</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    <script type=\"text/javascript\">
        var iCareLocale = {};
    </script>

</head>
<!-- END HEAD -->

<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid\">
<!-- BEGIN HEADER -->
<div class=\"page-header navbar navbar-fixed-top\">
    <!-- BEGIN HEADER INNER -->
    <div class=\"page-header-inner \">
        <!-- BEGIN LOGO -->
        <div class=\"page-logo\">
            <a href=\"\">
                <img height=\"44\" src=\"/web/bundles/tchweb/img/logos/logo5.jpg\" alt=\"logo\" class=\"logo-default\"
                     style=\"margin:10px 0 0 0;\"/> </a>
            <div class=\"menu-toggler sidebar-toggler\">
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\"
           data-target=\".navbar-collapse\"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- BEGIN PAGE ACTIONS -->
        ";
        // line 48
        echo twig_include($this->env, $context, "TCHWebBundle:Blocks/Layout:page_actions.html.twig");
        echo "
        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        ";
        // line 51
        echo twig_include($this->env, $context, "TCHWebBundle:Blocks/Layout:page_top.html.twig");
        echo "
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class=\"clearfix\"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class=\"page-container\">
    <!-- BEGIN SIDEBAR -->
    <div class=\"page-sidebar-wrapper\">
        <!-- END SIDEBAR -->
        <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
        ";
        // line 67
        echo twig_include($this->env, $context, "TCHWebBundle:Blocks/Layout:siderbar.html.twig");
        echo "
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class=\"page-content-wrapper\">
        <!-- BEGIN CONTENT BODY -->
        <div class=\"page-content\">
            ";
        // line 76
        echo "            <!-- BEGIN PAGE HEADER-->
            <h1 class=\"page-title\"> ";
        // line 77
        $this->displayBlock('page_title', $context, $blocks);
        // line 78
        echo "                <small>";
        $this->displayBlock('short_description', $context, $blocks);
        echo "</small>
            </h1>
            <div class=\"page-bar\">
                <ul class=\"page-breadcrumb\">
                    <li>
                        <i class=\"icon-home\"></i>
                        <a href=\"#\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("breadcrumb.home"), "html", null, true);
        echo "</a>
                        <i class=\"fa fa-angle-right\"></i>
                    </li>
                    ";
        // line 87
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 89
        echo "                </ul>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- END PAGE HEADER-->
                    ";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "                </div>

            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    ";
        // line 105
        echo "    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class=\"page-footer\">
    ";
        // line 110
        echo twig_include($this->env, $context, "TCHWebBundle:Blocks/Layout:page_footer.html.twig");
        echo "


    ";
        // line 113
        $this->displayBlock('footer_javascripts', $context, $blocks);
        // line 116
        echo "</div>
<!-- END FOOTER -->
</body>

</html>";
        
        $__internal_b9bf0829f1d6b617dfc0d012e33fe9809faea94c26b6ab30d396275469789e73->leave($__internal_b9bf0829f1d6b617dfc0d012e33fe9809faea94c26b6ab30d396275469789e73_prof);

    }

    // line 12
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_76f7950295d03fea83bc6511b6f19c6c93b560b2ffe920df7b08725c41f5e4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f7950295d03fea83bc6511b6f19c6c93b560b2ffe920df7b08725c41f5e4a0->enter($__internal_76f7950295d03fea83bc6511b6f19c6c93b560b2ffe920df7b08725c41f5e4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        
        $__internal_76f7950295d03fea83bc6511b6f19c6c93b560b2ffe920df7b08725c41f5e4a0->leave($__internal_76f7950295d03fea83bc6511b6f19c6c93b560b2ffe920df7b08725c41f5e4a0_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac64970525e7375ab8dbebc61427a1adf2c10448b106c1e08e9233f76ca50c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac64970525e7375ab8dbebc61427a1adf2c10448b106c1e08e9233f76ca50c3d->enter($__internal_ac64970525e7375ab8dbebc61427a1adf2c10448b106c1e08e9233f76ca50c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "        ";
        echo twig_include($this->env, $context, "TCHWebBundle:Blocks/Layout:head_stylesheets.html.twig");
        echo "
    ";
        
        $__internal_ac64970525e7375ab8dbebc61427a1adf2c10448b106c1e08e9233f76ca50c3d->leave($__internal_ac64970525e7375ab8dbebc61427a1adf2c10448b106c1e08e9233f76ca50c3d_prof);

    }

    // line 77
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f1f5b098c4cdd0071d5f8e67cc2d9955ff6b5750f5111950b6a2b9b5e26c1f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f5b098c4cdd0071d5f8e67cc2d9955ff6b5750f5111950b6a2b9b5e26c1f53->enter($__internal_f1f5b098c4cdd0071d5f8e67cc2d9955ff6b5750f5111950b6a2b9b5e26c1f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_f1f5b098c4cdd0071d5f8e67cc2d9955ff6b5750f5111950b6a2b9b5e26c1f53->leave($__internal_f1f5b098c4cdd0071d5f8e67cc2d9955ff6b5750f5111950b6a2b9b5e26c1f53_prof);

    }

    // line 78
    public function block_short_description($context, array $blocks = array())
    {
        $__internal_724dae1a179568dbd2533008a168548397953c403122da22e07e1828531a1320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724dae1a179568dbd2533008a168548397953c403122da22e07e1828531a1320->enter($__internal_724dae1a179568dbd2533008a168548397953c403122da22e07e1828531a1320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "short_description"));

        
        $__internal_724dae1a179568dbd2533008a168548397953c403122da22e07e1828531a1320->leave($__internal_724dae1a179568dbd2533008a168548397953c403122da22e07e1828531a1320_prof);

    }

    // line 87
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_bd736714598a4dcd966f0ca85bc92694f2a6782cc8debcd8d9dd0ef8f28d7ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd736714598a4dcd966f0ca85bc92694f2a6782cc8debcd8d9dd0ef8f28d7ffe->enter($__internal_bd736714598a4dcd966f0ca85bc92694f2a6782cc8debcd8d9dd0ef8f28d7ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 88
        echo "                    ";
        
        $__internal_bd736714598a4dcd966f0ca85bc92694f2a6782cc8debcd8d9dd0ef8f28d7ffe->leave($__internal_bd736714598a4dcd966f0ca85bc92694f2a6782cc8debcd8d9dd0ef8f28d7ffe_prof);

    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9ca820e2305c5e6d9b9253e48640dcb92043a5d48afc49118368c94d573708d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ca820e2305c5e6d9b9253e48640dcb92043a5d48afc49118368c94d573708d->enter($__internal_c9ca820e2305c5e6d9b9253e48640dcb92043a5d48afc49118368c94d573708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 95
        echo "                    ";
        
        $__internal_c9ca820e2305c5e6d9b9253e48640dcb92043a5d48afc49118368c94d573708d->leave($__internal_c9ca820e2305c5e6d9b9253e48640dcb92043a5d48afc49118368c94d573708d_prof);

    }

    // line 113
    public function block_footer_javascripts($context, array $blocks = array())
    {
        $__internal_61d3f54c96a3f1b3f67df29d7eadc789345abfa18dbad64babb6872f1e897352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d3f54c96a3f1b3f67df29d7eadc789345abfa18dbad64babb6872f1e897352->enter($__internal_61d3f54c96a3f1b3f67df29d7eadc789345abfa18dbad64babb6872f1e897352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_javascripts"));

        // line 114
        echo "        ";
        echo twig_include($this->env, $context, "TCHWebBundle:Blocks/Layout:footer_javascripts.html.twig");
        echo "
    ";
        
        $__internal_61d3f54c96a3f1b3f67df29d7eadc789345abfa18dbad64babb6872f1e897352->leave($__internal_61d3f54c96a3f1b3f67df29d7eadc789345abfa18dbad64babb6872f1e897352_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Layout:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 114,  261 => 113,  254 => 95,  248 => 94,  241 => 88,  235 => 87,  224 => 78,  213 => 77,  203 => 18,  197 => 17,  186 => 12,  175 => 116,  173 => 113,  167 => 110,  160 => 105,  150 => 96,  148 => 94,  141 => 89,  139 => 87,  133 => 84,  123 => 78,  121 => 77,  118 => 76,  107 => 67,  88 => 51,  82 => 48,  52 => 20,  50 => 17,  42 => 12,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]>
<html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]>
<html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset=\"utf-8\"/>
    <title>{% block header_title %}{% endblock %} | ICare Benefits</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    {% block stylesheets %}
        {{ include('TCHWebBundle:Blocks/Layout:head_stylesheets.html.twig') }}
    {% endblock %}

    <script type=\"text/javascript\">
        var iCareLocale = {};
    </script>

</head>
<!-- END HEAD -->

<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid\">
<!-- BEGIN HEADER -->
<div class=\"page-header navbar navbar-fixed-top\">
    <!-- BEGIN HEADER INNER -->
    <div class=\"page-header-inner \">
        <!-- BEGIN LOGO -->
        <div class=\"page-logo\">
            <a href=\"\">
                <img height=\"44\" src=\"/web/bundles/tchweb/img/logos/logo5.jpg\" alt=\"logo\" class=\"logo-default\"
                     style=\"margin:10px 0 0 0;\"/> </a>
            <div class=\"menu-toggler sidebar-toggler\">
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\"
           data-target=\".navbar-collapse\"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- BEGIN PAGE ACTIONS -->
        {{ include('TCHWebBundle:Blocks/Layout:page_actions.html.twig') }}
        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        {{ include('TCHWebBundle:Blocks/Layout:page_top.html.twig') }}
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class=\"clearfix\"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class=\"page-container\">
    <!-- BEGIN SIDEBAR -->
    <div class=\"page-sidebar-wrapper\">
        <!-- END SIDEBAR -->
        <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
        {{ include('TCHWebBundle:Blocks/Layout:siderbar.html.twig') }}
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class=\"page-content-wrapper\">
        <!-- BEGIN CONTENT BODY -->
        <div class=\"page-content\">
            {#{% render(controller('ICareUserBundle:Admin/Customer:impersonatedNotification')) %}#}
            <!-- BEGIN PAGE HEADER-->
            <h1 class=\"page-title\"> {% block page_title %}{% endblock %}
                <small>{% block short_description %}{% endblock %}</small>
            </h1>
            <div class=\"page-bar\">
                <ul class=\"page-breadcrumb\">
                    <li>
                        <i class=\"icon-home\"></i>
                        <a href=\"#\">{{ 'breadcrumb.home'|trans }}</a>
                        <i class=\"fa fa-angle-right\"></i>
                    </li>
                    {% block breadcrumb %}
                    {% endblock %}
                </ul>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- END PAGE HEADER-->
                    {% block content %}
                    {% endblock %}
                </div>

            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    {#{{ include('@ICareWeb/Blocks/Layout/quick_sidebar.html.twig') }}#}
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class=\"page-footer\">
    {{ include('TCHWebBundle:Blocks/Layout:page_footer.html.twig') }}


    {% block footer_javascripts %}
        {{ include('TCHWebBundle:Blocks/Layout:footer_javascripts.html.twig') }}
    {% endblock %}
</div>
<!-- END FOOTER -->
</body>

</html>", "TCHWebBundle:Layout:main.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Layout/main.html.twig");
    }
}
