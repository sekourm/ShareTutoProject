<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ad54bcdff8b3a01da19ae832a2d6fd6db4d99f7a3d641fcfe9fc9d5566d01404 extends Twig_Template
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
        $__internal_cf6508655c56106742e2104da3b85dd9cc255362d777578b96e533e431695d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6508655c56106742e2104da3b85dd9cc255362d777578b96e533e431695d3e->enter($__internal_cf6508655c56106742e2104da3b85dd9cc255362d777578b96e533e431695d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_cf6508655c56106742e2104da3b85dd9cc255362d777578b96e533e431695d3e->leave($__internal_cf6508655c56106742e2104da3b85dd9cc255362d777578b96e533e431695d3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
