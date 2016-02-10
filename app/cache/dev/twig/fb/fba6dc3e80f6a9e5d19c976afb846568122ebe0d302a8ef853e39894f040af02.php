<?php

/* ASAChampionnatBundle:Default:footerSponsor.html.twig */
class __TwigTemplate_f257e1c5e3c2e08f6f8468a0fd0a606a90f13616bad62cb193999ee07bfd451e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_348c1b2fb2d6bf0ff4a707ff113b3e48964aba581848fcf0226cc2f5e2a5666b = $this->env->getExtension("native_profiler");
        $__internal_348c1b2fb2d6bf0ff4a707ff113b3e48964aba581848fcf0226cc2f5e2a5666b->enter($__internal_348c1b2fb2d6bf0ff4a707ff113b3e48964aba581848fcf0226cc2f5e2a5666b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ASAChampionnatBundle:Default:footerSponsor.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 4
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_348c1b2fb2d6bf0ff4a707ff113b3e48964aba581848fcf0226cc2f5e2a5666b->leave($__internal_348c1b2fb2d6bf0ff4a707ff113b3e48964aba581848fcf0226cc2f5e2a5666b_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ead38825faa260cfbf6074ab473c1bda70688d0926885258f0fc9e554a94c3cc = $this->env->getExtension("native_profiler");
        $__internal_ead38825faa260cfbf6074ab473c1bda70688d0926885258f0fc9e554a94c3cc->enter($__internal_ead38825faa260cfbf6074ab473c1bda70688d0926885258f0fc9e554a94c3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asachampionnat/js/jquery.flexisel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_ead38825faa260cfbf6074ab473c1bda70688d0926885258f0fc9e554a94c3cc->leave($__internal_ead38825faa260cfbf6074ab473c1bda70688d0926885258f0fc9e554a94c3cc_prof);

    }

    // line 4
    public function block_footer($context, array $blocks = array())
    {
        $__internal_794271e18401f0af38f10e646919dd89f076077bff33014402ce36bc5d99ee71 = $this->env->getExtension("native_profiler");
        $__internal_794271e18401f0af38f10e646919dd89f076077bff33014402ce36bc5d99ee71->enter($__internal_794271e18401f0af38f10e646919dd89f076077bff33014402ce36bc5d99ee71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 5
        echo "    <footer>     
        <ul id=\"flexiselDemo1\"> 
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sponsors"]) ? $context["sponsors"] : $this->getContext($context, "sponsors")));
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 8
            echo "                <li><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sponsor"], "logo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sponsor"], "name", array()), "html", null, true);
            echo "\"/></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                                                    
        </ul>
        <div class=\"clearout\"></div> 
    </footer>
";
        
        $__internal_794271e18401f0af38f10e646919dd89f076077bff33014402ce36bc5d99ee71->leave($__internal_794271e18401f0af38f10e646919dd89f076077bff33014402ce36bc5d99ee71_prof);

    }

    public function getTemplateName()
    {
        return "ASAChampionnatBundle:Default:footerSponsor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  63 => 8,  59 => 7,  55 => 5,  49 => 4,  39 => 2,  33 => 1,  26 => 4,  24 => 1,);
    }
}
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/asachampionnat/js/jquery.flexisel.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     <footer>     */
/*         <ul id="flexiselDemo1"> */
/*             {% for sponsor in sponsors %}*/
/*                 <li><img src="{{ sponsor.logo}}" alt="{{ sponsor.name }}"/></li>*/
/*                 {% endfor %}                                                    */
/*         </ul>*/
/*         <div class="clearout"></div> */
/*     </footer>*/
/* {% endblock %}*/
