<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1e1bf47c13ce7f1c15618a124b203c727aa100dd46e49f5d4d093864a75421cf extends Twig_Template
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
        $__internal_2ea6536ae895f3ba2f8b09d9687d066ca692f20d1ab54b7af6b1eccef6a9af04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea6536ae895f3ba2f8b09d9687d066ca692f20d1ab54b7af6b1eccef6a9af04->enter($__internal_2ea6536ae895f3ba2f8b09d9687d066ca692f20d1ab54b7af6b1eccef6a9af04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2ea6536ae895f3ba2f8b09d9687d066ca692f20d1ab54b7af6b1eccef6a9af04->leave($__internal_2ea6536ae895f3ba2f8b09d9687d066ca692f20d1ab54b7af6b1eccef6a9af04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
