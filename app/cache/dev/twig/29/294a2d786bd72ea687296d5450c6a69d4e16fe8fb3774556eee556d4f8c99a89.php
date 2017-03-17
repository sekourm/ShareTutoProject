<?php

/* :Alert:alert.html.twig */
class __TwigTemplate_a10d2ea09067c20f4ab206a1ba4f1e86d6862ed41547f8401218edc9d76d049c extends Twig_Template
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
        $__internal_115dcfdfe4b15ca7eaa1be81c49396bc4b67c3f4a344aff44eea6d331a46cfa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115dcfdfe4b15ca7eaa1be81c49396bc4b67c3f4a344aff44eea6d331a46cfa8->enter($__internal_115dcfdfe4b15ca7eaa1be81c49396bc4b67c3f4a344aff44eea6d331a46cfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Alert:alert.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "info"), "method")) {
            // line 2
            echo "    <hr/>
    <div class=\"alert alert-info text-center\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 5
                echo "            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </div>
";
        }
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
            // line 10
            echo "    <hr/>
    <div class=\"alert alert-warning text-center\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </div>
";
        }
        // line 17
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 18
            echo "    <hr/>
    <div class=\"alert alert-success text-center\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 21
                echo "            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </div>
";
        }
        
        $__internal_115dcfdfe4b15ca7eaa1be81c49396bc4b67c3f4a344aff44eea6d331a46cfa8->leave($__internal_115dcfdfe4b15ca7eaa1be81c49396bc4b67c3f4a344aff44eea6d331a46cfa8_prof);

    }

    public function getTemplateName()
    {
        return ":Alert:alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  78 => 21,  74 => 20,  70 => 18,  68 => 17,  64 => 15,  55 => 13,  51 => 12,  47 => 10,  45 => 9,  41 => 7,  32 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.session.flashBag.has('info') %}
    <hr/>
    <div class=\"alert alert-info text-center\">
        {% for msg in app.session.flashBag.get('info') %}
            {{ msg }}
        {% endfor %}
    </div>
{% endif %}
{% if app.session.flashBag.has('warning') %}
    <hr/>
    <div class=\"alert alert-warning text-center\">
        {% for msg in app.session.flashBag.get('warning') %}
            {{ msg }}
        {% endfor %}
    </div>
{% endif %}
{% if app.session.flashBag.has('success') %}
    <hr/>
    <div class=\"alert alert-success text-center\">
        {% for msg in app.session.flashBag.get('success') %}
            {{ msg }}
        {% endfor %}
    </div>
{% endif %}", ":Alert:alert.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/Alert/alert.html.twig");
    }
}
