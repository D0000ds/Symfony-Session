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

/* session/detail.html.twig */
class __TwigTemplate_a7c98dac0cef2d773334719e86787e05 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "session/detail.html.twig", 1);
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
            <h1>Session ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 9, $this->source); })()), "Libelle", [], "any", false, false, false, 9), "html", null, true);
        echo " </h1>
        </div>
        <div class=\"sousCardCategorie\">
            ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "                <div class=\"editButton\">
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_session", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" class=\"edit\">E</a>
                    <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del_session", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" class=\"delete\">D</a>
                </div>
            ";
        }
        // line 18
        echo "            <div class=\"categorieContainer\">
                ";
        // line 19
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 19, $this->source); })()), "programmes", [], "any", false, false, false, 19))) {
            // line 20
            echo "                    <p>Il n'y a aucun cours sur cette session revenez plus-tard.</p>
                ";
        } else {
            // line 22
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["programmesParCategorie"]) || array_key_exists("programmesParCategorie", $context) ? $context["programmesParCategorie"] : (function () { throw new RuntimeError('Variable "programmesParCategorie" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 23
                echo "                        <div class=\"cardCategorie\">
                            <div class=\"titleCardCategorie\">
                                <h3>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 25), "html", null, true);
                echo "</h3>
                            </div>
                            ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 27, $this->source); })()), "programmes", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["programmes"]) {
                    // line 28
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["categorie"], "cours", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                        // line 29
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["programmes"], "cours", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29) == twig_get_attribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 29))) {
                            // line 30
                            echo "                                        <div class=\"sousCategorieCard\">
                                            <span class=\"spanCategorieCard\"> ";
                            // line 31
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["programmes"], "cours", [], "any", false, false, false, 31), "libelle", [], "any", false, false, false, 31), "html", null, true);
                            echo " </span>
                                            <span> ";
                            // line 32
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programmes"], "duree", [], "any", false, false, false, 32), "html", null, true);
                            echo " Jours</span>
                                        </div>  
                                    ";
                        }
                        // line 35
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programmes'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 40
                echo "                        
                                <div class=\"cardCategorie\">
                                    <div class=\"titleCardCategorie\">
                                        <h3>Stagiaires</h3>
                                    </div>
                                    <div class=\"inSession\">
                                        <div class=\"titleCardCategorie\">
                                            <h4>Inscrit a la session</h4>
                                        </div>
                                        <div class=\"inSessionCard\">
                                            ";
                // line 50
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 50, $this->source); })()), "stagiaires", [], "any", false, false, false, 50))) {
                    // line 51
                    echo "                                                <p class=\"pSession\">Il n'y a aucun stagiaires inscrit a cette session</p>
                                            ";
                } else {
                    // line 53
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 53, $this->source); })()), "stagiaires", [], "any", false, false, false, 53));
                    foreach ($context['_seq'] as $context["_key"] => $context["stagiaire"]) {
                        // line 54
                        echo "                                                    <div class=\"sousinNotSession\">
                                                        <a href=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_stagiaire", ["id" => twig_get_attribute($this->env, $this->source, $context["stagiaire"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                        echo "\" class=\"linkSession\">
                                                            ";
                        // line 56
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "nom", [], "any", false, false, false, 56), "html", null, true);
                        echo "
                                                            ";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "prenom", [], "any", false, false, false, 57), "html", null, true);
                        echo "
                                                        </a>
                                                        <aside class=\"asideSession\">
                                                            <a href=\"";
                        // line 60
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_stagiaire_session", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "idSta" => twig_get_attribute($this->env, $this->source, $context["stagiaire"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                        echo "\" class=\"btnSup\">Supprimer</a> 
                                                        </aside>
                                                    </div>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stagiaire'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "                                            ";
                }
                // line 65
                echo "                                        </div>
                                    </div>
                                    <div class=\"inNotSession\">
                                        <div class=\"titleCardCategorie\">
                                            <h4>Non inscrit a la session</h4>
                                        </div>
                                        <div class=\"inSessionCard\">
                                            ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userInSession"]) || array_key_exists("userInSession", $context) ? $context["userInSession"] : (function () { throw new RuntimeError('Variable "userInSession" does not exist.', 72, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 73
                    echo "                                            <div class=\"sousinNotSession\">
                                                <a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_stagiaire", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "\" class=\"linkSession\">
                                                    ";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 75), "html", null, true);
                    echo "
                                                    ";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 76), "html", null, true);
                    echo "
                                                </a>
                                                <aside class=\"asideSession\">
                                                    <a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_stagiaire_session", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79), "idSta" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                    echo "\" class=\"btnAdd\">Ajouter</a>
                                                </aside>
                                            </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 87
            echo "                        </div>
                    ";
        }
        // line 89
        echo "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "session/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 89,  283 => 87,  277 => 83,  267 => 79,  261 => 76,  257 => 75,  253 => 74,  250 => 73,  246 => 72,  237 => 65,  234 => 64,  224 => 60,  218 => 57,  214 => 56,  210 => 55,  207 => 54,  202 => 53,  198 => 51,  196 => 50,  184 => 40,  181 => 39,  174 => 37,  168 => 36,  162 => 35,  156 => 32,  152 => 31,  149 => 30,  146 => 29,  141 => 28,  137 => 27,  132 => 25,  128 => 23,  123 => 22,  119 => 20,  117 => 19,  114 => 18,  108 => 15,  104 => 14,  101 => 13,  99 => 12,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SessionController!{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"card\">
        <div class=\"titleCard\">
            <h1>Session {{session.Libelle}} </h1>
        </div>
        <div class=\"sousCardCategorie\">
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"editButton\">
                    <a href=\"{{ path('edit_session', {'id': session.id}) }}\" class=\"edit\">E</a>
                    <a href=\"{{ path('del_session', {'id': session.id}) }}\" class=\"delete\">D</a>
                </div>
            {% endif %}
            <div class=\"categorieContainer\">
                {% if session.programmes is empty %}
                    <p>Il n'y a aucun cours sur cette session revenez plus-tard.</p>
                {% else %}
                    {% for categorie  in programmesParCategorie %}
                        <div class=\"cardCategorie\">
                            <div class=\"titleCardCategorie\">
                                <h3>{{ categorie.libelle }}</h3>
                            </div>
                            {% for programmes in session.programmes %}
                                {% for cours in categorie.cours %}
                                    {% if programmes.cours.id == cours.id %}
                                        <div class=\"sousCategorieCard\">
                                            <span class=\"spanCategorieCard\"> {{programmes.cours.libelle}} </span>
                                            <span> {{programmes.duree}} Jours</span>
                                        </div>  
                                    {% endif %}
                                {% endfor %}
                            {% endfor %}
                        </div>
                    {% endfor %}
                    {% if is_granted('ROLE_ADMIN') %}
                        
                                <div class=\"cardCategorie\">
                                    <div class=\"titleCardCategorie\">
                                        <h3>Stagiaires</h3>
                                    </div>
                                    <div class=\"inSession\">
                                        <div class=\"titleCardCategorie\">
                                            <h4>Inscrit a la session</h4>
                                        </div>
                                        <div class=\"inSessionCard\">
                                            {% if session.stagiaires is empty%}
                                                <p class=\"pSession\">Il n'y a aucun stagiaires inscrit a cette session</p>
                                            {% else %}
                                                {% for stagiaire in session.stagiaires %}
                                                    <div class=\"sousinNotSession\">
                                                        <a href=\"{{ path('detail_stagiaire', {'id': stagiaire.id})}}\" class=\"linkSession\">
                                                            {{stagiaire.nom}}
                                                            {{stagiaire.prenom}}
                                                        </a>
                                                        <aside class=\"asideSession\">
                                                            <a href=\"{{ path('delete_stagiaire_session', {'id': session.id, 'idSta': stagiaire.id}) }}\" class=\"btnSup\">Supprimer</a> 
                                                        </aside>
                                                    </div>
                                                {% endfor %}
                                            {% endif %}
                                        </div>
                                    </div>
                                    <div class=\"inNotSession\">
                                        <div class=\"titleCardCategorie\">
                                            <h4>Non inscrit a la session</h4>
                                        </div>
                                        <div class=\"inSessionCard\">
                                            {% for user in userInSession %}
                                            <div class=\"sousinNotSession\">
                                                <a href=\"{{ path('detail_stagiaire', {'id': user.id})}}\" class=\"linkSession\">
                                                    {{user.nom}}
                                                    {{user.prenom}}
                                                </a>
                                                <aside class=\"asideSession\">
                                                    <a href=\"{{ path('add_stagiaire_session', {'id': session.id, 'idSta': user.id}) }}\" class=\"btnAdd\">Ajouter</a>
                                                </aside>
                                            </div>
                                            {% endfor %}
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    {% endif %}
        </div>
    </div>
</div>
{% endblock %}
", "session/detail.html.twig", "C:\\laragon\\www\\SessionSymfony\\templates\\session\\detail.html.twig");
    }
}
