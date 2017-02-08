<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0d8db1395c6abcfa293b42dc268b315680cd3f5d1cfcb891ec49d888c4244c23 extends Twig_Template
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
        $__internal_8253ef666468b32dfc5c3a8647e2d2bd83c2652bfb076b85291a195f56e1d6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8253ef666468b32dfc5c3a8647e2d2bd83c2652bfb076b85291a195f56e1d6ea->enter($__internal_8253ef666468b32dfc5c3a8647e2d2bd83c2652bfb076b85291a195f56e1d6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8253ef666468b32dfc5c3a8647e2d2bd83c2652bfb076b85291a195f56e1d6ea->leave($__internal_8253ef666468b32dfc5c3a8647e2d2bd83c2652bfb076b85291a195f56e1d6ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
