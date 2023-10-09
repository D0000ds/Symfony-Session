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

/* stagiaire/index.html.twig */
class __TwigTemplate_0e91758e1368549294d36b1fc56d0969 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stagiaire/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stagiaire/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stagiaire/index.html.twig", 1);
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
            <h1>Listes des Stagiaires </h1>
        </div>
        <div class=\"sousCardStagiaire\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stagiaires"]) || array_key_exists("stagiaires", $context) ? $context["stagiaires"] : (function () { throw new RuntimeError('Variable "stagiaires" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stagiaire"]) {
            // line 13
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_stagiaire", ["id" => twig_get_attribute($this->env, $this->source, $context["stagiaire"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">
                    <div class=\"stagiaireCard\">
                        <figure class=\"stagiaireCardBackGround\">
                            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Img/low-poly-grid-haikei.png"), "html", null, true);
            echo "\" alt=\"stagiaire card background\">
                        </figure>
                        <figure class=\"profilePicture\">
                            <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["stagiaire"], "picture", [], "any", false, false, false, 19)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "nom", [], "any", false, false, false, 19), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "prenom", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                        </figure>
                        <div class=\"stagiaireNom\">
                            <h3> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "prenom", [], "any", false, false, false, 22), "html", null, true);
            echo "</h3>
                            <span>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "ville", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                </a> 
                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stagiaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "stagiaire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 29,  129 => 23,  123 => 22,  113 => 19,  107 => 16,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello StagiaireController!{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"card\">
        <div class=\"titleCard\">
            <h1>Listes des Stagiaires </h1>
        </div>
        <div class=\"sousCardStagiaire\">
            {% for stagiaire in stagiaires %}
                <a href=\"{{ path('detail_stagiaire', {'id': stagiaire.id})}}\">
                    <div class=\"stagiaireCard\">
                        <figure class=\"stagiaireCardBackGround\">
                            <img src=\"{{ asset('Img/low-poly-grid-haikei.png')}}\" alt=\"stagiaire card background\">
                        </figure>
                        <figure class=\"profilePicture\">
                            <img src=\"{{ asset(stagiaire.picture)}}\" alt=\"{{ stagiaire.nom }} {{ stagiaire.prenom }}\">
                        </figure>
                        <div class=\"stagiaireNom\">
                            <h3> {{ stagiaire.nom }} {{ stagiaire.prenom }}</h3>
                            <span>{{ stagiaire.ville }}</span>
                        </div>
                    </div>
                </a> 
                
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}
", "stagiaire/index.html.twig", "C:\\laragon\\www\\SessionSymfony\\templates\\stagiaire\\index.html.twig");
    }
}
