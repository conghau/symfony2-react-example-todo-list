<?php

/* TCHWebBundle:Layout:blank.html.twig */
class __TwigTemplate_7b2665adecb95eca0a6f71b67d265e5de325e344d95444907b21dce5c39ad47d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'footer_javascripts' => array($this, 'block_footer_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_581a03034cbb1fa9c308d7cac3e67c510510e110c9f00241c1f5192eb26556db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581a03034cbb1fa9c308d7cac3e67c510510e110c9f00241c1f5192eb26556db->enter($__internal_581a03034cbb1fa9c308d7cac3e67c510510e110c9f00241c1f5192eb26556db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Layout:blank.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset=\"utf-8\" />
    <title>Welcome to ICare Benefits </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    <link href=\"/bundles/icareweb/pages/css/login-2.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/bundles/icareweb/layouts/layout2/css/custom.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
<!-- END HEAD -->

<body class=\" login\">
<!-- BEGIN LOGO -->
<div class=\"logo\">
    <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("i_care_web_dashboard", array());
        echo "\">
        <img width=\"120\" src=\"/bundles/icareweb/img/logos/icare_benefits.png\" /> </a>

</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class=\"content\">
    ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "    <!-- BEGIN LOGIN FORM -->

    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->

    <!-- END FORGOT PASSWORD FORM -->

    <!-- END REGISTRATION FORM -->
</div>
<div class=\"copyright hide\"> 2016 &copy; ICareBenefits.com </div>
";
        // line 50
        $this->displayBlock('footer_javascripts', $context, $blocks);
        // line 56
        echo "</body>

</html>";
        
        $__internal_581a03034cbb1fa9c308d7cac3e67c510510e110c9f00241c1f5192eb26556db->leave($__internal_581a03034cbb1fa9c308d7cac3e67c510510e110c9f00241c1f5192eb26556db_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d14979f3b6015a3908eb47e93025c899dbff93125db46c607651e2b94ffa15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d14979f3b6015a3908eb47e93025c899dbff93125db46c607651e2b94ffa15c->enter($__internal_6d14979f3b6015a3908eb47e93025c899dbff93125db46c607651e2b94ffa15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        ";
        echo twig_include($this->env, $context, "ICareWebBundle:Blocks/Layout:head_stylesheets.html.twig");
        echo "
    ";
        
        $__internal_6d14979f3b6015a3908eb47e93025c899dbff93125db46c607651e2b94ffa15c->leave($__internal_6d14979f3b6015a3908eb47e93025c899dbff93125db46c607651e2b94ffa15c_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_b95d0dbb015f93d548fef4e1aae25c37c5b838d8ab8f5864fbb606bd3f21944a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95d0dbb015f93d548fef4e1aae25c37c5b838d8ab8f5864fbb606bd3f21944a->enter($__internal_b95d0dbb015f93d548fef4e1aae25c37c5b838d8ab8f5864fbb606bd3f21944a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "
    ";
        
        $__internal_b95d0dbb015f93d548fef4e1aae25c37c5b838d8ab8f5864fbb606bd3f21944a->leave($__internal_b95d0dbb015f93d548fef4e1aae25c37c5b838d8ab8f5864fbb606bd3f21944a_prof);

    }

    // line 50
    public function block_footer_javascripts($context, array $blocks = array())
    {
        $__internal_76b14e84a80acec17fcfe8cc38312efe94f80e50675e2524b74485e4705defd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b14e84a80acec17fcfe8cc38312efe94f80e50675e2524b74485e4705defd3->enter($__internal_76b14e84a80acec17fcfe8cc38312efe94f80e50675e2524b74485e4705defd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_javascripts"));

        // line 51
        echo "    ";
        echo twig_include($this->env, $context, "@ICareWeb/Blocks/Layout/footer_javascripts.html.twig");
        echo "
    <script src=\"/bundles/icareweb/pages/scripts/login.js\" type=\"text/javascript\"></script>
    <script src=\"/bundles/icareweb/pages/scripts/login.custom.js\" type=\"text/javascript\"></script>

";
        
        $__internal_76b14e84a80acec17fcfe8cc38312efe94f80e50675e2524b74485e4705defd3->leave($__internal_76b14e84a80acec17fcfe8cc38312efe94f80e50675e2524b74485e4705defd3_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Layout:blank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 51,  122 => 50,  114 => 38,  108 => 37,  98 => 17,  92 => 16,  83 => 56,  81 => 50,  69 => 40,  67 => 37,  57 => 30,  44 => 19,  42 => 16,  25 => 1,);
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
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset=\"utf-8\" />
    <title>Welcome to ICare Benefits </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    {% block stylesheets %}
        {{ include('ICareWebBundle:Blocks/Layout:head_stylesheets.html.twig') }}
    {% endblock %}

    <link href=\"/bundles/icareweb/pages/css/login-2.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/bundles/icareweb/layouts/layout2/css/custom.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
<!-- END HEAD -->

<body class=\" login\">
<!-- BEGIN LOGO -->
<div class=\"logo\">
    <a href=\"{{ path('i_care_web_dashboard', {  }) }}\">
        <img width=\"120\" src=\"/bundles/icareweb/img/logos/icare_benefits.png\" /> </a>

</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class=\"content\">
    {% block content %}

    {% endblock %}
    <!-- BEGIN LOGIN FORM -->

    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->

    <!-- END FORGOT PASSWORD FORM -->

    <!-- END REGISTRATION FORM -->
</div>
<div class=\"copyright hide\"> 2016 &copy; ICareBenefits.com </div>
{% block footer_javascripts %}
    {{ include('@ICareWeb/Blocks/Layout/footer_javascripts.html.twig') }}
    <script src=\"/bundles/icareweb/pages/scripts/login.js\" type=\"text/javascript\"></script>
    <script src=\"/bundles/icareweb/pages/scripts/login.custom.js\" type=\"text/javascript\"></script>

{% endblock %}
</body>

</html>", "TCHWebBundle:Layout:blank.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Layout/blank.html.twig");
    }
}
