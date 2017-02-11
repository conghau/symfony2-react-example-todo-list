<?php

/* TCHWebBundle:Blocks/Layout:footer_javascripts.html.twig */
class __TwigTemplate_04be8609fcc166acf2328b7314ce83aca39a3acde2a6ef97d65212c1859e1d99 extends Twig_Template
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
        $__internal_23a0259e34f6c6ed5f69c258c3f4b8d8caf60f1304d0a71c1d3b934f3752e7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a0259e34f6c6ed5f69c258c3f4b8d8caf60f1304d0a71c1d3b934f3752e7b7->enter($__internal_23a0259e34f6c6ed5f69c258c3f4b8d8caf60f1304d0a71c1d3b934f3752e7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Blocks/Layout:footer_javascripts.html.twig"));

        // line 1
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1deff1f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_jquery.min_1.js");
            // line 23
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_bootstrap.min_2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_js.cookie.min_3.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_jquery.slimscroll.min_4.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_jquery.blockui.min_5.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_bootstrap-switch.min_6.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_app_7.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_jquery.validate.min_8.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_additional-methods.min_9.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_select2.full.min_10.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_moment.min_11.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_moment-timezone-with-data.min_12.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_bootstrap-datepicker.min_13.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_layout.min_14.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_demo.min_15.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_15") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_quick-sidebar.min_16.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_16") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_autobahn.min_17.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_17") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_gos_web_socket_client_18.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "1deff1f_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f_18") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_custom_call_reminer_20.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "1deff1f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1deff1f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 25
        echo "
<!--[if lt IE 9]>
";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "961540b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_961540b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_ie9_respond.min_1.js");
            // asset "961540b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_961540b_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_ie9_excanvas.min_2.js");
        } else {
            // asset "961540b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_961540b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/bundles/tchweb/js/main_ie9.js");
        }
        unset($context["asset_url"]);
        // line 32
        echo "<![endif]-->

";
        // line 34
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array()) == "dev")) {
            // line 35
            echo "    <script src=\"http://127.0.0.1:3000/vendor.js\"></script>
    <script src=\"http://127.0.0.1:3000/app.js\"></script>
";
        } else {
            // line 38
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("dist/vendor." . ($context["asset_version"] ?? $this->getContext($context, "asset_version"))) . ".js")), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("dist/app." . ($context["asset_version"] ?? $this->getContext($context, "asset_version"))) . ".js")), "html", null, true);
            echo "\"></script>
";
        }
        
        $__internal_23a0259e34f6c6ed5f69c258c3f4b8d8caf60f1304d0a71c1d3b934f3752e7b7->leave($__internal_23a0259e34f6c6ed5f69c258c3f4b8d8caf60f1304d0a71c1d3b934f3752e7b7_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Blocks/Layout:footer_javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 39,  174 => 38,  169 => 35,  167 => 34,  163 => 32,  152 => 27,  148 => 25,  26 => 23,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% javascripts
'@TCHWebBundle/Resources/public/global/plugins/jquery.min.js'
'@TCHWebBundle/Resources/public/global/plugins/bootstrap/js/bootstrap.min.js'
'@TCHWebBundle/Resources/public/global/plugins/js.cookie.min.js'
'@TCHWebBundle/Resources/public/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'
'@TCHWebBundle/Resources/public/global/plugins/jquery.blockui.min.js'
'@TCHWebBundle/Resources/public/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'
'@TCHWebBundle/Resources/public/global/scripts/app.js'
'@TCHWebBundle/Resources/public/global/plugins/jquery-validation/js/jquery.validate.min.js'
'@TCHWebBundle/Resources/public/global/plugins/jquery-validation/js/additional-methods.min.js'
'@TCHWebBundle/Resources/public/global/plugins/select2/js/select2.full.min.js'
'@TCHWebBundle/Resources/public/global/plugins/moment.min.js'
'@TCHWebBundle/Resources/public/global/plugins/moment-timezone-with-data.min.js'
'@TCHWebBundle/Resources/public/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'
'@TCHWebBundle/Resources/public/layouts/layout2/scripts/layout.min.js'
'@TCHWebBundle/Resources/public/layouts/layout2/scripts/demo.min.js'
'@TCHWebBundle/Resources/public/layouts/global/scripts/quick-sidebar.min.js'
'@TCHWebBundle/Resources/public/global/plugins/gos_websocket/autobahn.min.js'
'@TCHWebBundle/Resources/public/global/plugins/gos_websocket/gos_web_socket_client.js'
'@TCHWebBundle/Resources/public/layouts/global/scripts/quick-sidebar.min.js'
'@TCHWebBundle/Resources/public/pages/scripts/custom_call_reminer.js'
output='bundles/tchweb/js/main.js' %}
<script src=\"{{ asset_url }}\"></script>
{% endjavascripts %}

<!--[if lt IE 9]>
{% javascripts
'@TCHWebBundle/Resources/public/global/plugins/respond.min.js'
'@TCHWebBundle/Resources/public/global/plugins/excanvas.min.js'
output='bundles/tchweb/js/main_ie9.js'%}
{% endjavascripts %}
<![endif]-->

{% if app.environment == 'dev' %}
    <script src=\"http://127.0.0.1:3000/vendor.js\"></script>
    <script src=\"http://127.0.0.1:3000/app.js\"></script>
{% else %}
    <script src=\"{{ asset('dist/vendor.'~ asset_version ~'.js') }}\"></script>
    <script src=\"{{ asset('dist/app.'~ asset_version ~'.js') }}\"></script>
{% endif %}
", "TCHWebBundle:Blocks/Layout:footer_javascripts.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Blocks/Layout/footer_javascripts.html.twig");
    }
}
