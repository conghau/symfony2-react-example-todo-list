<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5e4b2ff92f8e05ce85e8bc67b1b801ced65200270df91a8b8b42cd0c3cb4db72 extends Twig_Template
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
        $__internal_46acf7a71e236f6868ec3a870c733621ce92ca6f7128d784136e2f7e9d90b42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46acf7a71e236f6868ec3a870c733621ce92ca6f7128d784136e2f7e9d90b42e->enter($__internal_46acf7a71e236f6868ec3a870c733621ce92ca6f7128d784136e2f7e9d90b42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_46acf7a71e236f6868ec3a870c733621ce92ca6f7128d784136e2f7e9d90b42e->leave($__internal_46acf7a71e236f6868ec3a870c733621ce92ca6f7128d784136e2f7e9d90b42e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
