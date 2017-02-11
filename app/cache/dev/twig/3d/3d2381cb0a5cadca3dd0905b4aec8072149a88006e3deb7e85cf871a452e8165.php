<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2230072a19e3465a220ea64f7038dda1e937ea85771b849b8c33952164ad4341 extends Twig_Template
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
        $__internal_9ad12784347b20f402c780e2a23f9043e4e36bdfc782823bb8dcd3896396f311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad12784347b20f402c780e2a23f9043e4e36bdfc782823bb8dcd3896396f311->enter($__internal_9ad12784347b20f402c780e2a23f9043e4e36bdfc782823bb8dcd3896396f311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9ad12784347b20f402c780e2a23f9043e4e36bdfc782823bb8dcd3896396f311->leave($__internal_9ad12784347b20f402c780e2a23f9043e4e36bdfc782823bb8dcd3896396f311_prof);

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
