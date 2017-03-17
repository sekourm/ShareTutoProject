<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_55532ea0b2be8c9c794905eeb27fa11ee890c7b10cc2578acb6ead9abd8fd683 extends Twig_Template
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
        $__internal_bf07db2f744e16866827b88b84c531e09a0101e68c5a8e2d73e325c4e69434af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf07db2f744e16866827b88b84c531e09a0101e68c5a8e2d73e325c4e69434af->enter($__internal_bf07db2f744e16866827b88b84c531e09a0101e68c5a8e2d73e325c4e69434af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bf07db2f744e16866827b88b84c531e09a0101e68c5a8e2d73e325c4e69434af->leave($__internal_bf07db2f744e16866827b88b84c531e09a0101e68c5a8e2d73e325c4e69434af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
