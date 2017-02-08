<?php

/* TCHWebBundle:Default:index.html.twig */
class __TwigTemplate_5fcda7537f467840ebb9848e025a6b72b7bd76bb08de1bdecc0e3696c18c16b8 extends Twig_Template
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
        $__internal_8d856d02863d487178f650efefd531709e9804b47436c1884e3c74b42517a0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d856d02863d487178f650efefd531709e9804b47436c1884e3c74b42517a0b8->enter($__internal_8d856d02863d487178f650efefd531709e9804b47436c1884e3c74b42517a0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_8d856d02863d487178f650efefd531709e9804b47436c1884e3c74b42517a0b8->leave($__internal_8d856d02863d487178f650efefd531709e9804b47436c1884e3c74b42517a0b8_prof);

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
        return new Twig_Source("Hello World!
", "TCHWebBundle:Default:index.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Default/index.html.twig");
    }
}
