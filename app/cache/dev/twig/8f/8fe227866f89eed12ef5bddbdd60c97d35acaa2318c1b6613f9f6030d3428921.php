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
        $__internal_ef03d661af06974c95d712a47df15546dc4caa426a6b89408ef345ae7fd8dd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef03d661af06974c95d712a47df15546dc4caa426a6b89408ef345ae7fd8dd7a->enter($__internal_ef03d661af06974c95d712a47df15546dc4caa426a6b89408ef345ae7fd8dd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Pages:todo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef03d661af06974c95d712a47df15546dc4caa426a6b89408ef345ae7fd8dd7a->leave($__internal_ef03d661af06974c95d712a47df15546dc4caa426a6b89408ef345ae7fd8dd7a_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_e81fa35ca90f6c553ff1d17afdd7ba1afa0fb1afee2e62148c51c9e47af75295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81fa35ca90f6c553ff1d17afdd7ba1afa0fb1afee2e62148c51c9e47af75295->enter($__internal_e81fa35ca90f6c553ff1d17afdd7ba1afa0fb1afee2e62148c51c9e47af75295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("call_list.page_title"), "html", null, true);
        
        $__internal_e81fa35ca90f6c553ff1d17afdd7ba1afa0fb1afee2e62148c51c9e47af75295->leave($__internal_e81fa35ca90f6c553ff1d17afdd7ba1afa0fb1afee2e62148c51c9e47af75295_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_07149f9bdf01e81a6ab6f870a2b87d14bd15e029ef98992670fd6aa6f22cc6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07149f9bdf01e81a6ab6f870a2b87d14bd15e029ef98992670fd6aa6f22cc6b6->enter($__internal_07149f9bdf01e81a6ab6f870a2b87d14bd15e029ef98992670fd6aa6f22cc6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("todo.page_title"), "html", null, true);
        
        $__internal_07149f9bdf01e81a6ab6f870a2b87d14bd15e029ef98992670fd6aa6f22cc6b6->leave($__internal_07149f9bdf01e81a6ab6f870a2b87d14bd15e029ef98992670fd6aa6f22cc6b6_prof);

    }

    // line 7
    public function block_short_description($context, array $blocks = array())
    {
        $__internal_2d5511c57db43ea2e67f3ee2e7e715eebb6f5ee9933e07287b8791a84636e019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5511c57db43ea2e67f3ee2e7e715eebb6f5ee9933e07287b8791a84636e019->enter($__internal_2d5511c57db43ea2e67f3ee2e7e715eebb6f5ee9933e07287b8791a84636e019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "short_description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("todo.page_description"), "html", null, true);
        
        $__internal_2d5511c57db43ea2e67f3ee2e7e715eebb6f5ee9933e07287b8791a84636e019->leave($__internal_2d5511c57db43ea2e67f3ee2e7e715eebb6f5ee9933e07287b8791a84636e019_prof);

    }

    // line 10
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_02c9f564eb548f72b60528f2b0d060bc5b108ddf9c5d9b9f6dfdef599f9c693b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c9f564eb548f72b60528f2b0d060bc5b108ddf9c5d9b9f6dfdef599f9c693b->enter($__internal_02c9f564eb548f72b60528f2b0d060bc5b108ddf9c5d9b9f6dfdef599f9c693b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 11
        echo "    <li>
        <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("breadcrumb.todo"), "html", null, true);
        echo "</span>
    </li>
";
        
        $__internal_02c9f564eb548f72b60528f2b0d060bc5b108ddf9c5d9b9f6dfdef599f9c693b->leave($__internal_02c9f564eb548f72b60528f2b0d060bc5b108ddf9c5d9b9f6dfdef599f9c693b_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_181d4acd7b20b085c8d0990c28656c6dbaece69e08bd4ea1c2c5935cbc0c97e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181d4acd7b20b085c8d0990c28656c6dbaece69e08bd4ea1c2c5935cbc0c97e8->enter($__internal_181d4acd7b20b085c8d0990c28656c6dbaece69e08bd4ea1c2c5935cbc0c97e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <div class=\"row\">

        <div class=\"col-md-12\">
            <div id=\"app\"></div>
            <script type=\"application/javascript\">
            </script>
        </div>
    </div>
";
        
        $__internal_181d4acd7b20b085c8d0990c28656c6dbaece69e08bd4ea1c2c5935cbc0c97e8->leave($__internal_181d4acd7b20b085c8d0990c28656c6dbaece69e08bd4ea1c2c5935cbc0c97e8_prof);

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
