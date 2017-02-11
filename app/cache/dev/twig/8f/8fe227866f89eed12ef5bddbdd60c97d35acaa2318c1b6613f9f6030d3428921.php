<?php

/* TCHWebBundle:Pages:todo.html.twig */
class __TwigTemplate_8669d554ab56b88d0e20e3e921f2baba9c43885836c1f87b11b2b824e6bc3f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TCHWebBundle:Layout:main.html.twig", "TCHWebBundle:Pages:todo.html.twig", 1);
        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'page_title' => array($this, 'block_page_title'),
            'short_description' => array($this, 'block_short_description'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TCHWebBundle:Layout:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f851bbce854460cc4aa28435c82836284aac6934060311526e39edb0817f2ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f851bbce854460cc4aa28435c82836284aac6934060311526e39edb0817f2ac4->enter($__internal_f851bbce854460cc4aa28435c82836284aac6934060311526e39edb0817f2ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Pages:todo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f851bbce854460cc4aa28435c82836284aac6934060311526e39edb0817f2ac4->leave($__internal_f851bbce854460cc4aa28435c82836284aac6934060311526e39edb0817f2ac4_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_58b87672cdb5bec05246f33df4488271effec0d51035834c361831aaa2ceabdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b87672cdb5bec05246f33df4488271effec0d51035834c361831aaa2ceabdd->enter($__internal_58b87672cdb5bec05246f33df4488271effec0d51035834c361831aaa2ceabdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("todo.page_title"), "html", null, true);
        
        $__internal_58b87672cdb5bec05246f33df4488271effec0d51035834c361831aaa2ceabdd->leave($__internal_58b87672cdb5bec05246f33df4488271effec0d51035834c361831aaa2ceabdd_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bc7c6a503141b43689b278d8f7ebde6febda09dc754376115156f14d51505225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7c6a503141b43689b278d8f7ebde6febda09dc754376115156f14d51505225->enter($__internal_bc7c6a503141b43689b278d8f7ebde6febda09dc754376115156f14d51505225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("todo.page_title"), "html", null, true);
        
        $__internal_bc7c6a503141b43689b278d8f7ebde6febda09dc754376115156f14d51505225->leave($__internal_bc7c6a503141b43689b278d8f7ebde6febda09dc754376115156f14d51505225_prof);

    }

    // line 7
    public function block_short_description($context, array $blocks = array())
    {
        $__internal_09f236b5af6f14422392a29dc948c870ee3833da09d6b41344c95314a4f2c285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f236b5af6f14422392a29dc948c870ee3833da09d6b41344c95314a4f2c285->enter($__internal_09f236b5af6f14422392a29dc948c870ee3833da09d6b41344c95314a4f2c285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "short_description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("todo.page_description"), "html", null, true);
        
        $__internal_09f236b5af6f14422392a29dc948c870ee3833da09d6b41344c95314a4f2c285->leave($__internal_09f236b5af6f14422392a29dc948c870ee3833da09d6b41344c95314a4f2c285_prof);

    }

    // line 10
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_257e54c6c6117df29dcd26f06c1733099b5a6e15532a6accfc75a202621e04f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257e54c6c6117df29dcd26f06c1733099b5a6e15532a6accfc75a202621e04f2->enter($__internal_257e54c6c6117df29dcd26f06c1733099b5a6e15532a6accfc75a202621e04f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 11
        echo "    <li>
        <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("breadcrumb.todo"), "html", null, true);
        echo "</span>
    </li>
";
        
        $__internal_257e54c6c6117df29dcd26f06c1733099b5a6e15532a6accfc75a202621e04f2->leave($__internal_257e54c6c6117df29dcd26f06c1733099b5a6e15532a6accfc75a202621e04f2_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_8042cb6293708e4ff5456398fe4386088b4e14828fa82332cb8efd9e044505c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8042cb6293708e4ff5456398fe4386088b4e14828fa82332cb8efd9e044505c0->enter($__internal_8042cb6293708e4ff5456398fe4386088b4e14828fa82332cb8efd9e044505c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <div class=\"row\">

        <div class=\"col-md-12\">
            <div id=\"app\"></div>
            <script type=\"application/javascript\">
            </script>
        </div>
    </div>
";
        
        $__internal_8042cb6293708e4ff5456398fe4386088b4e14828fa82332cb8efd9e044505c0->leave($__internal_8042cb6293708e4ff5456398fe4386088b4e14828fa82332cb8efd9e044505c0_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Pages:todo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  93 => 17,  83 => 12,  80 => 11,  74 => 10,  62 => 7,  50 => 6,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TCHWebBundle:Layout:main.html.twig' %}

{% block header_title %}{{ 'todo.page_title'|trans }}{% endblock %}


{% block page_title %}{{ 'todo.page_title'|trans }}{% endblock %}
{% block short_description %}{{ 'todo.page_description'|trans }}{% endblock %}


{% block breadcrumb %}
    <li>
        <span>{{ 'breadcrumb.todo'|trans }}</span>
    </li>
{% endblock %}


{% block content %}
    <div class=\"row\">

        <div class=\"col-md-12\">
            <div id=\"app\"></div>
            <script type=\"application/javascript\">
            </script>
        </div>
    </div>
{% endblock %}", "TCHWebBundle:Pages:todo.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Pages/todo.html.twig");
    }
}
