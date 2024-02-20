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

/* staff/index.html.twig */
class __TwigTemplate_75c7956588d3306c0de1024ed167edac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/index.html.twig"));

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
            max-width: 800px;
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

        .no-records {
            text-align: center;
            font-style: italic;
            color: #777; /* Couleur du texte en cas d'absence d'enregistrements */
        }

        .create-new {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>";
        // line 70
        $this->displayBlock('title', $context, $blocks);
        echo "</h1>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>num_tel</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["staff"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["staff"]) {
            // line 85
            echo "                <tr>
                    <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                    <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "nom", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                    <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "type", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                    <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "num_tel", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                    
                    
                    <td>
                        <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_show", ["id" => twig_get_attribute($this->env, $this->source, $context["staff"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\">Show</a>
                        <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["staff"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\">Edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 98
            echo "                <tr>
                    <td colspan=\"6\" class=\"no-records\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_new");
        echo "\" class=\"create-new\">Create new</a>
    </div>
</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 70
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Staff index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "staff/index.html.twig";
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
        return array (  202 => 70,  186 => 105,  181 => 102,  172 => 98,  163 => 94,  159 => 93,  152 => 89,  148 => 88,  144 => 87,  140 => 86,  137 => 85,  132 => 84,  115 => 70,  44 => 1,);
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
            max-width: 800px;
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

        .no-records {
            text-align: center;
            font-style: italic;
            color: #777; /* Couleur du texte en cas d'absence d'enregistrements */
        }

        .create-new {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>{% block title %}Staff index{% endblock %}</h1>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>num_tel</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for staff in staff %}
                <tr>
                    <td>{{ staff.id }}</td>
                    <td>{{ staff.nom }}</td>
                    <td>{{ staff.type }}</td>
                    <td>{{ staff.num_tel }}</td>
                    
                    
                    <td>
                        <a href=\"{{ path('app_staff_show', {'id': staff.id}) }}\">Show</a>
                        <a href=\"{{ path('app_staff_edit', {'id': staff.id}) }}\">Edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\" class=\"no-records\">No records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_staff_new') }}\" class=\"create-new\">Create new</a>
    </div>
</body>
</html>

", "staff/index.html.twig", "C:\\Users\\nahla\\Pidev\\templates\\staff\\index.html.twig");
    }
}
