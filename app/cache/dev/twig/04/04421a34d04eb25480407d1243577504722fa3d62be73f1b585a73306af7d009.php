<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_41d90d96fd8e0202f24110b5e9b2fe8664c416f8abbb2dde0459673dd986df18 extends Twig_Template
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
        $__internal_3490638ad4ac4d9cd82661b69d1cf71cddc9bdd38dc8b8bce33614c4fe5ca752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3490638ad4ac4d9cd82661b69d1cf71cddc9bdd38dc8b8bce33614c4fe5ca752->enter($__internal_3490638ad4ac4d9cd82661b69d1cf71cddc9bdd38dc8b8bce33614c4fe5ca752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3490638ad4ac4d9cd82661b69d1cf71cddc9bdd38dc8b8bce33614c4fe5ca752->leave($__internal_3490638ad4ac4d9cd82661b69d1cf71cddc9bdd38dc8b8bce33614c4fe5ca752_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
