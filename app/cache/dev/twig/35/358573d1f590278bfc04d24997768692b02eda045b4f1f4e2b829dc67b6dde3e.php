<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_962437cc58b9c31156703ec7cd23a20e9e57786bff684ef4ce0ffbe41f90e514 extends Twig_Template
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
        $__internal_95eb827e77e5588cfa17e99f2fe5b41d1c6f9d24027161997d397288dcff38ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95eb827e77e5588cfa17e99f2fe5b41d1c6f9d24027161997d397288dcff38ea->enter($__internal_95eb827e77e5588cfa17e99f2fe5b41d1c6f9d24027161997d397288dcff38ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_95eb827e77e5588cfa17e99f2fe5b41d1c6f9d24027161997d397288dcff38ea->leave($__internal_95eb827e77e5588cfa17e99f2fe5b41d1c6f9d24027161997d397288dcff38ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
