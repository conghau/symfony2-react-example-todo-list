<?php

/* NelmioApiDocBundle:Components:motd.html.twig */
class __TwigTemplate_cebd131ae47fcd3e8a4b7ee82666cfab36a7c520fb37fd89d4730c58c8a95c2f extends Twig_Template
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
        $__internal_294e852d7bee18e0124eced39221180d09cf4036fa9cf4ff9e02b95383ecc13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294e852d7bee18e0124eced39221180d09cf4036fa9cf4ff9e02b95383ecc13a->enter($__internal_294e852d7bee18e0124eced39221180d09cf4036fa9cf4ff9e02b95383ecc13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_294e852d7bee18e0124eced39221180d09cf4036fa9cf4ff9e02b95383ecc13a->leave($__internal_294e852d7bee18e0124eced39221180d09cf4036fa9cf4ff9e02b95383ecc13a_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:motd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle:Components:motd.html.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
