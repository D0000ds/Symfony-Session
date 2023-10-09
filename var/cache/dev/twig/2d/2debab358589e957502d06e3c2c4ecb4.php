<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* session/new.html.twig */
class __TwigTemplate_93c6cdc160da91d58880c411e5873b5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "session/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello SessionController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"card\">
        <div class=\"titleCard\">
        ";
        // line 9
        if ((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        <h1>Modifier </h1>
            ";
        } else {
            // line 12
            echo "            <h1>Ajouter une Session  </h1>
        ";
        }
        // line 14
        echo "        </div>
        ";
        // line 15
        if ((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "            <div class=\"sousCardForm\">
                ";
            // line 17
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
            echo "
                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "libelle", [], "any", false, false, false, 18), 'row');
            echo "
                <div class=\"twoForm\">
                    ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "dateDebut", [], "any", false, false, false, 20), 'row');
            echo "
                    ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "dateFin", [], "any", false, false, false, 21), 'row');
            echo "
                </div>
                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nbDePlace", [], "any", false, false, false, 23), 'row');
            echo "
                <div class=\"cardForm\">
                    <div class=\"titleCard\">
                        <h2>Programme de la session</h2>
                    </div>
                    <div class=\"form-group row \">
                        <div class=\"col-form-label col-sm-2\">&nbsp;</div>
                        <div id=\"programme-fields-list\" class=\"col-sm-10 remove-collection-widget\"
                            data-prototype=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "programmes", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "prototype", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "borders"]]));
            echo "\"
                            data-session=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["sessionId"]) || array_key_exists("sessionId", $context) ? $context["sessionId"] : (function () { throw new RuntimeError('Variable "sessionId" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\"
                            data-widget-tags=\"";
            // line 33
            echo twig_escape_filter($this->env, "<div class=\"sousForm\"><p></p></div>");
            echo "\"
                            data-widget-counter=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "programmes", [], "any", false, false, false, 34)), "html", null, true);
            echo "\">
                        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "programmes", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["programmeField"]) {
                // line 36
                echo "                            <div class=\"sousForm\">
                                <p>
                                    ";
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["programmeField"], 'errors');
                echo "
                                    ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["programmeField"], 'widget', ["attr" => ["class" => "borders"]]);
                echo "
                                </p>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programmeField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                        </div>
                    </div>
                    <div class=\"twoButton\">
                        <button type=\"button\" 
                            class=\"add-another-collection-widget button\"
                            data-list-selector=\"#programme-fields-list\">Ajouter un nouveau cours</button>
                    </div>
                </div>
                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "Ajouter", [], "any", false, false, false, 51), 'row');
            echo "
                ";
            // line 52
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
            echo "
            </div>
        ";
        } else {
            // line 55
            echo "            <div class=\"sousCardForm\">
                ";
            // line 56
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_start');
            echo "
                ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "libelle", [], "any", false, false, false, 57), 'row');
            echo "
                <div class=\"twoForm\">
                    ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dateDebut", [], "any", false, false, false, 59), 'row');
            echo "
                    ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "dateFin", [], "any", false, false, false, 60), 'row');
            echo "
                </div>
                ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "nbDePlace", [], "any", false, false, false, 62), 'row');
            echo "
                ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "Ajouter", [], "any", false, false, false, 63), 'row');
            echo "
                ";
            // line 64
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "programmes", [], "any", false, false, false, 64), "setRendered", [], "any", false, false, false, 64);
            // line 65
            echo "                ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
            echo "
            </div>
        ";
        }
        // line 68
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "session/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 68,  229 => 65,  227 => 64,  223 => 63,  219 => 62,  214 => 60,  210 => 59,  205 => 57,  201 => 56,  198 => 55,  192 => 52,  188 => 51,  178 => 43,  168 => 39,  164 => 38,  160 => 36,  156 => 35,  152 => 34,  148 => 33,  144 => 32,  140 => 31,  129 => 23,  124 => 21,  120 => 20,  115 => 18,  111 => 17,  108 => 16,  106 => 15,  103 => 14,  99 => 12,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SessionController!{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"card\">
        <div class=\"titleCard\">
        {% if edit %}
        <h1>Modifier </h1>
            {% else %}
            <h1>Ajouter une Session  </h1>
        {% endif %}
        </div>
        {% if edit %}
            <div class=\"sousCardForm\">
                {{ form_start(form) }}
                {{ form_row(form.libelle) }}
                <div class=\"twoForm\">
                    {{ form_row(form.dateDebut) }}
                    {{ form_row(form.dateFin) }}
                </div>
                {{ form_row(form.nbDePlace) }}
                <div class=\"cardForm\">
                    <div class=\"titleCard\">
                        <h2>Programme de la session</h2>
                    </div>
                    <div class=\"form-group row \">
                        <div class=\"col-form-label col-sm-2\">&nbsp;</div>
                        <div id=\"programme-fields-list\" class=\"col-sm-10 remove-collection-widget\"
                            data-prototype=\"{{ form_widget(form.programmes.vars.prototype, {'attr': {'class': 'borders'}})|e }}\"
                            data-session=\"{{sessionId}}\"
                            data-widget-tags=\"{{ '<div class=\"sousForm\"><p></p></div>'|e }}\"
                            data-widget-counter=\"{{ form.programmes|length }}\">
                        {% for programmeField in form.programmes %}
                            <div class=\"sousForm\">
                                <p>
                                    {{ form_errors(programmeField) }}
                                    {{ form_widget(programmeField, {'attr': {'class': 'borders'}}) }}
                                </p>
                            </div>
                        {% endfor %}
                        </div>
                    </div>
                    <div class=\"twoButton\">
                        <button type=\"button\" 
                            class=\"add-another-collection-widget button\"
                            data-list-selector=\"#programme-fields-list\">Ajouter un nouveau cours</button>
                    </div>
                </div>
                {{ form_row(form.Ajouter) }}
                {{ form_end(form) }}
            </div>
        {% else %}
            <div class=\"sousCardForm\">
                {{ form_start(form) }}
                {{ form_row(form.libelle) }}
                <div class=\"twoForm\">
                    {{ form_row(form.dateDebut) }}
                    {{ form_row(form.dateFin) }}
                </div>
                {{ form_row(form.nbDePlace) }}
                {{ form_row(form.Ajouter) }}
                {% do form.programmes.setRendered %}
                {{ form_end(form) }}
            </div>
        {% endif %}
    </div>
</div>
{% endblock body %}
", "session/new.html.twig", "C:\\laragon\\www\\SessionSymfony\\templates\\session\\new.html.twig");
    }
}
