<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_53139fea8fbd690d26f20eeb26428e4cd43ae1d6c876747cb059d94966655f5f extends Twig_Template
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
        $__internal_14ad50aaca5b94cc04234baa136f9ce825372639482bf327f5b785de10d3e08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ad50aaca5b94cc04234baa136f9ce825372639482bf327f5b785de10d3e08d->enter($__internal_14ad50aaca5b94cc04234baa136f9ce825372639482bf327f5b785de10d3e08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_14ad50aaca5b94cc04234baa136f9ce825372639482bf327f5b785de10d3e08d->leave($__internal_14ad50aaca5b94cc04234baa136f9ce825372639482bf327f5b785de10d3e08d_prof);

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
