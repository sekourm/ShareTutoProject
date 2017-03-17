<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0819e0c1fa08baf8384522099becc0a3faf0030bb73331a6abbf4f0e06454e9e extends Twig_Template
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
        $__internal_a6b59b7159ed4439885e7fbd161c424743162e5ded90bde7d9ef5c0ef62f016e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b59b7159ed4439885e7fbd161c424743162e5ded90bde7d9ef5c0ef62f016e->enter($__internal_a6b59b7159ed4439885e7fbd161c424743162e5ded90bde7d9ef5c0ef62f016e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a6b59b7159ed4439885e7fbd161c424743162e5ded90bde7d9ef5c0ef62f016e->leave($__internal_a6b59b7159ed4439885e7fbd161c424743162e5ded90bde7d9ef5c0ef62f016e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
