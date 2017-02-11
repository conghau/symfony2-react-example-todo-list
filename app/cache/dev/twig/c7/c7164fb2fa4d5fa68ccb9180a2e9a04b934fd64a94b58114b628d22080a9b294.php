<?php

/* TCHWebBundle:Blocks/Layout:siderbar.html.twig */
class __TwigTemplate_0cacbf44f2e1a56d2d35119c75264b925c45ffa6efeeef3002e2e5b3519eb7ae extends Twig_Template
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
        $__internal_d615673111521a662d884998695baa2be208c98120e3a0dc0137cdf9bf2d3411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d615673111521a662d884998695baa2be208c98120e3a0dc0137cdf9bf2d3411->enter($__internal_d615673111521a662d884998695baa2be208c98120e3a0dc0137cdf9bf2d3411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Blocks/Layout:siderbar.html.twig"));

        // line 1
        $context["currentRoute"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 2
        echo "
<div class=\"page-sidebar navbar-collapse collapse\">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class=\"page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu \" data-keep-expanded=\"false\"
        data-auto-scroll=\"true\" data-slide-speed=\"200\">


        <li class=\"nav-item start ";
        // line 9
        if ((($context["currentRoute"] ?? $this->getContext($context, "currentRoute")) == "tch_web_todo")) {
            echo "active";
        }
        echo "\">
            <a href=\"#\" class=\"nav-link nav-toggle\">
                <i class=\"fa fa-dashboard\"></i>
                <span class=\"title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("left_sidebar.todo"), "html", null, true);
        echo "</span>
                <span class=\"arrow\"></span>
            </a>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>";
        
        $__internal_d615673111521a662d884998695baa2be208c98120e3a0dc0137cdf9bf2d3411->leave($__internal_d615673111521a662d884998695baa2be208c98120e3a0dc0137cdf9bf2d3411_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Blocks/Layout:siderbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  33 => 9,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set currentRoute = app.request.attributes.get('_route') %}

<div class=\"page-sidebar navbar-collapse collapse\">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class=\"page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu \" data-keep-expanded=\"false\"
        data-auto-scroll=\"true\" data-slide-speed=\"200\">


        <li class=\"nav-item start {% if currentRoute == 'tch_web_todo' %}active{% endif %}\">
            <a href=\"#\" class=\"nav-link nav-toggle\">
                <i class=\"fa fa-dashboard\"></i>
                <span class=\"title\">{{ 'left_sidebar.todo'|trans }}</span>
                <span class=\"arrow\"></span>
            </a>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>", "TCHWebBundle:Blocks/Layout:siderbar.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Blocks/Layout/siderbar.html.twig");
    }
}
