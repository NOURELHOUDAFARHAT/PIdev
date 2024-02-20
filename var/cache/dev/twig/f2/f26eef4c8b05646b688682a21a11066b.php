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

/* activite/show.html.twig */
class __TwigTemplate_343319fb9a5e77929a904393dd9c662c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <!-- Ajoutez ici vos liens vers les feuilles de style CSS si nécessaire -->
    <style>
        body {
            background-color: #f0f0f0; /* Couleur de fond */
            color: #333; /* Couleur du texte */
            font-family: Arial, sans-serif; /* Police de caractères */
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff; /* Couleur de fond de la zone principale */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #2196F3; /* Couleur d'arrière-plan de l'en-tête du tableau */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Couleur de fond des lignes paires du tableau */
        }

        a {
            color: #2196F3; /* Couleur du lien */
            text-decoration: none;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline; /* Soulignement au survol */
        }

        .back-to-list {
            display: block;
            margin-top: 20px;
        }

        .edit-link {
            margin-right: 10px;
        }

        .delete-form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>";
        // line 71
        $this->displayBlock('title', $context, $blocks);
        echo "</h1>

        <table>
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 81, $this->source); })()), "nom", [], "any", false, false, false, 81), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 85, $this->source); })()), "type", [], "any", false, false, false, 85), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Date_heure</th>
                    <td>";
        // line 89
        ((twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 89, $this->source); })()), "dateHeure", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 89, $this->source); })()), "dateHeure", [], "any", false, false, false, 89), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 93, $this->source); })()), "prix", [], "any", false, false, false, 93), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>

        <a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        echo "\" class=\"back-to-list\">Back to list</a>
        <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\" class=\"edit-link\">Edit</a>

        ";
        // line 101
        echo twig_include($this->env, $context, "activite/_delete_form.html.twig");
        echo "
    </div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 71
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Activite";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activite/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  184 => 71,  170 => 101,  165 => 99,  161 => 98,  153 => 93,  146 => 89,  139 => 85,  132 => 81,  125 => 77,  116 => 71,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <!-- Ajoutez ici vos liens vers les feuilles de style CSS si nécessaire -->
    <style>
        body {
            background-color: #f0f0f0; /* Couleur de fond */
            color: #333; /* Couleur du texte */
            font-family: Arial, sans-serif; /* Police de caractères */
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff; /* Couleur de fond de la zone principale */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #2196F3; /* Couleur d'arrière-plan de l'en-tête du tableau */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Couleur de fond des lignes paires du tableau */
        }

        a {
            color: #2196F3; /* Couleur du lien */
            text-decoration: none;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline; /* Soulignement au survol */
        }

        .back-to-list {
            display: block;
            margin-top: 20px;
        }

        .edit-link {
            margin-right: 10px;
        }

        .delete-form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>{% block title %}Activite{% endblock %}</h1>

        <table>
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ activite.id }}</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>{{ activite.nom }}</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>{{ activite.type }}</td>
                </tr>
                <tr>
                    <th>Date_heure</th>
                    <td>{{ activite.dateHeure ? activite.dateHeure|date('Y-m-d H:i:s') : '' }}</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td>{{ activite.prix }}</td>
                </tr>
            </tbody>
        </table>

        <a href=\"{{ path('app_activite_index') }}\" class=\"back-to-list\">Back to list</a>
        <a href=\"{{ path('app_activite_edit', {'id': activite.id}) }}\" class=\"edit-link\">Edit</a>

        {{ include('activite/_delete_form.html.twig') }}
    </div>

", "activite/show.html.twig", "C:\\Users\\nahla\\Pidev\\templates\\activite\\show.html.twig");
    }
}
