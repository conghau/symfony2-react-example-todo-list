<?php

/* TCHWebBundle:Blocks/Layout:impersonate_notification.html.twig */
class __TwigTemplate_f8d7b70aa7eaa1d3fc4a7c0ecd0657f02f9bc38bb87cbd3b0a5cc1c93e20a1c7 extends Twig_Template
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
        $__internal_b9050f22cd33969d4853a1dfc9876e11c09d9874647c25c9df97979c9d5762a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9050f22cd33969d4853a1dfc9876e11c09d9874647c25c9df97979c9d5762a6->enter($__internal_b9050f22cd33969d4853a1dfc9876e11c09d9874647c25c9df97979c9d5762a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Blocks/Layout:impersonate_notification.html.twig"));

        // line 1
        if ((($context["isImpersonated"] ?? $this->getContext($context, "isImpersonated")) == true)) {
            // line 2
            echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"note note-warning\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("notification.impersonate_status"), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "FirstName", array()), "html", null, true);
            echo ".</b>
                <a href=\"";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("i_care_web_dashboard", array("_switch_user" => "_exit"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("notification.back_to_your_account"), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_b9050f22cd33969d4853a1dfc9876e11c09d9874647c25c9df97979c9d5762a6->leave($__internal_b9050f22cd33969d4853a1dfc9876e11c09d9874647c25c9df97979c9d5762a6_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Blocks/Layout:impersonate_notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if isImpersonated == true %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"note note-warning\">
                {{ 'notification.impersonate_status'|trans }} <b>{{ user.FirstName }}.</b>
                <a href=\"{{ path('i_care_web_dashboard', {\"_switch_user\" : \"_exit\"}) }}\">{{ 'notification.back_to_your_account'|trans }}</a>
            </div>
        </div>
    </div>
{% endif %}
", "TCHWebBundle:Blocks/Layout:impersonate_notification.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Blocks/Layout/impersonate_notification.html.twig");
    }
}
