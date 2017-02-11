<?php

/* TCHTodoBundle:Default:index.html.twig */
class __TwigTemplate_3d4951c3b5262f8a3644895bb1b512c63daf5e74cffe59de3dae8c35422d78f6 extends Twig_Template
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
        $__internal_bc0ba3cc351b386925f412b9f471fd34b7515a5ddaa7e6a446306aaef83fc7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0ba3cc351b386925f412b9f471fd34b7515a5ddaa7e6a446306aaef83fc7d8->enter($__internal_bc0ba3cc351b386925f412b9f471fd34b7515a5ddaa7e6a446306aaef83fc7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHTodoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_bc0ba3cc351b386925f412b9f471fd34b7515a5ddaa7e6a446306aaef83fc7d8->leave($__internal_bc0ba3cc351b386925f412b9f471fd34b7515a5ddaa7e6a446306aaef83fc7d8_prof);

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
