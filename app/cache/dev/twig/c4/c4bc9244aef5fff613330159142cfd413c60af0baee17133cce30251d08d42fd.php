<?php

/* TCHWebBundle:Pages:todo.html.twig */
class __TwigTemplate_5f02e0e5c4dec232c69867df34d496d8209b651a8254ed9ed35df1e001a01fd6 extends Twig_Template
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
        $__internal_45b7274f7d164c7a7deab6ac2a5aab1c81fdf288fce56cf959b56de48e8d4f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b7274f7d164c7a7deab6ac2a5aab1c81fdf288fce56cf959b56de48e8d4f79->enter($__internal_45b7274f7d164c7a7deab6ac2a5aab1c81fdf288fce56cf959b56de48e8d4f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Pages:todo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45b7274f7d164c7a7deab6ac2a5aab1c81fdf288fce56cf959b56de48e8d4f79->leave($__internal_45b7274f7d164c7a7deab6ac2a5aab1c81fdf288fce56cf959b56de48e8d4f79_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_35cda0ea10410967aa0498b23558ba402e524e7a4e5fbb7076366de70ffd54c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cda0ea10410967aa0498b23558ba402e524e7a4e5fbb7076366de70ffd54c3->enter($__internal_35cda0ea10410967aa0498b23558ba402e524e7a4e5fbb7076366de70ffd54c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("call_list.page_title"), "html", null, true);
        
        $__internal_35cda0ea10410967aa0498b23558ba402e524e7a4e5fbb7076366de70ffd54c3->leave($__internal_35cda0ea10410967aa0498b23558ba402e524e7a4e5fbb7076366de70ffd54c3_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_354799fc06407a8b2ac402c2fb1b4de6ff0fc91da62dd5a25e3d0b644a06348b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354799fc06407a8b2ac402c2fb1b4de6ff0fc91da62dd5a25e3d0b644a06348b->enter($__internal_354799fc06407a8b2ac402c2fb1b4de6ff0fc91da62dd5a25e3d0b644a06348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("todo.page_title"), "html", null, true);
        
        $__internal_354799fc06407a8b2ac402c2fb1b4de6ff0fc91da62dd5a25e3d0b644a06348b->leave($__internal_354799fc06407a8b2ac402c2fb1b4de6ff0fc91da62dd5a25e3d0b644a06348b_prof);

    }

    // line 7
    public function block_short_description($context, array $blocks = array())
    {
        $__internal_52c83b9b3e4c11c60ee2238e5e2c17802f5f382f6a09a322e7a2170c1d7aed27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c83b9b3e4c11c60ee2238e5e2c17802f5f382f6a09a322e7a2170c1d7aed27->enter($__internal_52c83b9b3e4c11c60ee2238e5e2c17802f5f382f6a09a322e7a2170c1d7aed27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "short_description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("todo.page_description"), "html", null, true);
        
        $__internal_52c83b9b3e4c11c60ee2238e5e2c17802f5f382f6a09a322e7a2170c1d7aed27->leave($__internal_52c83b9b3e4c11c60ee2238e5e2c17802f5f382f6a09a322e7a2170c1d7aed27_prof);

    }

    // line 10
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_7e8f52bde9509f359726c0e9c78680734aaf207d51e2124c82c834884858aae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8f52bde9509f359726c0e9c78680734aaf207d51e2124c82c834884858aae4->enter($__internal_7e8f52bde9509f359726c0e9c78680734aaf207d51e2124c82c834884858aae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 11
        echo "    <li>
        <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("breadcrumb.todo"), "html", null, true);
        echo "</span>
    </li>
";
        
        $__internal_7e8f52bde9509f359726c0e9c78680734aaf207d51e2124c82c834884858aae4->leave($__internal_7e8f52bde9509f359726c0e9c78680734aaf207d51e2124c82c834884858aae4_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_acbead2319a0e7ed37fe19f5f5c11b263b746750074877c01160767274e7efe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbead2319a0e7ed37fe19f5f5c11b263b746750074877c01160767274e7efe1->enter($__internal_acbead2319a0e7ed37fe19f5f5c11b263b746750074877c01160767274e7efe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <div class=\"row\">

        <div class=\"col-md-12\">
            <div id=\"app\"></div>
            <script type=\"application/javascript\">
            </script>
        </div>
    </div>
";
        
        $__internal_acbead2319a0e7ed37fe19f5f5c11b263b746750074877c01160767274e7efe1->leave($__internal_acbead2319a0e7ed37fe19f5f5c11b263b746750074877c01160767274e7efe1_prof);

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

{% block header_title %}{{ 'call_list.page_title'|trans }}{% endblock %}


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
