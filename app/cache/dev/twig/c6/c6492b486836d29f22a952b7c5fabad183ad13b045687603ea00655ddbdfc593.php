<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4c01428631e890456e83a90285add7425962877e024b28ad2fe2ee060b7196fc extends Twig_Template
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
        $__internal_79bd7e9407dcca6f5cbf7b4559cfdf37ab5f090c33b24d2ad46055adeda5f14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bd7e9407dcca6f5cbf7b4559cfdf37ab5f090c33b24d2ad46055adeda5f14c->enter($__internal_79bd7e9407dcca6f5cbf7b4559cfdf37ab5f090c33b24d2ad46055adeda5f14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_79bd7e9407dcca6f5cbf7b4559cfdf37ab5f090c33b24d2ad46055adeda5f14c->leave($__internal_79bd7e9407dcca6f5cbf7b4559cfdf37ab5f090c33b24d2ad46055adeda5f14c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
