<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ee933db32fdf72cac3510c5d1180ee9112cd932ab1d03164702428156b45017e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_a8a01b9a6834c76242f074e4e667beb9ca9f9d3e8a6f3b03b40b91463f4ac667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a01b9a6834c76242f074e4e667beb9ca9f9d3e8a6f3b03b40b91463f4ac667->enter($__internal_a8a01b9a6834c76242f074e4e667beb9ca9f9d3e8a6f3b03b40b91463f4ac667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8a01b9a6834c76242f074e4e667beb9ca9f9d3e8a6f3b03b40b91463f4ac667->leave($__internal_a8a01b9a6834c76242f074e4e667beb9ca9f9d3e8a6f3b03b40b91463f4ac667_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_466653e06d80245838165ac41bb320fa77a899206a74a2be52f5aac90dd4c016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466653e06d80245838165ac41bb320fa77a899206a74a2be52f5aac90dd4c016->enter($__internal_466653e06d80245838165ac41bb320fa77a899206a74a2be52f5aac90dd4c016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_466653e06d80245838165ac41bb320fa77a899206a74a2be52f5aac90dd4c016->leave($__internal_466653e06d80245838165ac41bb320fa77a899206a74a2be52f5aac90dd4c016_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b63934a6d506fd85c3e4a44c5286e4e1abd75fd5c466f484ff67fd36f25c2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b63934a6d506fd85c3e4a44c5286e4e1abd75fd5c466f484ff67fd36f25c2f6->enter($__internal_2b63934a6d506fd85c3e4a44c5286e4e1abd75fd5c466f484ff67fd36f25c2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b63934a6d506fd85c3e4a44c5286e4e1abd75fd5c466f484ff67fd36f25c2f6->leave($__internal_2b63934a6d506fd85c3e4a44c5286e4e1abd75fd5c466f484ff67fd36f25c2f6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_542a919c887a96f6a18b3db3c67001b51eea0af79aec3ab12591db2405fceab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542a919c887a96f6a18b3db3c67001b51eea0af79aec3ab12591db2405fceab1->enter($__internal_542a919c887a96f6a18b3db3c67001b51eea0af79aec3ab12591db2405fceab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_542a919c887a96f6a18b3db3c67001b51eea0af79aec3ab12591db2405fceab1->leave($__internal_542a919c887a96f6a18b3db3c67001b51eea0af79aec3ab12591db2405fceab1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
