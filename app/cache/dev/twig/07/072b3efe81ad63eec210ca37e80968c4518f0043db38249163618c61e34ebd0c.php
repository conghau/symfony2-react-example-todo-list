<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7615ce7106c7fd83bd5bd62c8c5b48234fdb56cb9c1d55507e89d9f236e17265 extends Twig_Template
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
        $__internal_163a7ac024cee22e6a8c1c39dd4e6dcb6b35148fc529c7a84d2ec79a46721c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163a7ac024cee22e6a8c1c39dd4e6dcb6b35148fc529c7a84d2ec79a46721c84->enter($__internal_163a7ac024cee22e6a8c1c39dd4e6dcb6b35148fc529c7a84d2ec79a46721c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_163a7ac024cee22e6a8c1c39dd4e6dcb6b35148fc529c7a84d2ec79a46721c84->leave($__internal_163a7ac024cee22e6a8c1c39dd4e6dcb6b35148fc529c7a84d2ec79a46721c84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
