<?php

/* TCHWebBundle:Blocks/Layout:head_stylesheets.html.twig */
class __TwigTemplate_d538371a88bf3bd43444a8366fd815e5eb21866b3cbdd89ffc639c32b19939be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a1fc4581a1d9856a80954b3fefb2afe8d2c83f130b40e250e78a448206df9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1fc4581a1d9856a80954b3fefb2afe8d2c83f130b40e250e78a448206df9b2->enter($__internal_4a1fc4581a1d9856a80954b3fefb2afe8d2c83f130b40e250e78a448206df9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Blocks/Layout:head_stylesheets.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_4a1fc4581a1d9856a80954b3fefb2afe8d2c83f130b40e250e78a448206df9b2->leave($__internal_4a1fc4581a1d9856a80954b3fefb2afe8d2c83f130b40e250e78a448206df9b2_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b84b1bac93c4e0a6f992638a192923ece1335c16501a753c18a8b83f46908c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84b1bac93c4e0a6f992638a192923ece1335c16501a753c18a8b83f46908c81->enter($__internal_b84b1bac93c4e0a6f992638a192923ece1335c16501a753c18a8b83f46908c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"
          rel=\"stylesheet\">
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a863daa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_font-awesome.min_1.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_simple-line-icons.min_2.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_bootstrap.min_3.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_bootstrap-switch.min_4.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_bootstrap-datepicker3.min_5.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_build_6.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_select2.min_7.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_select2-bootstrap.min_8.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_components-md.min_9.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_plugins-md.min_10.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_layout.min_11.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_blue.min_12.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_custom_13.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "a863daa_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile_app_14.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "a863daa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a863daa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/css/main_compile.css");
            // line 22
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "    ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array()) == "prod")) {
            // line 26
            echo "    ";
        }
        // line 27
        echo "
";
        
        $__internal_b84b1bac93c4e0a6f992638a192923ece1335c16501a753c18a8b83f46908c81->leave($__internal_b84b1bac93c4e0a6f992638a192923ece1335c16501a753c18a8b83f46908c81_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Blocks/Layout:head_stylesheets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  187 => 27,  184 => 26,  181 => 25,  175 => 23,  172 => 22,  165 => 23,  162 => 22,  156 => 23,  153 => 22,  147 => 23,  144 => 22,  138 => 23,  135 => 22,  129 => 23,  126 => 22,  120 => 23,  117 => 22,  111 => 23,  108 => 22,  102 => 23,  99 => 22,  93 => 23,  90 => 22,  84 => 23,  81 => 22,  75 => 23,  72 => 22,  66 => 23,  63 => 22,  57 => 23,  54 => 22,  48 => 23,  45 => 22,  41 => 6,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"
          rel=\"stylesheet\">
    {% stylesheets
    'bundles/tchweb/global/plugins/font-awesome/css/font-awesome.min.css'
    'bundles/tchweb/global/plugins/simple-line-icons/simple-line-icons.min.css'
    'bundles/tchweb/global/plugins/bootstrap/css/bootstrap.min.css'
    'bundles/tchweb/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'
    'bundles/tchweb/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'
    'bundles/tchweb/global/plugins/awesome-checkbox/build.css'
    'bundles/tchweb/global/plugins/select2/css/select2.min.css'
    'bundles/tchweb/global/plugins/select2/css/select2-bootstrap.min.css'
    'bundles/tchweb/global/css/components-md.min.css'
    'bundles/tchweb/global/css/plugins-md.min.css'
    'bundles/tchweb/layouts/layout2/css/layout.min.css'
    'bundles/tchweb/layouts/layout2/css/themes/blue.min.css'
    'bundles/tchweb/layouts/layout2/css/custom.css'
    'dist/app.css'
    output='bundles/tchweb/css/main_compile.css' filter='cssrewrite' %}

    <link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>
    {% endstylesheets %}
    {% if app.environment == 'prod' %}
    {% endif %}

{% endblock %}", "TCHWebBundle:Blocks/Layout:head_stylesheets.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Blocks/Layout/head_stylesheets.html.twig");
    }
}
