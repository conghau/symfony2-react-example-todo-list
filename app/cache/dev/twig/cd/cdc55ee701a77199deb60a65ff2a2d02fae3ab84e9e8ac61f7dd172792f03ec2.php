<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_23f92b986b466265f031bee97b40ca613a866855cc824122bc56c231aa2ce975 extends Twig_Template
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
        $__internal_552aa696ebf6c5b6629e523a365c2dc8283a27362dbeac151e8fb0d6400eb4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552aa696ebf6c5b6629e523a365c2dc8283a27362dbeac151e8fb0d6400eb4b0->enter($__internal_552aa696ebf6c5b6629e523a365c2dc8283a27362dbeac151e8fb0d6400eb4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_552aa696ebf6c5b6629e523a365c2dc8283a27362dbeac151e8fb0d6400eb4b0->leave($__internal_552aa696ebf6c5b6629e523a365c2dc8283a27362dbeac151e8fb0d6400eb4b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42b4da4089b8cc7895f687186559273d3cd94af6ed6eba708919a0c03beff335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b4da4089b8cc7895f687186559273d3cd94af6ed6eba708919a0c03beff335->enter($__internal_42b4da4089b8cc7895f687186559273d3cd94af6ed6eba708919a0c03beff335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_42b4da4089b8cc7895f687186559273d3cd94af6ed6eba708919a0c03beff335->leave($__internal_42b4da4089b8cc7895f687186559273d3cd94af6ed6eba708919a0c03beff335_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc70d9a9f914ad6fedb2725fac3d942a0324325da3fb8a04a257e49b9ee53559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc70d9a9f914ad6fedb2725fac3d942a0324325da3fb8a04a257e49b9ee53559->enter($__internal_dc70d9a9f914ad6fedb2725fac3d942a0324325da3fb8a04a257e49b9ee53559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dc70d9a9f914ad6fedb2725fac3d942a0324325da3fb8a04a257e49b9ee53559->leave($__internal_dc70d9a9f914ad6fedb2725fac3d942a0324325da3fb8a04a257e49b9ee53559_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d25f8d97a0e0c6dba5745e1b698d851db654c1d8179f0a0fbd771f7fc9c9d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d25f8d97a0e0c6dba5745e1b698d851db654c1d8179f0a0fbd771f7fc9c9d0d->enter($__internal_4d25f8d97a0e0c6dba5745e1b698d851db654c1d8179f0a0fbd771f7fc9c9d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4d25f8d97a0e0c6dba5745e1b698d851db654c1d8179f0a0fbd771f7fc9c9d0d->leave($__internal_4d25f8d97a0e0c6dba5745e1b698d851db654c1d8179f0a0fbd771f7fc9c9d0d_prof);

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
