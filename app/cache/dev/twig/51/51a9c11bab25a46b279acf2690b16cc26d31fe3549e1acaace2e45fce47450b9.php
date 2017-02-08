<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3a5048bcd3fbd31001deb474c5fa7520b74046b70c2420e03d898a4c3a07c99e extends Twig_Template
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
        $__internal_54585aea98e51a34dfb6d0ec20e60e330a7d80432f9d927b5cb8ff2baf366d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54585aea98e51a34dfb6d0ec20e60e330a7d80432f9d927b5cb8ff2baf366d23->enter($__internal_54585aea98e51a34dfb6d0ec20e60e330a7d80432f9d927b5cb8ff2baf366d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_54585aea98e51a34dfb6d0ec20e60e330a7d80432f9d927b5cb8ff2baf366d23->leave($__internal_54585aea98e51a34dfb6d0ec20e60e330a7d80432f9d927b5cb8ff2baf366d23_prof);

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
