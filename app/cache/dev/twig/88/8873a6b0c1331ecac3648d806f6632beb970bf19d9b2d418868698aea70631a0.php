<?php

/* ASAChampionnatBundle:Equipe:showTeam.html.twig */
class __TwigTemplate_7ae47182a41b46dd0d35dccb3bd0d63bcf2b9de705ee23fb501622b4fd8b613d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ASAChampionnatBundle::layout.html.twig", "ASAChampionnatBundle:Equipe:showTeam.html.twig", 1);
        $this->blocks = array(
            'left' => array($this, 'block_left'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ASAChampionnatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50f9bfd501f9ac94f6fb71243e88f19eb50b95725b445278694118783cf1148c = $this->env->getExtension("native_profiler");
        $__internal_50f9bfd501f9ac94f6fb71243e88f19eb50b95725b445278694118783cf1148c->enter($__internal_50f9bfd501f9ac94f6fb71243e88f19eb50b95725b445278694118783cf1148c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASAChampionnatBundle:Equipe:showTeam.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50f9bfd501f9ac94f6fb71243e88f19eb50b95725b445278694118783cf1148c->leave($__internal_50f9bfd501f9ac94f6fb71243e88f19eb50b95725b445278694118783cf1148c_prof);

    }

    // line 2
    public function block_left($context, array $blocks = array())
    {
        $__internal_feaf4d6c031489ccfe67f54e753c3d0cb354c5079e1e1ad869c5747b3f954031 = $this->env->getExtension("native_profiler");
        $__internal_feaf4d6c031489ccfe67f54e753c3d0cb354c5079e1e1ad869c5747b3f954031->enter($__internal_feaf4d6c031489ccfe67f54e753c3d0cb354c5079e1e1ad869c5747b3f954031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/css/equipe.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <div class=\"page-header\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infoTeam"]) ? $context["infoTeam"] : $this->getContext($context, "infoTeam")), "nom", array()), "html", null, true);
        echo " - <small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infoTeam"]) ? $context["infoTeam"] : $this->getContext($context, "infoTeam")), "niveau", array()), "html", null, true);
        echo "</small></h1>
    </div>
    <div>
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infoTeam"]) ? $context["infoTeam"] : $this->getContext($context, "infoTeam")), "photo", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infoTeam"]) ? $context["infoTeam"] : $this->getContext($context, "infoTeam")), "nom", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infoTeam"]) ? $context["infoTeam"] : $this->getContext($context, "infoTeam")), "nom", array()), "html", null, true);
        echo "\"/>      
    </div>
    <table class=\"table table-striped\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchsTeam"]) ? $context["matchsTeam"] : $this->getContext($context, "matchsTeam")));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 12
            echo "            ";
            if (($this->getAttribute($context["match"], "scoreASA", array()) > $this->getAttribute($context["match"], "scoreAdv", array()))) {
                // line 13
                echo "                ";
                $context["resultat"] = "victoire";
                // line 14
                echo "            ";
            } else {
                // line 15
                echo "               ";
                $context["resultat"] = "defaite";
                // line 16
                echo "            ";
            }
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                ";
            // line 19
            if (($this->getAttribute($context["match"], "isHome", array()) == true)) {
                // line 20
                echo "                    <td> <span class=\"color-red\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "equipe", array()), "nom", array()), "html", null, true);
                echo " </span> </td>
                    <td> <span class=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["resultat"]) ? $context["resultat"] : $this->getContext($context, "resultat")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "scoreAsa", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "scoreAdv", array()), "html", null, true);
                echo "</span> </td>
                    <td> ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "nomAdv", array()), "html", null, true);
                echo " </td>
                ";
            } else {
                // line 24
                echo "                    <td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "nomAdv", array()), "html", null, true);
                echo " </td>                  
                    <td>  <span class=\"";
                // line 25
                echo twig_escape_filter($this->env, (isset($context["resultat"]) ? $context["resultat"] : $this->getContext($context, "resultat")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "scoreAdv", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "scoreAsa", array()), "html", null, true);
                echo "</span> </td>
                    <td><span class=\"color-red\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "equipe", array()), "nom", array()), "html", null, true);
                echo " </span></td>
                ";
            }
            // line 28
            echo "            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </table>

";
        
        $__internal_feaf4d6c031489ccfe67f54e753c3d0cb354c5079e1e1ad869c5747b3f954031->leave($__internal_feaf4d6c031489ccfe67f54e753c3d0cb354c5079e1e1ad869c5747b3f954031_prof);

    }

    public function getTemplateName()
    {
        return "ASAChampionnatBundle:Equipe:showTeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 31,  128 => 28,  123 => 26,  115 => 25,  110 => 24,  105 => 22,  97 => 21,  92 => 20,  90 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  64 => 11,  54 => 8,  46 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'ASAChampionnatBundle::layout.html.twig' %}*/
/* {% block left %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/asachampionnat/css/equipe.css') }}" type="text/css" media="all" />*/
/*     <div class="page-header">*/
/*         <h1>{{ infoTeam.nom }} - <small>{{infoTeam.niveau }}</small></h1>*/
/*     </div>*/
/*     <div>*/
/*         <img src="{{ infoTeam.photo}}" alt="{{ infoTeam.nom }}" title="{{ infoTeam.nom }}"/>      */
/*     </div>*/
/*     <table class="table table-striped">*/
/*         {% for match in matchsTeam %}*/
/*             {% if match.scoreASA > match.scoreAdv %}*/
/*                 {% set resultat = "victoire" %}*/
/*             {% else %}*/
/*                {% set resultat = "defaite" %}*/
/*             {% endif %}*/
/*             <tr>*/
/*                 <td>{{ match.date|date("d/m/Y") }}</td>*/
/*                 {% if match.isHome == true %}*/
/*                     <td> <span class="color-red">{{ match.equipe.nom }} </span> </td>*/
/*                     <td> <span class="{{ resultat }}">{{ match.scoreAsa }} - {{ match.scoreAdv }}</span> </td>*/
/*                     <td> {{ match.nomAdv }} </td>*/
/*                 {% else %}*/
/*                     <td> {{ match.nomAdv }} </td>                  */
/*                     <td>  <span class="{{ resultat }}">{{ match.scoreAdv }} - {{ match.scoreAsa }}</span> </td>*/
/*                     <td><span class="color-red">{{ match.equipe.nom }} </span></td>*/
/*                 {% endif %}*/
/*             </tr>*/
/* */
/*         {% endfor %}*/
/*     </table>*/
/* */
/* {% endblock %}*/
