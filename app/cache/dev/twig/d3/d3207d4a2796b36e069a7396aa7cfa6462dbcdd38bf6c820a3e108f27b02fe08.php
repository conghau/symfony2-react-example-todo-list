<?php

/* TCHWebBundle:Default:index.html.twig */
class __TwigTemplate_74dcc5e238d8ce96c0b6b515e71700faac8d3369a4beb1ba6492cac65c1ada93 extends Twig_Template
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
        $__internal_a8d08de2b3a37ccc5a079cec1b749af705e0d4cc191b33b6c7c9019dbc84c3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d08de2b3a37ccc5a079cec1b749af705e0d4cc191b33b6c7c9019dbc84c3bf->enter($__internal_a8d08de2b3a37ccc5a079cec1b749af705e0d4cc191b33b6c7c9019dbc84c3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a8d08de2b3a37ccc5a079cec1b749af705e0d4cc191b33b6c7c9019dbc84c3bf->leave($__internal_a8d08de2b3a37ccc5a079cec1b749af705e0d4cc191b33b6c7c9019dbc84c3bf_prof);

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
