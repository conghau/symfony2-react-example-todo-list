<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_75606badf13b591fee9faffa965ffa26a53ada2bc481029b82b0da4db042e3aa extends Twig_Template
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
        $__internal_5e35de40e995795ceb8eef86fab2c713c70ea80492d4fafd9fa9562aeb87fd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e35de40e995795ceb8eef86fab2c713c70ea80492d4fafd9fa9562aeb87fd8b->enter($__internal_5e35de40e995795ceb8eef86fab2c713c70ea80492d4fafd9fa9562aeb87fd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5e35de40e995795ceb8eef86fab2c713c70ea80492d4fafd9fa9562aeb87fd8b->leave($__internal_5e35de40e995795ceb8eef86fab2c713c70ea80492d4fafd9fa9562aeb87fd8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
