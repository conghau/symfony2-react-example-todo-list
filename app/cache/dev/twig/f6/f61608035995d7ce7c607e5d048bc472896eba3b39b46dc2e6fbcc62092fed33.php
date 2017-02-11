<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_59821df32d42800b794a82b8dc94deee5124ade153c989bfd80c0dbf1c813cca extends Twig_Template
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
        $__internal_e6c7115ccde3b32a55173c3ccda3dae9a43158cc453e5a6cdd68f85f07403e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c7115ccde3b32a55173c3ccda3dae9a43158cc453e5a6cdd68f85f07403e47->enter($__internal_e6c7115ccde3b32a55173c3ccda3dae9a43158cc453e5a6cdd68f85f07403e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e6c7115ccde3b32a55173c3ccda3dae9a43158cc453e5a6cdd68f85f07403e47->leave($__internal_e6c7115ccde3b32a55173c3ccda3dae9a43158cc453e5a6cdd68f85f07403e47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfony2-react-example-todo-list/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
