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

/* stagiaire/detail.html.twig */
class __TwigTemplate_edf98d8189b6abc636e437558c552386 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stagiaire/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stagiaire/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stagiaire/detail.html.twig", 1);
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
            <h1>Fiche stagiaire de ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 9, $this->source); })()), "prenom", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"sousCardCategorie\">
            ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "                <div class=\"editButton\">
                    <a href=\" ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_stagiaire", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo " \" class=\"edit\">E</a>
                    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del_stagiaire", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" class=\"delete\">D</a>
                </div> 
            ";
        }
        // line 18
        echo "            <div class=\"detailStagiaire\">
                <h2>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2>
                <span class=\"stagiaireSpan\">Sexe : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 20, $this->source); })()), "sexe", [], "any", false, false, false, 20), "html", null, true);
        echo "</span>
                <span class=\"stagiaireSpan\">Date de naissance : ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 21, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 21, $this->source); })()), "age", [], "any", false, false, false, 21), "html", null, true);
        echo " ans)</span>
                <span class=\"stagiaireSpan\">Ville : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 22, $this->source); })()), "ville", [], "any", false, false, false, 22), "html", null, true);
        echo "</span>
                <span class=\"stagiaireSpan\">Courriel : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), "html", null, true);
        echo "</span>
                <span class=\"stagiaireSpan\">Téléphone : ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 24, $this->source); })()), "telephone", [], "any", false, false, false, 24), "html", null, true);
        echo "</span>
                <div>
                    <h2>Sessions prévues</h2> 
                    ";
        // line 27
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 27, $this->source); })()), "sessions", [], "any", false, false, false, 27))) {
            // line 28
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), "html", null, true);
            echo " ne participe a aucune session pour le moment.</p>
                    ";
        } else {
            // line 30
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 30, $this->source); })()), "sessions", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["sessions"]) {
                // line 31
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_session", ["id" => twig_get_attribute($this->env, $this->source, $context["sessions"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" class=\"linkCard\">
                                <span class=\"spanCard\">Libelle <br> ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sessions"], "Libelle", [], "any", false, false, false, 32), "html", null, true);
                echo " </span>
                                <span class=\"spanCard\"> date debut <br> ";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sessions"], "DateDebut", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
                echo "</span>
                                <span class=\"spanCard\"> date fin <br> ";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sessions"], "DateFin", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
                echo "</span>
                                <span class=\"spanCard\"> nb de places théoriques <br> ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sessions"], "NbDePlace", [], "any", false, false, false, 35), "html", null, true);
                echo " </span>
                                <span class=\"spanCard\"> nb de places réservées <br> ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sessions"], "NbDePlaceRes", [], "any", false, false, false, 36), "html", null, true);
                echo "</span>
                                <span>  nb de places restantes <br> ";
                // line 37
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["sessions"], "NbDePlace", [], "any", false, false, false, 37) - twig_get_attribute($this->env, $this->source, $context["sessions"], "NbDePlaceRes", [], "any", false, false, false, 37)), "html", null, true);
                echo " </span>
                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sessions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    ";
        }
        // line 41
        echo "                </div>
            </div>
        </div>
    </div>
</div> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "stagiaire/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 41,  198 => 40,  189 => 37,  185 => 36,  181 => 35,  177 => 34,  173 => 33,  169 => 32,  164 => 31,  159 => 30,  151 => 28,  149 => 27,  143 => 24,  139 => 23,  135 => 22,  129 => 21,  125 => 20,  119 => 19,  116 => 18,  110 => 15,  106 => 14,  103 => 13,  101 => 12,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello StagiaireController!{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"card\">
        <div class=\"titleCard\">
            <h1>Fiche stagiaire de {{stagiaire.nom}} {{stagiaire.prenom}}</h1>
        </div>
        <div class=\"sousCardCategorie\">
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"editButton\">
                    <a href=\" {{ path('edit_stagiaire', {'id': stagiaire.id})}} \" class=\"edit\">E</a>
                    <a href=\"{{ path('del_stagiaire', {'id': stagiaire.id})}}\" class=\"delete\">D</a>
                </div> 
            {% endif %}
            <div class=\"detailStagiaire\">
                <h2>{{stagiaire.nom}} {{stagiaire.prenom}}</h2>
                <span class=\"stagiaireSpan\">Sexe : {{stagiaire.sexe}}</span>
                <span class=\"stagiaireSpan\">Date de naissance : {{stagiaire.dateDeNaissance | date(\"d/m/Y\")}} ({{stagiaire.age}} ans)</span>
                <span class=\"stagiaireSpan\">Ville : {{stagiaire.ville}}</span>
                <span class=\"stagiaireSpan\">Courriel : {{stagiaire.email}}</span>
                <span class=\"stagiaireSpan\">Téléphone : {{stagiaire.telephone}}</span>
                <div>
                    <h2>Sessions prévues</h2> 
                    {% if stagiaire.sessions is empty %}
                        <p>{{stagiaire.nom}} {{stagiaire.prenom}} ne participe a aucune session pour le moment.</p>
                    {% else %}
                        {% for sessions in stagiaire.sessions %}
                            <a href=\"{{ path('detail_session', {'id': sessions.id})}}\" class=\"linkCard\">
                                <span class=\"spanCard\">Libelle <br> {{sessions.Libelle}} </span>
                                <span class=\"spanCard\"> date debut <br> {{sessions.DateDebut | date(\"d/m/Y\")}}</span>
                                <span class=\"spanCard\"> date fin <br> {{sessions.DateFin | date(\"d/m/Y\")}}</span>
                                <span class=\"spanCard\"> nb de places théoriques <br> {{sessions.NbDePlace}} </span>
                                <span class=\"spanCard\"> nb de places réservées <br> {{sessions.NbDePlaceRes}}</span>
                                <span>  nb de places restantes <br> {{sessions.NbDePlace - sessions.NbDePlaceRes}} </span>
                            </a>
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div> 
{% endblock body %}", "stagiaire/detail.html.twig", "C:\\laragon\\www\\SessionSymfony\\templates\\stagiaire\\detail.html.twig");
    }
}
