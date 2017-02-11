<?php

/* TCHWebBundle:Blocks/Layout:page_footer.html.twig */
class __TwigTemplate_7589169e9bb79e170ecdd8fe7b0d4e07641b66c97722e768eb85eb712c0cf5c4 extends Twig_Template
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
        $__internal_bb3ef4e0e1ee205bfcef00242289506ae6ea35d85926c6e100e3e02b11dab7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3ef4e0e1ee205bfcef00242289506ae6ea35d85926c6e100e3e02b11dab7a7->enter($__internal_bb3ef4e0e1ee205bfcef00242289506ae6ea35d85926c6e100e3e02b11dab7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TCHWebBundle:Blocks/Layout:page_footer.html.twig"));

        // line 1
        echo "<div class=\"page-footer-inner\"> 2016 &copy; iCareBenefits
    <div class=\"scroll-to-top\">
        <i class=\"icon-arrow-up\"></i>
    </div>
</div>";
        
        $__internal_bb3ef4e0e1ee205bfcef00242289506ae6ea35d85926c6e100e3e02b11dab7a7->leave($__internal_bb3ef4e0e1ee205bfcef00242289506ae6ea35d85926c6e100e3e02b11dab7a7_prof);

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
