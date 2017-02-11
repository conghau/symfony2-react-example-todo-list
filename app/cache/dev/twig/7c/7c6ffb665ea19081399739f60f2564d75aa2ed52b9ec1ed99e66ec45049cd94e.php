<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ce368ec07a04c58963ed12ba622ebe3b3d93f92a5f54c9bc7c206a760c893807 extends Twig_Template
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
        $__internal_00e5cca3dba37979c5b1868c9d86c096915fb1999b09fc2e560151622b8a5815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e5cca3dba37979c5b1868c9d86c096915fb1999b09fc2e560151622b8a5815->enter($__internal_00e5cca3dba37979c5b1868c9d86c096915fb1999b09fc2e560151622b8a5815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_00e5cca3dba37979c5b1868c9d86c096915fb1999b09fc2e560151622b8a5815->leave($__internal_00e5cca3dba37979c5b1868c9d86c096915fb1999b09fc2e560151622b8a5815_prof);

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
