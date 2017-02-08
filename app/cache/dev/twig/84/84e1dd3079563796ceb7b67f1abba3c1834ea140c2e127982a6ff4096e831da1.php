<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f95b5a4511bd53129096318711ff843de4979908b9b6b9f651c2c454dbee36c4 extends Twig_Template
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
        $__internal_8c1087324a862945d4ee7bdf6bb92a5988c8b1a3d676aff1745155c1381a62a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1087324a862945d4ee7bdf6bb92a5988c8b1a3d676aff1745155c1381a62a1->enter($__internal_8c1087324a862945d4ee7bdf6bb92a5988c8b1a3d676aff1745155c1381a62a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8c1087324a862945d4ee7bdf6bb92a5988c8b1a3d676aff1745155c1381a62a1->leave($__internal_8c1087324a862945d4ee7bdf6bb92a5988c8b1a3d676aff1745155c1381a62a1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_571250e4759c585bbb35f70f0e560bdec5287f2f47f41855187403711345da12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571250e4759c585bbb35f70f0e560bdec5287f2f47f41855187403711345da12->enter($__internal_571250e4759c585bbb35f70f0e560bdec5287f2f47f41855187403711345da12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_571250e4759c585bbb35f70f0e560bdec5287f2f47f41855187403711345da12->leave($__internal_571250e4759c585bbb35f70f0e560bdec5287f2f47f41855187403711345da12_prof);

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
