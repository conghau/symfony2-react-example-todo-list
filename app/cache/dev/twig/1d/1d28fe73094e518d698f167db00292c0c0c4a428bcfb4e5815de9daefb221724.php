<?php

/* TCHWebBundle:Blocks/Layout:page_actions.html.twig */
class __TwigTemplate_26681fb05983533813abe5fc97971cc0a345d2f69fd87079e871cbb7f0c5b177 extends Twig_Template
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
        $__internal_f4e81c035506cf7fc963ed1f20f5f13257e6583c55db27d7ca542eeb40d0f53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e81c035506cf7fc963ed1f20f5f13257e6583c55db27d7ca542eeb40d0f53a->enter($__internal_f4e81c035506cf7fc963ed1f20f5f13257e6583c55db27d7ca542eeb40d0f53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Blocks/Layout:page_actions.html.twig"));

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
        
        $__internal_f4e81c035506cf7fc963ed1f20f5f13257e6583c55db27d7ca542eeb40d0f53a->leave($__internal_f4e81c035506cf7fc963ed1f20f5f13257e6583c55db27d7ca542eeb40d0f53a_prof);

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
