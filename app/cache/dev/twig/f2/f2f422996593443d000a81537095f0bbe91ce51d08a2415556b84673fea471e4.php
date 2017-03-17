<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_844b863b45c9de5b239c3af52e9b4c47851028906fec185bb8db61986f7d2877 extends Twig_Template
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
        $__internal_2f0001a1ef567b27d5e47a4d1f33964b21889291a54eaba868bf78b5e590d20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0001a1ef567b27d5e47a4d1f33964b21889291a54eaba868bf78b5e590d20c->enter($__internal_2f0001a1ef567b27d5e47a4d1f33964b21889291a54eaba868bf78b5e590d20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2f0001a1ef567b27d5e47a4d1f33964b21889291a54eaba868bf78b5e590d20c->leave($__internal_2f0001a1ef567b27d5e47a4d1f33964b21889291a54eaba868bf78b5e590d20c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
