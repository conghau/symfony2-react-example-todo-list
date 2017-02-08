<?php

/* NelmioApiDocBundle::Components/motd.html.twig */
class __TwigTemplate_7fcaab56f9a0d003f214896c9af44b669d426f51d8a6e60791a2ab3ff8435e8a extends Twig_Template
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
        $__internal_d8bbbaab7bbb3752fee956fa45a7a3645b6c9a9f99bf511903276cfdbfc1d398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bbbaab7bbb3752fee956fa45a7a3645b6c9a9f99bf511903276cfdbfc1d398->enter($__internal_d8bbbaab7bbb3752fee956fa45a7a3645b6c9a9f99bf511903276cfdbfc1d398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_d8bbbaab7bbb3752fee956fa45a7a3645b6c9a9f99bf511903276cfdbfc1d398->leave($__internal_d8bbbaab7bbb3752fee956fa45a7a3645b6c9a9f99bf511903276cfdbfc1d398_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::Components/motd.html.twig";
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
", "NelmioApiDocBundle::Components/motd.html.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
