<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8b1bd8a71a600827c58dcf86720d5352b1854f311302b6c39d533c3c6764849d extends Twig_Template
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
        $__internal_d544602027fd9f13fe06373c3c17ba62ac660ecd64cd3745f61777f238424b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d544602027fd9f13fe06373c3c17ba62ac660ecd64cd3745f61777f238424b25->enter($__internal_d544602027fd9f13fe06373c3c17ba62ac660ecd64cd3745f61777f238424b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d544602027fd9f13fe06373c3c17ba62ac660ecd64cd3745f61777f238424b25->leave($__internal_d544602027fd9f13fe06373c3c17ba62ac660ecd64cd3745f61777f238424b25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b43516e3ba3f3d666828cbbfe4c20e9ba7ab1b80f1fe0c6e4643ae7807cfa69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43516e3ba3f3d666828cbbfe4c20e9ba7ab1b80f1fe0c6e4643ae7807cfa69d->enter($__internal_b43516e3ba3f3d666828cbbfe4c20e9ba7ab1b80f1fe0c6e4643ae7807cfa69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b43516e3ba3f3d666828cbbfe4c20e9ba7ab1b80f1fe0c6e4643ae7807cfa69d->leave($__internal_b43516e3ba3f3d666828cbbfe4c20e9ba7ab1b80f1fe0c6e4643ae7807cfa69d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec6f34c1f0cd5704c9ff0810521dccebf8770ce9fa7f12e036d7dd162cf9f9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6f34c1f0cd5704c9ff0810521dccebf8770ce9fa7f12e036d7dd162cf9f9eb->enter($__internal_ec6f34c1f0cd5704c9ff0810521dccebf8770ce9fa7f12e036d7dd162cf9f9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec6f34c1f0cd5704c9ff0810521dccebf8770ce9fa7f12e036d7dd162cf9f9eb->leave($__internal_ec6f34c1f0cd5704c9ff0810521dccebf8770ce9fa7f12e036d7dd162cf9f9eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbdc784c823c591a933bfd94288943e69ec3a0ed4dfac075fa84b1324e2dbbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdc784c823c591a933bfd94288943e69ec3a0ed4dfac075fa84b1324e2dbbec->enter($__internal_cbdc784c823c591a933bfd94288943e69ec3a0ed4dfac075fa84b1324e2dbbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cbdc784c823c591a933bfd94288943e69ec3a0ed4dfac075fa84b1324e2dbbec->leave($__internal_cbdc784c823c591a933bfd94288943e69ec3a0ed4dfac075fa84b1324e2dbbec_prof);

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
