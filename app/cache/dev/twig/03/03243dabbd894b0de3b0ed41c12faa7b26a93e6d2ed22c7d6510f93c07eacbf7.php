<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_90a12e8136aafa5eecd29575fe3c21a368f92817b48705ead634b9478a7be872 extends Twig_Template
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
        $__internal_ea3940d9b18753813f9b462b8e8e0b7f5f87a501cc4969c383d2de8b2cdfc595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3940d9b18753813f9b462b8e8e0b7f5f87a501cc4969c383d2de8b2cdfc595->enter($__internal_ea3940d9b18753813f9b462b8e8e0b7f5f87a501cc4969c383d2de8b2cdfc595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_ea3940d9b18753813f9b462b8e8e0b7f5f87a501cc4969c383d2de8b2cdfc595->leave($__internal_ea3940d9b18753813f9b462b8e8e0b7f5f87a501cc4969c383d2de8b2cdfc595_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
