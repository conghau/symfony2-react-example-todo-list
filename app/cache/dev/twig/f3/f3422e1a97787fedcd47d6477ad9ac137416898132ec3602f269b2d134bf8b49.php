<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4cce0c292a732ead7a94b8c92ffbe0d1fc0cb7750dafd9cb50a2eb0819c906f2 extends Twig_Template
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
        $__internal_f0e1710554bb06628c37a91d93fcf1cb8123aacebc650400f1939406a5d50014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e1710554bb06628c37a91d93fcf1cb8123aacebc650400f1939406a5d50014->enter($__internal_f0e1710554bb06628c37a91d93fcf1cb8123aacebc650400f1939406a5d50014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e1710554bb06628c37a91d93fcf1cb8123aacebc650400f1939406a5d50014->leave($__internal_f0e1710554bb06628c37a91d93fcf1cb8123aacebc650400f1939406a5d50014_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4451ef27e3c32f72d326c06c5e4454fbae2bdeb3a207b3209a7bcc5aab573e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4451ef27e3c32f72d326c06c5e4454fbae2bdeb3a207b3209a7bcc5aab573e3->enter($__internal_b4451ef27e3c32f72d326c06c5e4454fbae2bdeb3a207b3209a7bcc5aab573e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b4451ef27e3c32f72d326c06c5e4454fbae2bdeb3a207b3209a7bcc5aab573e3->leave($__internal_b4451ef27e3c32f72d326c06c5e4454fbae2bdeb3a207b3209a7bcc5aab573e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a74310e93bea6d7ba13725033f431b2627b2aaaa746db1a2b26b37c8a2c32872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74310e93bea6d7ba13725033f431b2627b2aaaa746db1a2b26b37c8a2c32872->enter($__internal_a74310e93bea6d7ba13725033f431b2627b2aaaa746db1a2b26b37c8a2c32872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a74310e93bea6d7ba13725033f431b2627b2aaaa746db1a2b26b37c8a2c32872->leave($__internal_a74310e93bea6d7ba13725033f431b2627b2aaaa746db1a2b26b37c8a2c32872_prof);

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
