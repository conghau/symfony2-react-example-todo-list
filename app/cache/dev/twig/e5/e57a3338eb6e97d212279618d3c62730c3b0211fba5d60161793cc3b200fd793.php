<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_79f17b0dc8531855a3c6582b259c5f284ac9d4b2ba093ccfd2999d138b25d9d3 extends Twig_Template
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
        $__internal_cdca9437b1b8a7057dd38fdd92d0f89a3595dc440ad9365ed99e0f8a50b15f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdca9437b1b8a7057dd38fdd92d0f89a3595dc440ad9365ed99e0f8a50b15f86->enter($__internal_cdca9437b1b8a7057dd38fdd92d0f89a3595dc440ad9365ed99e0f8a50b15f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_cdca9437b1b8a7057dd38fdd92d0f89a3595dc440ad9365ed99e0f8a50b15f86->leave($__internal_cdca9437b1b8a7057dd38fdd92d0f89a3595dc440ad9365ed99e0f8a50b15f86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
