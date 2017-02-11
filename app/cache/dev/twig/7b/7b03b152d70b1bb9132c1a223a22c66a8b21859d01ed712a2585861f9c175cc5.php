<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ae8dbdc8b312ff2da60582721d4577a732cb40826070749e8e9f15518ceab1fd extends Twig_Template
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
        $__internal_cc186d2b4f0fdc143d3228af42c4b5ed269b1ee391f6bd288ade4a2382c7a691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc186d2b4f0fdc143d3228af42c4b5ed269b1ee391f6bd288ade4a2382c7a691->enter($__internal_cc186d2b4f0fdc143d3228af42c4b5ed269b1ee391f6bd288ade4a2382c7a691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cc186d2b4f0fdc143d3228af42c4b5ed269b1ee391f6bd288ade4a2382c7a691->leave($__internal_cc186d2b4f0fdc143d3228af42c4b5ed269b1ee391f6bd288ade4a2382c7a691_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
