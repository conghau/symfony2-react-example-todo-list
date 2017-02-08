<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_d2005ac67082ee91a802611db616937365ab9b1ae7394025eadc66e96c08047c extends Twig_Template
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
        $__internal_08d9bea1fda08562295e267bd12b2bbfe965171d3182dbe06a0ee9a90c2f120d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d9bea1fda08562295e267bd12b2bbfe965171d3182dbe06a0ee9a90c2f120d->enter($__internal_08d9bea1fda08562295e267bd12b2bbfe965171d3182dbe06a0ee9a90c2f120d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08d9bea1fda08562295e267bd12b2bbfe965171d3182dbe06a0ee9a90c2f120d->leave($__internal_08d9bea1fda08562295e267bd12b2bbfe965171d3182dbe06a0ee9a90c2f120d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d5070bbc63e3d64a83f63ec919c04e80e20b3f15e28420fc2fd0dc8ed16b475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5070bbc63e3d64a83f63ec919c04e80e20b3f15e28420fc2fd0dc8ed16b475->enter($__internal_8d5070bbc63e3d64a83f63ec919c04e80e20b3f15e28420fc2fd0dc8ed16b475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8d5070bbc63e3d64a83f63ec919c04e80e20b3f15e28420fc2fd0dc8ed16b475->leave($__internal_8d5070bbc63e3d64a83f63ec919c04e80e20b3f15e28420fc2fd0dc8ed16b475_prof);

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
