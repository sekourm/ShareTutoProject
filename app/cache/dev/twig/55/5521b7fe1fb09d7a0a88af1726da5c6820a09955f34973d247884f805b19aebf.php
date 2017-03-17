<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_83d1c003f246858c361e80af3b937c7f7d6a85159772b5ae75c77e1ad92fcc17 extends Twig_Template
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
        $__internal_bb9ceebc52dec140bb6e909b2a39d22fd4a793f3483494ae08c3606e63542ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9ceebc52dec140bb6e909b2a39d22fd4a793f3483494ae08c3606e63542ae2->enter($__internal_bb9ceebc52dec140bb6e909b2a39d22fd4a793f3483494ae08c3606e63542ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_bb9ceebc52dec140bb6e909b2a39d22fd4a793f3483494ae08c3606e63542ae2->leave($__internal_bb9ceebc52dec140bb6e909b2a39d22fd4a793f3483494ae08c3606e63542ae2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
