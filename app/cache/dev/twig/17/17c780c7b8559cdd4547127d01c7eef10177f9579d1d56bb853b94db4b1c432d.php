<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8084ffe70ba7230e2d8fe4d7dd68a9710bd79eb626c49c12162970ff7df97832 extends Twig_Template
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
        $__internal_b2d0e2695c55350c11dc94c8ba01d101e67529b538f040228984a3dce27d0e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d0e2695c55350c11dc94c8ba01d101e67529b538f040228984a3dce27d0e05->enter($__internal_b2d0e2695c55350c11dc94c8ba01d101e67529b538f040228984a3dce27d0e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b2d0e2695c55350c11dc94c8ba01d101e67529b538f040228984a3dce27d0e05->leave($__internal_b2d0e2695c55350c11dc94c8ba01d101e67529b538f040228984a3dce27d0e05_prof);

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
