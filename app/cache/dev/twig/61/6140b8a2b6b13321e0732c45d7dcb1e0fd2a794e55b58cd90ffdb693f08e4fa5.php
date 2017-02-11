<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_454bfd2aff1ea7ca7eb60cd8839895833908163cfbb6021befe963f43f021426 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_2bf77e75ab57ea928a2561173bb3fafae4fc2e6780ca8ec6adb074a0d5b7b598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf77e75ab57ea928a2561173bb3fafae4fc2e6780ca8ec6adb074a0d5b7b598->enter($__internal_2bf77e75ab57ea928a2561173bb3fafae4fc2e6780ca8ec6adb074a0d5b7b598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bf77e75ab57ea928a2561173bb3fafae4fc2e6780ca8ec6adb074a0d5b7b598->leave($__internal_2bf77e75ab57ea928a2561173bb3fafae4fc2e6780ca8ec6adb074a0d5b7b598_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d48ba7c50f1d90b1483044b32762fcf085e11cac53e2ebcc625f402c84ed7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d48ba7c50f1d90b1483044b32762fcf085e11cac53e2ebcc625f402c84ed7de->enter($__internal_4d48ba7c50f1d90b1483044b32762fcf085e11cac53e2ebcc625f402c84ed7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d48ba7c50f1d90b1483044b32762fcf085e11cac53e2ebcc625f402c84ed7de->leave($__internal_4d48ba7c50f1d90b1483044b32762fcf085e11cac53e2ebcc625f402c84ed7de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca671099ec1387bce4fcbdbfebfdf47791314d9ae802f4777e9eb45b6a312a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca671099ec1387bce4fcbdbfebfdf47791314d9ae802f4777e9eb45b6a312a24->enter($__internal_ca671099ec1387bce4fcbdbfebfdf47791314d9ae802f4777e9eb45b6a312a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca671099ec1387bce4fcbdbfebfdf47791314d9ae802f4777e9eb45b6a312a24->leave($__internal_ca671099ec1387bce4fcbdbfebfdf47791314d9ae802f4777e9eb45b6a312a24_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9eeceffe11f7c59fb1e85d2c7a66308987d6b2d0878d46e32ec98eb003653cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9eeceffe11f7c59fb1e85d2c7a66308987d6b2d0878d46e32ec98eb003653cf->enter($__internal_f9eeceffe11f7c59fb1e85d2c7a66308987d6b2d0878d46e32ec98eb003653cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f9eeceffe11f7c59fb1e85d2c7a66308987d6b2d0878d46e32ec98eb003653cf->leave($__internal_f9eeceffe11f7c59fb1e85d2c7a66308987d6b2d0878d46e32ec98eb003653cf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
