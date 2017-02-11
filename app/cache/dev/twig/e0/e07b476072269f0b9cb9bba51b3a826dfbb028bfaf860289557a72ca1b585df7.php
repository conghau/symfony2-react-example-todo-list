<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b761c78b351a76e7948b30c1bf18ba5f947f3f490c40d752a91cf4e4f9917e06 extends Twig_Template
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
        $__internal_166165f44ea5f71742ae99ddb8c09496f29fa2527427b5e343082a2223986d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166165f44ea5f71742ae99ddb8c09496f29fa2527427b5e343082a2223986d56->enter($__internal_166165f44ea5f71742ae99ddb8c09496f29fa2527427b5e343082a2223986d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_166165f44ea5f71742ae99ddb8c09496f29fa2527427b5e343082a2223986d56->leave($__internal_166165f44ea5f71742ae99ddb8c09496f29fa2527427b5e343082a2223986d56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
