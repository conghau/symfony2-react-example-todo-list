<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_aa0e94a87b8aa6a328e85573f0327dec7bbc01e76469d47abc45d9297be30983 extends Twig_Template
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
        $__internal_9dac640f1d6217827a6539a5a212d665a556ecf421c46404d0d869b150d1e80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dac640f1d6217827a6539a5a212d665a556ecf421c46404d0d869b150d1e80e->enter($__internal_9dac640f1d6217827a6539a5a212d665a556ecf421c46404d0d869b150d1e80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9dac640f1d6217827a6539a5a212d665a556ecf421c46404d0d869b150d1e80e->leave($__internal_9dac640f1d6217827a6539a5a212d665a556ecf421c46404d0d869b150d1e80e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
