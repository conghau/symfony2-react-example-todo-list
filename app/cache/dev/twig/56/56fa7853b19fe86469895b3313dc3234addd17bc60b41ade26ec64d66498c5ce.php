<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b2956e82c3f6ac892fdefeb63aeb0f1dfb242c9db8018c3c2075796d4a756a31 extends Twig_Template
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
        $__internal_bf58f2555b34cb2219d2f6013ce3fb314123795e73fe29d455a8dbaadff317be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf58f2555b34cb2219d2f6013ce3fb314123795e73fe29d455a8dbaadff317be->enter($__internal_bf58f2555b34cb2219d2f6013ce3fb314123795e73fe29d455a8dbaadff317be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_bf58f2555b34cb2219d2f6013ce3fb314123795e73fe29d455a8dbaadff317be->leave($__internal_bf58f2555b34cb2219d2f6013ce3fb314123795e73fe29d455a8dbaadff317be_prof);

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
