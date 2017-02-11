<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3554b12cfc4410611d40260c4335e9c58145537cb45290668017d8e2394bebc0 extends Twig_Template
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
        $__internal_4531088411ec0d1b98663cd708de363dcfdbd1064dfa3d76f8b124611f15882c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4531088411ec0d1b98663cd708de363dcfdbd1064dfa3d76f8b124611f15882c->enter($__internal_4531088411ec0d1b98663cd708de363dcfdbd1064dfa3d76f8b124611f15882c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4531088411ec0d1b98663cd708de363dcfdbd1064dfa3d76f8b124611f15882c->leave($__internal_4531088411ec0d1b98663cd708de363dcfdbd1064dfa3d76f8b124611f15882c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
