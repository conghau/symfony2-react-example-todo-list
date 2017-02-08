<?php

/* NelmioApiDocBundle:Components:motd.html.twig */
class __TwigTemplate_a2c33a1b50010d7e239cff08a668a64eb2bff7fdf95e58c970f01d03a062531d extends Twig_Template
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
        $__internal_7ad58a667a3376e4be4c43f53ee2d1e7889fcb62aa40b5a8aa7b94a1766d1902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad58a667a3376e4be4c43f53ee2d1e7889fcb62aa40b5a8aa7b94a1766d1902->enter($__internal_7ad58a667a3376e4be4c43f53ee2d1e7889fcb62aa40b5a8aa7b94a1766d1902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_7ad58a667a3376e4be4c43f53ee2d1e7889fcb62aa40b5a8aa7b94a1766d1902->leave($__internal_7ad58a667a3376e4be4c43f53ee2d1e7889fcb62aa40b5a8aa7b94a1766d1902_prof);

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
