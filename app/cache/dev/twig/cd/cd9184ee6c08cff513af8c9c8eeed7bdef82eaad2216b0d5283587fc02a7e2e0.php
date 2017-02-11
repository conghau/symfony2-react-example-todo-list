<?php

/* TCHWebBundle:Default:index.html.twig */
class __TwigTemplate_c989b9000276af07e8b725f9fbe8b0cd987f72697c250885a5eabb4a2c447900 extends Twig_Template
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
        $__internal_e1c5b6f06ab02f1bc04784b7031edf6328b002147badc0fbc5b34ded20d905b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c5b6f06ab02f1bc04784b7031edf6328b002147badc0fbc5b34ded20d905b7->enter($__internal_e1c5b6f06ab02f1bc04784b7031edf6328b002147badc0fbc5b34ded20d905b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Default:index.html.twig"));

        // line 1
        echo "<h1>Welcome to demo</h1>
<p>goto /todo</p>";
        
        $__internal_e1c5b6f06ab02f1bc04784b7031edf6328b002147badc0fbc5b34ded20d905b7->leave($__internal_e1c5b6f06ab02f1bc04784b7031edf6328b002147badc0fbc5b34ded20d905b7_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Default:index.html.twig";
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
        return new Twig_Source("<h1>Welcome to demo</h1>
<p>goto /todo</p>", "TCHWebBundle:Default:index.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Default/index.html.twig");
    }
}
