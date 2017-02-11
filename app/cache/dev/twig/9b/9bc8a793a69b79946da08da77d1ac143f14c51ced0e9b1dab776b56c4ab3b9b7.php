<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fa39194cfde639f3ea2d9e1ea6564000fa06432236c396cded9d37a8f8bdacf1 extends Twig_Template
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
        $__internal_0d03c19f9614a5ae37743a04ba7cc9dcef50ffcd03e8d123ddd04effdb57590b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d03c19f9614a5ae37743a04ba7cc9dcef50ffcd03e8d123ddd04effdb57590b->enter($__internal_0d03c19f9614a5ae37743a04ba7cc9dcef50ffcd03e8d123ddd04effdb57590b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0d03c19f9614a5ae37743a04ba7cc9dcef50ffcd03e8d123ddd04effdb57590b->leave($__internal_0d03c19f9614a5ae37743a04ba7cc9dcef50ffcd03e8d123ddd04effdb57590b_prof);

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
