<?php

/* TCHWebBundle:Blocks/Layout:page_actions.html.twig */
class __TwigTemplate_b0daef34a9e5b95276e10e210b72e2699672ca5780bc26e4a496f2ea6b259e80 extends Twig_Template
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
        $__internal_a498a1e0ed8a13dfc38eaddf8baaff919b15c4925a5d305a01968d0345aead86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a498a1e0ed8a13dfc38eaddf8baaff919b15c4925a5d305a01968d0345aead86->enter($__internal_a498a1e0ed8a13dfc38eaddf8baaff919b15c4925a5d305a01968d0345aead86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Blocks/Layout:page_actions.html.twig"));

        // line 1
        echo "<div class=\"page-actions\">
    <div class=\"btn-group\">
        <span class=\"page-title caption-subject font-grey-gallery\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "company_name"), "method"), "html", null, true);
        echo "
            </span>
    </div>
</div>";
        
        $__internal_a498a1e0ed8a13dfc38eaddf8baaff919b15c4925a5d305a01968d0345aead86->leave($__internal_a498a1e0ed8a13dfc38eaddf8baaff919b15c4925a5d305a01968d0345aead86_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Blocks/Layout:page_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-actions\">
    <div class=\"btn-group\">
        <span class=\"page-title caption-subject font-grey-gallery\">
        {{ app.session.get('company_name') }}
            </span>
    </div>
</div>", "TCHWebBundle:Blocks/Layout:page_actions.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Blocks/Layout/page_actions.html.twig");
    }
}
