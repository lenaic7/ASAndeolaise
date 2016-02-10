<?php

/* ASAChampionnatBundle:Equipe:showListTeam.html.twig */
class __TwigTemplate_7917c1f9fb81f4ae2ff0bdbbcec0fe2db8704c5136d892f8bb6a6b550cb7780a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ASAChampionnatBundle::layout.html.twig", "ASAChampionnatBundle:Equipe:showListTeam.html.twig", 1);
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
        $__internal_4932aa2e2489e3b4eee9aaac1679ec34fda21973067f421ef6bb0be263f5220c = $this->env->getExtension("native_profiler");
        $__internal_4932aa2e2489e3b4eee9aaac1679ec34fda21973067f421ef6bb0be263f5220c->enter($__internal_4932aa2e2489e3b4eee9aaac1679ec34fda21973067f421ef6bb0be263f5220c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASAChampionnatBundle:Equipe:showListTeam.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4932aa2e2489e3b4eee9aaac1679ec34fda21973067f421ef6bb0be263f5220c->leave($__internal_4932aa2e2489e3b4eee9aaac1679ec34fda21973067f421ef6bb0be263f5220c_prof);

    }

    // line 2
    public function block_left($context, array $blocks = array())
    {
        $__internal_f858d2fba67d8a7fb65f0d45a84ac8f0e063234564579a6a454b17b032a3857c = $this->env->getExtension("native_profiler");
        $__internal_f858d2fba67d8a7fb65f0d45a84ac8f0e063234564579a6a454b17b032a3857c->enter($__internal_f858d2fba67d8a7fb65f0d45a84ac8f0e063234564579a6a454b17b032a3857c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/css/equipe.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
        <section id=\"right\">
            <div class=\"blockEquipe\">
                <span class=\"title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">Nos équipes Séniors</a></span>
                <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                    <div class=\"panel-body\">
                        <ul class=\"listeEquipe\">
                            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTeam"]) ? $context["listTeam"] : $this->getContext($context, "listTeam")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 12
            echo "                                <li class=\"team col-md-6\">
                                    <h3> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipe"], "nom", array()), "html", null, true);
            echo " - <span class=\"noBold\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipe"], "niveau", array()), "html", null, true);
            echo " </span> </h3>
                                    <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipe"], "photo", array()), "html", null, true);
            echo "\"/>
                                    <div class=\"resultats\">
                                        <span>Forme du moment : </span>
                                        ";
            // line 17
            if ( !twig_test_empty($this->getAttribute($context["equipe"], "matchs", array()))) {
                // line 18
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["equipe"], "matchs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                    // line 19
                    echo "                                                ";
                    if (($this->getAttribute($context["match"], "scoreASA", array()) > $this->getAttribute($context["match"], "scoreAdv", array()))) {
                        // line 20
                        echo "                                                    <span class=\"victoire\">V</span>
                                                ";
                    } else {
                        // line 22
                        echo "                                                    <span class=\"defaite\">D</span>
                                                ";
                    }
                    // line 24
                    echo "
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                                        ";
            } else {
                // line 27
                echo "                                            Aucun match joué
                                        ";
            }
            // line 29
            echo "                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
";
        
        $__internal_f858d2fba67d8a7fb65f0d45a84ac8f0e063234564579a6a454b17b032a3857c->leave($__internal_f858d2fba67d8a7fb65f0d45a84ac8f0e063234564579a6a454b17b032a3857c_prof);

    }

    public function getTemplateName()
    {
        return "ASAChampionnatBundle:Equipe:showListTeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  103 => 29,  99 => 27,  96 => 26,  89 => 24,  85 => 22,  81 => 20,  78 => 19,  73 => 18,  71 => 17,  65 => 14,  59 => 13,  56 => 12,  52 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'ASAChampionnatBundle::layout.html.twig' %}*/
/* {% block left %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/asachampionnat/css/equipe.css') }}" type="text/css" media="all" />*/
/*     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*         <section id="right">*/
/*             <div class="blockEquipe">*/
/*                 <span class="title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Nos équipes Séniors</a></span>*/
/*                 <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">*/
/*                     <div class="panel-body">*/
/*                         <ul class="listeEquipe">*/
/*                             {% for equipe in listTeam %}*/
/*                                 <li class="team col-md-6">*/
/*                                     <h3> {{ equipe.nom }} - <span class="noBold"> {{ equipe.niveau }} </span> </h3>*/
/*                                     <img src="{{ equipe.photo }}"/>*/
/*                                     <div class="resultats">*/
/*                                         <span>Forme du moment : </span>*/
/*                                         {% if equipe.matchs is not empty %}*/
/*                                             {% for match in equipe.matchs %}*/
/*                                                 {% if match.scoreASA > match.scoreAdv %}*/
/*                                                     <span class="victoire">V</span>*/
/*                                                 {% else %}*/
/*                                                     <span class="defaite">D</span>*/
/*                                                 {% endif %}*/
/* */
/*                                             {% endfor %}*/
/*                                         {% else %}*/
/*                                             Aucun match joué*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </li>*/
/*                             {% endfor %}*/
/* */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*     </div>*/
/* {% endblock %} */
