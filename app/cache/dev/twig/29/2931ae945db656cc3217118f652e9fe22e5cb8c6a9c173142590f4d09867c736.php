<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e1b059ec9d691355eaaad5dd8b0651cfeefcc23c6a90989bf403bdf7ae515cd0 extends Twig_Template
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
        $__internal_4f291f4846c062de2f64eefeef2f531bd3e7e9b1a4b7ce1d1430d642dfc9d0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f291f4846c062de2f64eefeef2f531bd3e7e9b1a4b7ce1d1430d642dfc9d0c1->enter($__internal_4f291f4846c062de2f64eefeef2f531bd3e7e9b1a4b7ce1d1430d642dfc9d0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4f291f4846c062de2f64eefeef2f531bd3e7e9b1a4b7ce1d1430d642dfc9d0c1->leave($__internal_4f291f4846c062de2f64eefeef2f531bd3e7e9b1a4b7ce1d1430d642dfc9d0c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
