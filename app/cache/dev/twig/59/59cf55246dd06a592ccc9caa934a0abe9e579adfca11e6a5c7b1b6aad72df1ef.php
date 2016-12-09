<?php

/* Form/form_login.html.twig */
class __TwigTemplate_a54404c39764076c37bcee43149540de6c403a141ddc8e337b735a3aba144c90 extends Twig_Template
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
        $__internal_bfdb9da732b301a87683911816a13a2da614c5b1029d8981f256462f31fffb24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdb9da732b301a87683911816a13a2da614c5b1029d8981f256462f31fffb24->enter($__internal_bfdb9da732b301a87683911816a13a2da614c5b1029d8981f256462f31fffb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/form_login.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" class=\"form-horizontal\" id=\"contact_form\" method=\"post\">
    <fieldset>
        <div class=\"form-group\">
            <div class=\"col-md-12\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                    <input type=\"text\" id=\"username\" placeholder=\"Email/Username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                           class=\"form-control\" required/>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-md-12\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\" class=\"form-control\"
                           required/>
                </div>
            </div>
        </div>
        ";
        // line 21
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 22
            echo "            <div class=\"alert alert-warning text-center\">
                ";
            // line 23
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), array("Bad credentials" => "Vos identifiants sont incorrect", "User account is disabled." => "Votre compte n'est pas activé")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 26
        echo "        <div class=\"form-group\">
            <div class=\"col-md-12\">
                <button type=\"submit\" class=\"btn btn-md btn-danger pull-right\">Go</button>
            </div>
        </div>
    </fieldset>
</form>";
        
        $__internal_bfdb9da732b301a87683911816a13a2da614c5b1029d8981f256462f31fffb24->leave($__internal_bfdb9da732b301a87683911816a13a2da614c5b1029d8981f256462f31fffb24_prof);

    }

    public function getTemplateName()
    {
        return "Form/form_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 26,  54 => 23,  51 => 22,  49 => 21,  32 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('login_check') }}\" class=\"form-horizontal\" id=\"contact_form\" method=\"post\">
    <fieldset>
        <div class=\"form-group\">
            <div class=\"col-md-12\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                    <input type=\"text\" id=\"username\" placeholder=\"Email/Username\" name=\"_username\" value=\"{{ last_username }}\"
                           class=\"form-control\" required/>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-md-12\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Password\" class=\"form-control\"
                           required/>
                </div>
            </div>
        </div>
        {% if error %}
            <div class=\"alert alert-warning text-center\">
                {{ error.message|replace({\"Bad credentials\": \"Vos identifiants sont incorrect\", \"User account is disabled.\": \"Votre compte n'est pas activé\"}) }}
            </div>
        {% endif %}
        <div class=\"form-group\">
            <div class=\"col-md-12\">
                <button type=\"submit\" class=\"btn btn-md btn-danger pull-right\">Go</button>
            </div>
        </div>
    </fieldset>
</form>", "Form/form_login.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Form/form_login.html.twig");
    }
}
