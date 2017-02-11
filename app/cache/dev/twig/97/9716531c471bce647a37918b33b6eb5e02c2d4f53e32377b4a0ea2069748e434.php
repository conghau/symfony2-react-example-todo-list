<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7ab74c63348d0de572640905784415f2529a7ac4bc12bc51a3b8112ea0531599 extends Twig_Template
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
        $__internal_064cd4555cca0ff5be5eb2f0323e52eafb2ca0873bab413aa8be822f9485d7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064cd4555cca0ff5be5eb2f0323e52eafb2ca0873bab413aa8be822f9485d7a9->enter($__internal_064cd4555cca0ff5be5eb2f0323e52eafb2ca0873bab413aa8be822f9485d7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_064cd4555cca0ff5be5eb2f0323e52eafb2ca0873bab413aa8be822f9485d7a9->leave($__internal_064cd4555cca0ff5be5eb2f0323e52eafb2ca0873bab413aa8be822f9485d7a9_prof);

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
