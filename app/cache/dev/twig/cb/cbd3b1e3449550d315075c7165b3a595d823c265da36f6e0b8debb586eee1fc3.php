<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7cd164371e0154478612cfca916c79b6705d2ba4be14029610bef905abea4e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f31eb5887221ab26e4ff04df0dc10f3780eafb716ed95d77b6075d38f18eff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f31eb5887221ab26e4ff04df0dc10f3780eafb716ed95d77b6075d38f18eff0->enter($__internal_8f31eb5887221ab26e4ff04df0dc10f3780eafb716ed95d77b6075d38f18eff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f31eb5887221ab26e4ff04df0dc10f3780eafb716ed95d77b6075d38f18eff0->leave($__internal_8f31eb5887221ab26e4ff04df0dc10f3780eafb716ed95d77b6075d38f18eff0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e74ba5c36a88c0e7e923ffd5fd59dada9ca2314395aad2a6a1900bfd033b5b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74ba5c36a88c0e7e923ffd5fd59dada9ca2314395aad2a6a1900bfd033b5b0d->enter($__internal_e74ba5c36a88c0e7e923ffd5fd59dada9ca2314395aad2a6a1900bfd033b5b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e74ba5c36a88c0e7e923ffd5fd59dada9ca2314395aad2a6a1900bfd033b5b0d->leave($__internal_e74ba5c36a88c0e7e923ffd5fd59dada9ca2314395aad2a6a1900bfd033b5b0d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_655db0698214a015abbc30c78a818620788e7d0465bd3e3ef792b16c1f86c828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655db0698214a015abbc30c78a818620788e7d0465bd3e3ef792b16c1f86c828->enter($__internal_655db0698214a015abbc30c78a818620788e7d0465bd3e3ef792b16c1f86c828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_655db0698214a015abbc30c78a818620788e7d0465bd3e3ef792b16c1f86c828->leave($__internal_655db0698214a015abbc30c78a818620788e7d0465bd3e3ef792b16c1f86c828_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e23496c922434086d1b3c8a1d696fec8856a8989eb10228874fb57c58f3442e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e23496c922434086d1b3c8a1d696fec8856a8989eb10228874fb57c58f3442e->enter($__internal_9e23496c922434086d1b3c8a1d696fec8856a8989eb10228874fb57c58f3442e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e23496c922434086d1b3c8a1d696fec8856a8989eb10228874fb57c58f3442e->leave($__internal_9e23496c922434086d1b3c8a1d696fec8856a8989eb10228874fb57c58f3442e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
