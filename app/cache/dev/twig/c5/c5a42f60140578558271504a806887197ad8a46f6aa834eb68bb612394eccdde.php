<?php

/* TCHWebBundle:Blocks/Layout:page_footer.html.twig */
class __TwigTemplate_82dd1ec69080dd32555f0ed70d8bfe1f826ff2c2b069fe15f08b005e268bb70c extends Twig_Template
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
        $__internal_a9167e39a806161c1a978d8068013a0fa50e4698afd38c0a35df6ab60b16616d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9167e39a806161c1a978d8068013a0fa50e4698afd38c0a35df6ab60b16616d->enter($__internal_a9167e39a806161c1a978d8068013a0fa50e4698afd38c0a35df6ab60b16616d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Blocks/Layout:page_footer.html.twig"));

        // line 1
        echo "<div class=\"page-footer-inner\"> 2016 &copy; iCareBenefits
    <div class=\"scroll-to-top\">
        <i class=\"icon-arrow-up\"></i>
    </div>
</div>";
        
        $__internal_a9167e39a806161c1a978d8068013a0fa50e4698afd38c0a35df6ab60b16616d->leave($__internal_a9167e39a806161c1a978d8068013a0fa50e4698afd38c0a35df6ab60b16616d_prof);

    }

    public function getTemplateName()
    {
        return "TCHWebBundle:Blocks/Layout:page_footer.html.twig";
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
        return new Twig_Source("<div class=\"page-footer-inner\"> 2016 &copy; iCareBenefits
    <div class=\"scroll-to-top\">
        <i class=\"icon-arrow-up\"></i>
    </div>
</div>", "TCHWebBundle:Blocks/Layout:page_footer.html.twig", "/var/www/html/symfony2-react-example-todo-list/src/TCH/WebBundle/Resources/views/Blocks/Layout/page_footer.html.twig");
    }
}
