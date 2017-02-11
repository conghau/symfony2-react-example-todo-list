<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e9242d8ee928e1103d9dfded548bbd0a66871abe8a46ebee3ae4bb346b940c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cfb048a1facd12f0033bdce9c01f9505408ecc5efd948cbf5b8059c67d210ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfb048a1facd12f0033bdce9c01f9505408ecc5efd948cbf5b8059c67d210ac->enter($__internal_9cfb048a1facd12f0033bdce9c01f9505408ecc5efd948cbf5b8059c67d210ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9cfb048a1facd12f0033bdce9c01f9505408ecc5efd948cbf5b8059c67d210ac->leave($__internal_9cfb048a1facd12f0033bdce9c01f9505408ecc5efd948cbf5b8059c67d210ac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_23fc9ae76b04d8a685f29b04b462ff36b9da71a1220782436696402b51e0447d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fc9ae76b04d8a685f29b04b462ff36b9da71a1220782436696402b51e0447d->enter($__internal_23fc9ae76b04d8a685f29b04b462ff36b9da71a1220782436696402b51e0447d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_23fc9ae76b04d8a685f29b04b462ff36b9da71a1220782436696402b51e0447d->leave($__internal_23fc9ae76b04d8a685f29b04b462ff36b9da71a1220782436696402b51e0447d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
