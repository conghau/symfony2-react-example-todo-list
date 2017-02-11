<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ae0c4922c131f9eaa050e32451d4f4e0a1aefd07be84db49f8b39b9c019f4361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_de4e10cd6bf6ee8e0b5e8fc2c0e4debbe6f67fc30ef7f34a6ae96b47731c356c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4e10cd6bf6ee8e0b5e8fc2c0e4debbe6f67fc30ef7f34a6ae96b47731c356c->enter($__internal_de4e10cd6bf6ee8e0b5e8fc2c0e4debbe6f67fc30ef7f34a6ae96b47731c356c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de4e10cd6bf6ee8e0b5e8fc2c0e4debbe6f67fc30ef7f34a6ae96b47731c356c->leave($__internal_de4e10cd6bf6ee8e0b5e8fc2c0e4debbe6f67fc30ef7f34a6ae96b47731c356c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c529c72b4199d370c2582e827d7c23bad602a3584c0608f3e33c9937ca20172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c529c72b4199d370c2582e827d7c23bad602a3584c0608f3e33c9937ca20172->enter($__internal_7c529c72b4199d370c2582e827d7c23bad602a3584c0608f3e33c9937ca20172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7c529c72b4199d370c2582e827d7c23bad602a3584c0608f3e33c9937ca20172->leave($__internal_7c529c72b4199d370c2582e827d7c23bad602a3584c0608f3e33c9937ca20172_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ead720b3e73d94851e6bafeb36e77811d27eade39d06c713a1f006f09c4a7106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead720b3e73d94851e6bafeb36e77811d27eade39d06c713a1f006f09c4a7106->enter($__internal_ead720b3e73d94851e6bafeb36e77811d27eade39d06c713a1f006f09c4a7106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ead720b3e73d94851e6bafeb36e77811d27eade39d06c713a1f006f09c4a7106->leave($__internal_ead720b3e73d94851e6bafeb36e77811d27eade39d06c713a1f006f09c4a7106_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b65d67ee7bdd4ca303c6089ab153ab395f2b3eae973778e76c16ba0516a27a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b65d67ee7bdd4ca303c6089ab153ab395f2b3eae973778e76c16ba0516a27a3->enter($__internal_0b65d67ee7bdd4ca303c6089ab153ab395f2b3eae973778e76c16ba0516a27a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0b65d67ee7bdd4ca303c6089ab153ab395f2b3eae973778e76c16ba0516a27a3->leave($__internal_0b65d67ee7bdd4ca303c6089ab153ab395f2b3eae973778e76c16ba0516a27a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
