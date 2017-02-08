<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3191011032eec4393386d178a2136d7bea042f2e2ed5d90a988e41130c76fb80 extends Twig_Template
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
        $__internal_977176c7b9e6954fb3c72c0fb001dfc5abdf57cb8a7b25ce99073284fdd70c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977176c7b9e6954fb3c72c0fb001dfc5abdf57cb8a7b25ce99073284fdd70c72->enter($__internal_977176c7b9e6954fb3c72c0fb001dfc5abdf57cb8a7b25ce99073284fdd70c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_977176c7b9e6954fb3c72c0fb001dfc5abdf57cb8a7b25ce99073284fdd70c72->leave($__internal_977176c7b9e6954fb3c72c0fb001dfc5abdf57cb8a7b25ce99073284fdd70c72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
