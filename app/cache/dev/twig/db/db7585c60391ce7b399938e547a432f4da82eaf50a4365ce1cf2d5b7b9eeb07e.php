<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4ae20a7edd22b1badddf61c4f145965d1b4a12b59a221acc759a8ea622c6bada extends Twig_Template
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
        $__internal_214233c8e03c79821a9fce7f13e6ac70cf509831762c0bc53a7e040e7eadcdef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214233c8e03c79821a9fce7f13e6ac70cf509831762c0bc53a7e040e7eadcdef->enter($__internal_214233c8e03c79821a9fce7f13e6ac70cf509831762c0bc53a7e040e7eadcdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_214233c8e03c79821a9fce7f13e6ac70cf509831762c0bc53a7e040e7eadcdef->leave($__internal_214233c8e03c79821a9fce7f13e6ac70cf509831762c0bc53a7e040e7eadcdef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
