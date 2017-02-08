<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3c0913ae06d4e859317a74a20b2e693cfc4dbf591f3a40482c0548e0ed2db01d extends Twig_Template
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
        $__internal_e62aebdcb3fc91dbb688a4c5c84fcdbb13b6c1b9fe8ca23d27e8166fbcbb632b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62aebdcb3fc91dbb688a4c5c84fcdbb13b6c1b9fe8ca23d27e8166fbcbb632b->enter($__internal_e62aebdcb3fc91dbb688a4c5c84fcdbb13b6c1b9fe8ca23d27e8166fbcbb632b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_e62aebdcb3fc91dbb688a4c5c84fcdbb13b6c1b9fe8ca23d27e8166fbcbb632b->leave($__internal_e62aebdcb3fc91dbb688a4c5c84fcdbb13b6c1b9fe8ca23d27e8166fbcbb632b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
