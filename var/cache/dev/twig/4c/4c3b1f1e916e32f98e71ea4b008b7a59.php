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

/* stagiaire/new.html.twig */
class __TwigTemplate_b7dbf01a6811eab5f7ad4eab4ed0e791 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stagiaire/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stagiaire/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stagiaire/new.html.twig", 1);
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

        echo "Hello StagiaireController!";
        
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
            echo "            <h1>Modifier</h1>
            ";
        } else {
            // line 12
            echo "                <h1>Ajouter un Stagiaire</h1>
            ";
        }
        // line 14
        echo "        </div>
        <div class=\"sousCardForm\">
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStagiaire"]) || array_key_exists("formStagiaire", $context) ? $context["formStagiaire"] : (function () { throw new RuntimeError('Variable "formStagiaire" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
            <div class=\"twoForm\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStagiaire"]) || array_key_exists("formStagiaire", $context) ? $context["formStagiaire"] : (function () { throw new RuntimeError('Variable "formStagiaire" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'row');
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStagiaire"]) || array_key_exists("formStagiaire", $context) ? $context["formStagiaire"] : (function () { throw new RuntimeError('Variable "formStagiaire" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), 'row');
        echo "
            </div>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStagiaire"]) || array_key_exists("formStagiaire", $context) ? $context["formStagiaire"] : (function () { throw new RuntimeError('Variable "formStagiaire" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'row');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStagiaire"]) || array_key_exists("formStagiaire", $context) ? $context["formStagiaire"] : (function () { throw new RuntimeError('Variable "formStagiaire" does not exist.', 22, $this->source); })()), "ville", [], "any", false, false, false, 22), 'row');
        echo "
            <div class=\"twoForm\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStagiaire"]) || array_key_exists("formStagiaire", $context) ? $context["formStagiaire"] : (function () { throw new RuntimeError('Variable "formStagiaire" does not exist.', 24, $this->source); })()), "sexe", [], "any", false, false, false, 24), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStagiaire"]) || array_key_exists("formStagiaire", $context) ? $context["formStagiaire"] : (function () { throw new RuntimeError('Variable "formStagiaire" does not exist.', 25, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 25), 'row');
        echo "
            </div>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStagiaire"]) || array_key_exists("formStagiaire", $context) ? $context["formStagiaire"] : (function () { throw new RuntimeError('Variable "formStagiaire" does not exist.', 27, $this->source); })()), "telephone", [], "any", false, false, false, 27), 'row');
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStagiaire"]) || array_key_exists("formStagiaire", $context) ? $context["formStagiaire"] : (function () { throw new RuntimeError('Variable "formStagiaire" does not exist.', 28, $this->source); })()), "picture", [], "any", false, false, false, 28), 'row');
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formStagiaire"]) || array_key_exists("formStagiaire", $context) ? $context["formStagiaire"] : (function () { throw new RuntimeError('Variable "formStagiaire" does not exist.', 29, $this->source); })()), "Ajouter", [], "any", false, false, false, 29), 'row');
        echo "
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formStagiaire"]) || array_key_exists("formStagiaire", $context) ? $context["formStagiaire"] : (function () { throw new RuntimeError('Variable "formStagiaire" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "stagiaire/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 30,  147 => 29,  143 => 28,  139 => 27,  134 => 25,  130 => 24,  125 => 22,  121 => 21,  116 => 19,  112 => 18,  107 => 16,  103 => 14,  99 => 12,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello StagiaireController!{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"card\">
        <div class=\"titleCard\">
            {% if edit %}
            <h1>Modifier</h1>
            {% else %}
                <h1>Ajouter un Stagiaire</h1>
            {% endif %}
        </div>
        <div class=\"sousCardForm\">
            {{ form_start(formStagiaire) }}
            <div class=\"twoForm\">
                {{ form_row(formStagiaire.nom) }}
                {{ form_row(formStagiaire.prenom) }}
            </div>
            {{ form_row(formStagiaire.email) }}
            {{ form_row(formStagiaire.ville) }}
            <div class=\"twoForm\">
                {{ form_row(formStagiaire.sexe) }}
                {{ form_row(formStagiaire.dateDeNaissance) }}
            </div>
            {{ form_row(formStagiaire.telephone) }}
            {{ form_row(formStagiaire.picture) }}
            {{ form_row(formStagiaire.Ajouter) }}
            {{ form_end(formStagiaire) }}
        </div>
    </div>
</div>
{% endblock body %}
", "stagiaire/new.html.twig", "C:\\laragon\\www\\SessionSymfony\\templates\\stagiaire\\new.html.twig");
    }
}
