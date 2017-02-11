<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c9472d8d7cb4e752e2fd4ad72a5f0a29a84e4d466d5728bf58d636e08da6f55a extends Twig_Template
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
        $__internal_ab1bbc97fb38eb377fea92e24fa72087170bac8bbbc0e81028923ca94b7bc64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1bbc97fb38eb377fea92e24fa72087170bac8bbbc0e81028923ca94b7bc64f->enter($__internal_ab1bbc97fb38eb377fea92e24fa72087170bac8bbbc0e81028923ca94b7bc64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ab1bbc97fb38eb377fea92e24fa72087170bac8bbbc0e81028923ca94b7bc64f->leave($__internal_ab1bbc97fb38eb377fea92e24fa72087170bac8bbbc0e81028923ca94b7bc64f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
