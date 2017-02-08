<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8d0e0ec88993e1777b1385ea6494b23aef8d957798ebf61aaac015db24eb1ae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44f845786748a057303794d8f45d07f52a1ad4128ca5d1709d61ebaacc8daecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f845786748a057303794d8f45d07f52a1ad4128ca5d1709d61ebaacc8daecb->enter($__internal_44f845786748a057303794d8f45d07f52a1ad4128ca5d1709d61ebaacc8daecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f845786748a057303794d8f45d07f52a1ad4128ca5d1709d61ebaacc8daecb->leave($__internal_44f845786748a057303794d8f45d07f52a1ad4128ca5d1709d61ebaacc8daecb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_241505178f91c75aebb0731598f6cb4f6927ac801a98771f9668fcca72ea7db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241505178f91c75aebb0731598f6cb4f6927ac801a98771f9668fcca72ea7db1->enter($__internal_241505178f91c75aebb0731598f6cb4f6927ac801a98771f9668fcca72ea7db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_241505178f91c75aebb0731598f6cb4f6927ac801a98771f9668fcca72ea7db1->leave($__internal_241505178f91c75aebb0731598f6cb4f6927ac801a98771f9668fcca72ea7db1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e5eae6c911fd1910b58beedc287fe2a7cbc05563129ae9516e871871c65d3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5eae6c911fd1910b58beedc287fe2a7cbc05563129ae9516e871871c65d3ca->enter($__internal_0e5eae6c911fd1910b58beedc287fe2a7cbc05563129ae9516e871871c65d3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0e5eae6c911fd1910b58beedc287fe2a7cbc05563129ae9516e871871c65d3ca->leave($__internal_0e5eae6c911fd1910b58beedc287fe2a7cbc05563129ae9516e871871c65d3ca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7be330666e7d17510217b9cd06bc85f823a84f06c2a83ab2c6330eab10f7b172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be330666e7d17510217b9cd06bc85f823a84f06c2a83ab2c6330eab10f7b172->enter($__internal_7be330666e7d17510217b9cd06bc85f823a84f06c2a83ab2c6330eab10f7b172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7be330666e7d17510217b9cd06bc85f823a84f06c2a83ab2c6330eab10f7b172->leave($__internal_7be330666e7d17510217b9cd06bc85f823a84f06c2a83ab2c6330eab10f7b172_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
