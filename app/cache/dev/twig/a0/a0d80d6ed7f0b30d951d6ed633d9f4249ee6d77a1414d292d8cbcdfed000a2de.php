<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3c35dc795ad6e5914005f9581af67cf320cb0692d69b994d86b1defcd92dc6cc extends Twig_Template
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
        $__internal_296b521d37a87d85f803b5055d85c2791b0040a6efc4290bff03e81f6f23e125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296b521d37a87d85f803b5055d85c2791b0040a6efc4290bff03e81f6f23e125->enter($__internal_296b521d37a87d85f803b5055d85c2791b0040a6efc4290bff03e81f6f23e125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_296b521d37a87d85f803b5055d85c2791b0040a6efc4290bff03e81f6f23e125->leave($__internal_296b521d37a87d85f803b5055d85c2791b0040a6efc4290bff03e81f6f23e125_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
