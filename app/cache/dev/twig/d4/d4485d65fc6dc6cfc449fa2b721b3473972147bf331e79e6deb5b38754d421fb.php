<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_443bad431f8622bacd2e8a6098861ecdc0525215e7a150f427770ed70c87c234 extends Twig_Template
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
        $__internal_66a544da530c0d2a2c756c7c9cb994d7e9a774923041e03c7a637a7957d65618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a544da530c0d2a2c756c7c9cb994d7e9a774923041e03c7a637a7957d65618->enter($__internal_66a544da530c0d2a2c756c7c9cb994d7e9a774923041e03c7a637a7957d65618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_66a544da530c0d2a2c756c7c9cb994d7e9a774923041e03c7a637a7957d65618->leave($__internal_66a544da530c0d2a2c756c7c9cb994d7e9a774923041e03c7a637a7957d65618_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
