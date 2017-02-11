<?php

/* TCHWebBundle:Blocks/Partial:call_reminder.html.twig */
class __TwigTemplate_f008fc95f80afc362f90409bd7089fba6da1e6398b54d9e75682adf3ef9a1b9c extends Twig_Template
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
        $__internal_4e4f6a206180daab71e31750a270eb069664a292363dd8abc5caad53202049b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4f6a206180daab71e31750a270eb069664a292363dd8abc5caad53202049b7->enter($__internal_4e4f6a206180daab71e31750a270eb069664a292363dd8abc5caad53202049b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Blocks/Partial:call_reminder.html.twig"));

        // line 1
        echo "<li id=\"notification-call-reminder\" class=\"dropdown dropdown-extended dropdown-notification\"
    id=\"header_notification_bar\">
    <a id=\"notification-container\" href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
       data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\">
        <i class=\"icon-call-out\"></i>
        <span id=\"notification-call-reminder-badge\"
              class=\"badge badge-default\">";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["callReminder"] ?? null), "total", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["callReminder"] ?? null), "total", array()), 0)) : (0)), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-default call-reminder\">
        <li class=\"external\">
            <h3>
                <span class=\"bold\">Call Remind</span></h3>
        </li>
        ";
        // line 14
        if ((((($this->getAttribute(($context["callReminder"] ?? null), "code", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["callReminder"] ?? null), "code", array(), "array"), 200)) : (200)) == "500") || twig_test_empty((($this->getAttribute(($context["callReminder"] ?? null), "items", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["callReminder"] ?? null), "items", array(), "array"), array())) : (array()))))) {
            // line 15
            echo "            <li class=\"remind-item\">No have call remind</li>
        ";
        } else {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["callReminder"] ?? $this->getContext($context, "callReminder")), "items", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["reminder"]) {
                // line 18
                echo "                ";
                // line 19
                echo "                    ";
                // line 20
                echo "                        ";
                // line 21
                echo "                            ";
                // line 22
                echo "                            ";
                // line 23
                echo "                        ";
                // line 24
                echo "                        ";
                // line 25
                echo "
                            ";
                // line 27
                echo "                            ";
                // line 28
                echo "                            ";
                // line 29
                echo "                            ";
                // line 30
                echo "                            ";
                // line 31
                echo "                        ";
                // line 32
                echo "                        ";
                // line 33
                echo "                    ";
                // line 34
                echo "                ";
                // line 35
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reminder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        ";
        }
        // line 37
        echo "    </ul>
</li>
<style>
</style>";
        
        $__internal_4e4f6a206180daab71e31750a270eb069664a292363dd8abc5caad53202049b7->leave($__internal_4e4f6a206180daab71e31750a270eb069664a292363dd8abc5caad53202049b7_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Blocks/Partial:call_reminder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 37,  90 => 36,  84 => 35,  82 => 34,  80 => 33,  78 => 32,  76 => 31,  74 => 30,  72 => 29,  70 => 28,  68 => 27,  65 => 25,  63 => 24,  61 => 23,  59 => 22,  57 => 21,  55 => 20,  53 => 19,  51 => 18,  46 => 17,  42 => 15,  40 => 14,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li id=\"notification-call-reminder\" class=\"dropdown dropdown-extended dropdown-notification\"
    id=\"header_notification_bar\">
    <a id=\"notification-container\" href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
       data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"true\">
        <i class=\"icon-call-out\"></i>
        <span id=\"notification-call-reminder-badge\"
              class=\"badge badge-default\">{{ callReminder.total|default(0) }}</span>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-default call-reminder\">
        <li class=\"external\">
            <h3>
                <span class=\"bold\">Call Remind</span></h3>
        </li>
        {% if callReminder['code']|default(200) == '500' or callReminder['items']|default([]) is empty %}
            <li class=\"remind-item\">No have call remind</li>
        {% else %}
            {% for reminder in callReminder['items'] %}
                {#<li class=\"remind-item\">#}
                    {#<div class=\"cr-item\">#}
                        {#<div class=\"cr-left\">#}
                            {#<h3>{{ reminder.reminder_time|localizeddate('none', 'H:i') }}</h3>#}
                            {#<h5>{{ reminder.reminder_time|localizeddate('Y-m-d') }}</h5>#}
                        {#</div>#}
                        {#<div class=\"cr-right\">#}

                            {#<h4>{{ reminder.customer_name }}</h4>#}
                            {#<h4>{{ reminder.customer_phone }}</h4>#}
                            {#<span>Customer: </span>#}
                            {#<span>Phone: {{ reminder.customer_phone }}</span>#}
                            {#<a href=\"#\" onclick=\"return markReadReminder({{ reminder.id }})\">Mark Read</a>#}
                        {#</div>#}
                        {#<div style=\"clear: both\"></div>#}
                    {#</div>#}
                {#</li>#}
            {% endfor %}
        {% endif %}
    </ul>
</li>
<style>
</style>", "TCHWebBundle:Blocks/Partial:call_reminder.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Blocks/Partial/call_reminder.html.twig");
    }
}
