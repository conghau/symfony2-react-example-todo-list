<?php

/* base.html.twig */
class __TwigTemplate_cb6c8df7508a84f5cbc4852d72f3e5671393abc4b88824cba2017cd099f97f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe6e1b674a3e653fadff9956cff4e7d5b6fa92294d1eddd7f23aaa1ec87cdee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6e1b674a3e653fadff9956cff4e7d5b6fa92294d1eddd7f23aaa1ec87cdee6->enter($__internal_fe6e1b674a3e653fadff9956cff4e7d5b6fa92294d1eddd7f23aaa1ec87cdee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fe6e1b674a3e653fadff9956cff4e7d5b6fa92294d1eddd7f23aaa1ec87cdee6->leave($__internal_fe6e1b674a3e653fadff9956cff4e7d5b6fa92294d1eddd7f23aaa1ec87cdee6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28bfe5385f48a262876699ef66c2cfc8bec39d0b3e094a3e32f1053499f8727d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bfe5385f48a262876699ef66c2cfc8bec39d0b3e094a3e32f1053499f8727d->enter($__internal_28bfe5385f48a262876699ef66c2cfc8bec39d0b3e094a3e32f1053499f8727d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_28bfe5385f48a262876699ef66c2cfc8bec39d0b3e094a3e32f1053499f8727d->leave($__internal_28bfe5385f48a262876699ef66c2cfc8bec39d0b3e094a3e32f1053499f8727d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87eb04ef37cf98712c8f598fd32b19b64468772947efe8653ad090d009a4bd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87eb04ef37cf98712c8f598fd32b19b64468772947efe8653ad090d009a4bd9c->enter($__internal_87eb04ef37cf98712c8f598fd32b19b64468772947efe8653ad090d009a4bd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_87eb04ef37cf98712c8f598fd32b19b64468772947efe8653ad090d009a4bd9c->leave($__internal_87eb04ef37cf98712c8f598fd32b19b64468772947efe8653ad090d009a4bd9c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9b4006de7fde9b9ba412aa977778ab13ac87081b2ead9a3a03c3b19a69e044b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b4006de7fde9b9ba412aa977778ab13ac87081b2ead9a3a03c3b19a69e044b->enter($__internal_a9b4006de7fde9b9ba412aa977778ab13ac87081b2ead9a3a03c3b19a69e044b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9b4006de7fde9b9ba412aa977778ab13ac87081b2ead9a3a03c3b19a69e044b->leave($__internal_a9b4006de7fde9b9ba412aa977778ab13ac87081b2ead9a3a03c3b19a69e044b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e3fbd7ec5f28274dd5618e9fcbf91a1718f1366b2896432a022741ea64a5b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3fbd7ec5f28274dd5618e9fcbf91a1718f1366b2896432a022741ea64a5b30->enter($__internal_2e3fbd7ec5f28274dd5618e9fcbf91a1718f1366b2896432a022741ea64a5b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2e3fbd7ec5f28274dd5618e9fcbf91a1718f1366b2896432a022741ea64a5b30->leave($__internal_2e3fbd7ec5f28274dd5618e9fcbf91a1718f1366b2896432a022741ea64a5b30_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/symfony2-react-example-todo-list/app/Resources/views/base.html.twig");
    }
}
