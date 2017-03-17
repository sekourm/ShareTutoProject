<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b31f4e7ff22b9f92d4a642e848f3843afb9a0b6f4e52d9f025d8140f49738160 extends Twig_Template
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
        $__internal_7e94c42bc2c7f856f0b9be165a7cb643a35bffeca3213a2c753a9dd421793869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e94c42bc2c7f856f0b9be165a7cb643a35bffeca3213a2c753a9dd421793869->enter($__internal_7e94c42bc2c7f856f0b9be165a7cb643a35bffeca3213a2c753a9dd421793869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7e94c42bc2c7f856f0b9be165a7cb643a35bffeca3213a2c753a9dd421793869->leave($__internal_7e94c42bc2c7f856f0b9be165a7cb643a35bffeca3213a2c753a9dd421793869_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
