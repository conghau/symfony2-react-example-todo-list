<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2e2e4dbac3159cb8c3263a240edbe310c65dcebfc490e9ed08728fdb8e86e6af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4d699dd5ba12a4ec562469dac0696c1b0d8a99968d344152c58d8beaf4eb243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d699dd5ba12a4ec562469dac0696c1b0d8a99968d344152c58d8beaf4eb243->enter($__internal_c4d699dd5ba12a4ec562469dac0696c1b0d8a99968d344152c58d8beaf4eb243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d699dd5ba12a4ec562469dac0696c1b0d8a99968d344152c58d8beaf4eb243->leave($__internal_c4d699dd5ba12a4ec562469dac0696c1b0d8a99968d344152c58d8beaf4eb243_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89f4fc00c9de0429be69c765a007466478ded18c9c5b01ec3b5a2037ba34c29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f4fc00c9de0429be69c765a007466478ded18c9c5b01ec3b5a2037ba34c29a->enter($__internal_89f4fc00c9de0429be69c765a007466478ded18c9c5b01ec3b5a2037ba34c29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_89f4fc00c9de0429be69c765a007466478ded18c9c5b01ec3b5a2037ba34c29a->leave($__internal_89f4fc00c9de0429be69c765a007466478ded18c9c5b01ec3b5a2037ba34c29a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41d4da1f45de68c59730f9cf6cc9d63a68bab2267501c1f9fe373643f1d5e2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d4da1f45de68c59730f9cf6cc9d63a68bab2267501c1f9fe373643f1d5e2e8->enter($__internal_41d4da1f45de68c59730f9cf6cc9d63a68bab2267501c1f9fe373643f1d5e2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_41d4da1f45de68c59730f9cf6cc9d63a68bab2267501c1f9fe373643f1d5e2e8->leave($__internal_41d4da1f45de68c59730f9cf6cc9d63a68bab2267501c1f9fe373643f1d5e2e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
