<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_26c05bce58907fb5cb2870e520693b3b406f3a51b01f2429481f747cb6355fa3 extends Twig_Template
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
        $__internal_fb24e97c56e785e7021003357c3b203e0f2dc3afc0f63eb48c3ee6b02e96432b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb24e97c56e785e7021003357c3b203e0f2dc3afc0f63eb48c3ee6b02e96432b->enter($__internal_fb24e97c56e785e7021003357c3b203e0f2dc3afc0f63eb48c3ee6b02e96432b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_fb24e97c56e785e7021003357c3b203e0f2dc3afc0f63eb48c3ee6b02e96432b->leave($__internal_fb24e97c56e785e7021003357c3b203e0f2dc3afc0f63eb48c3ee6b02e96432b_prof);

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
