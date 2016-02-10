<?php

/* ASAChampionnatBundle:Default:rightNews.html.twig */
class __TwigTemplate_b6dc64d23ff8983b1d7fbe017d087b16b59daf77006ab6dc037a6832b62edd35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ae144587c0b6d7eac5dfc89fbce525fa9f881053a09d9ffe97762d974b56515 = $this->env->getExtension("native_profiler");
        $__internal_2ae144587c0b6d7eac5dfc89fbce525fa9f881053a09d9ffe97762d974b56515->enter($__internal_2ae144587c0b6d7eac5dfc89fbce525fa9f881053a09d9ffe97762d974b56515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASAChampionnatBundle:Default:rightNews.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('right', $context, $blocks);
        
        $__internal_2ae144587c0b6d7eac5dfc89fbce525fa9f881053a09d9ffe97762d974b56515->leave($__internal_2ae144587c0b6d7eac5dfc89fbce525fa9f881053a09d9ffe97762d974b56515_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92d1f50acc396d2c8c320ec3b98d9f7478515bb0b16ea28f3c4d04661416aa5f = $this->env->getExtension("native_profiler");
        $__internal_92d1f50acc396d2c8c320ec3b98d9f7478515bb0b16ea28f3c4d04661416aa5f->enter($__internal_92d1f50acc396d2c8c320ec3b98d9f7478515bb0b16ea28f3c4d04661416aa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/css/right.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_92d1f50acc396d2c8c320ec3b98d9f7478515bb0b16ea28f3c4d04661416aa5f->leave($__internal_92d1f50acc396d2c8c320ec3b98d9f7478515bb0b16ea28f3c4d04661416aa5f_prof);

    }

    // line 4
    public function block_right($context, array $blocks = array())
    {
        $__internal_7be13a86d2af17085c6ac2fa438b911fee50d457c44e34741e75064d8669f910 = $this->env->getExtension("native_profiler");
        $__internal_7be13a86d2af17085c6ac2fa438b911fee50d457c44e34741e75064d8669f910->enter($__internal_7be13a86d2af17085c6ac2fa438b911fee50d457c44e34741e75064d8669f910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 5
        echo "    <div>
        <!-- Nav tabs -->
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\"><a class=\"fa fa-calendar fa-2x\" href=\"#agenda\" aria-controls=\"agenda\" role=\"tab\" data-toggle=\"tab\"></a></li>
            <li role=\"presentation\"><a class=\"fa fa-dribbble fa-2x\" href=\"#resultat\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\"></a></li>
        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"agenda\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) ? $context["evenements"] : $this->getContext($context, "evenements")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 16
            echo "                    <span class=\"dateEv\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "date", array()), "d/m/y"), "html", null, true);
            echo "</span>
                    <span class=\"titreEv\"> : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "name", array()), "html", null, true);
            echo "</span>            
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"resultat\">Azerty2</div>
        </div>

    </div>
";
        
        $__internal_7be13a86d2af17085c6ac2fa438b911fee50d457c44e34741e75064d8669f910->leave($__internal_7be13a86d2af17085c6ac2fa438b911fee50d457c44e34741e75064d8669f910_prof);

    }

    public function getTemplateName()
    {
        return "ASAChampionnatBundle:Default:rightNews.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  76 => 17,  71 => 16,  67 => 15,  55 => 5,  49 => 4,  39 => 2,  33 => 1,  26 => 4,  24 => 1,);
    }
}
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/asachampionnat/css/right.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* {% block right %}*/
/*     <div>*/
/*         <!-- Nav tabs -->*/
/*         <ul class="nav nav-tabs" role="tablist">*/
/*             <li role="presentation" class="active"><a class="fa fa-calendar fa-2x" href="#agenda" aria-controls="agenda" role="tab" data-toggle="tab"></a></li>*/
/*             <li role="presentation"><a class="fa fa-dribbble fa-2x" href="#resultat" aria-controls="profile" role="tab" data-toggle="tab"></a></li>*/
/*         </ul>*/
/* */
/*         <!-- Tab panes -->*/
/*         <div class="tab-content">*/
/*             <div role="tabpanel" class="tab-pane active" id="agenda">*/
/*                 {% for evenement in evenements %}*/
/*                     <span class="dateEv">{{evenement.date|date( "d/m/y")}}</span>*/
/*                     <span class="titreEv"> : {{evenement.name}}</span>            */
/*                 {% endfor %}*/
/*             </div>*/
/*             <div role="tabpanel" class="tab-pane fade" id="resultat">Azerty2</div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
