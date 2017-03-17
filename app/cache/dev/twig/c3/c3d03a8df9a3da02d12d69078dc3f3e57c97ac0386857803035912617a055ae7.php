<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7a23ab091b73b81073de105dc9a4b27eee01a2c9ab62ddef51476cbe5f16190a extends Twig_Template
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
        $__internal_5490ff69c339a2ced42ab1789f9c73c588a31cc28f9f301e64d6553d9e70a12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5490ff69c339a2ced42ab1789f9c73c588a31cc28f9f301e64d6553d9e70a12c->enter($__internal_5490ff69c339a2ced42ab1789f9c73c588a31cc28f9f301e64d6553d9e70a12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_5490ff69c339a2ced42ab1789f9c73c588a31cc28f9f301e64d6553d9e70a12c->leave($__internal_5490ff69c339a2ced42ab1789f9c73c588a31cc28f9f301e64d6553d9e70a12c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
