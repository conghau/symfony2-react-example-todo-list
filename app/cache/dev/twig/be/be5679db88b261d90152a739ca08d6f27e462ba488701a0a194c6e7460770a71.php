<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_5bcf6da78c626d17b439710a834348314074becdc4e93f5dd026ca38ae259fd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4616272e9a98f5f8fdac68edac35bc35506dbe6d8b284bb3a6e19f7b457d5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4616272e9a98f5f8fdac68edac35bc35506dbe6d8b284bb3a6e19f7b457d5ad->enter($__internal_b4616272e9a98f5f8fdac68edac35bc35506dbe6d8b284bb3a6e19f7b457d5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4616272e9a98f5f8fdac68edac35bc35506dbe6d8b284bb3a6e19f7b457d5ad->leave($__internal_b4616272e9a98f5f8fdac68edac35bc35506dbe6d8b284bb3a6e19f7b457d5ad_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ff1139dee7b8f6f5ac3bed27473343f5a10ab28114dd79b257fda6fa45859923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1139dee7b8f6f5ac3bed27473343f5a10ab28114dd79b257fda6fa45859923->enter($__internal_ff1139dee7b8f6f5ac3bed27473343f5a10ab28114dd79b257fda6fa45859923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_ff1139dee7b8f6f5ac3bed27473343f5a10ab28114dd79b257fda6fa45859923->leave($__internal_ff1139dee7b8f6f5ac3bed27473343f5a10ab28114dd79b257fda6fa45859923_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
", "NelmioApiDocBundle::resource.html.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resource.html.twig");
    }
}
