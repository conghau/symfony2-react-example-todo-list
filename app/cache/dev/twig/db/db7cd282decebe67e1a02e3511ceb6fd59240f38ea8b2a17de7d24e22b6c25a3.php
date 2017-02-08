<?php

/* TCHTodoBundle:Default:index.html.twig */
class __TwigTemplate_d724cc5edd2c7f6e6564fbd22b5256e3c19e1a1cfd1efe8fd07daa204428bf80 extends Twig_Template
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
        $__internal_4ff6ba3f5c3ad902e338b37c31f2a6e61abc1b4e2dfd1d2771ff88aa7ad2dcb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff6ba3f5c3ad902e338b37c31f2a6e61abc1b4e2dfd1d2771ff88aa7ad2dcb3->enter($__internal_4ff6ba3f5c3ad902e338b37c31f2a6e61abc1b4e2dfd1d2771ff88aa7ad2dcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHTodoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_4ff6ba3f5c3ad902e338b37c31f2a6e61abc1b4e2dfd1d2771ff88aa7ad2dcb3->leave($__internal_4ff6ba3f5c3ad902e338b37c31f2a6e61abc1b4e2dfd1d2771ff88aa7ad2dcb3_prof);

    }

    public function getTemplateName()
    {
        return "TCHTodoBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "TCHTodoBundle:Default:index.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/TodoBundle/Resources/views/Default/index.html.twig");
    }
}
