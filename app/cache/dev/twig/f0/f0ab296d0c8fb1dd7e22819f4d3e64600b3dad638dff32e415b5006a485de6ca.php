<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_71d5e911f9029d380af60c7dfa306f66d71e654cd1d53632630b6ffe37c0e2b4 extends Twig_Template
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
        $__internal_329c5c9174a494cde6e82a0211217ab36cc3a6dd404d00e8bcc48ded05bada27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329c5c9174a494cde6e82a0211217ab36cc3a6dd404d00e8bcc48ded05bada27->enter($__internal_329c5c9174a494cde6e82a0211217ab36cc3a6dd404d00e8bcc48ded05bada27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_329c5c9174a494cde6e82a0211217ab36cc3a6dd404d00e8bcc48ded05bada27->leave($__internal_329c5c9174a494cde6e82a0211217ab36cc3a6dd404d00e8bcc48ded05bada27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
