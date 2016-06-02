<?php

/* bcGenMainBundle:Main:module_locusButton.html.twig */
class __TwigTemplate_180e37aa00b30296d340f0a9c0f51e89b9463f6ad67b6a251ca3b211b1b1135c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68cd88e0c3d5737ac98a6458e264722df1e871b0c1eba34b995e3cf33a47f649 = $this->env->getExtension("native_profiler");
        $__internal_68cd88e0c3d5737ac98a6458e264722df1e871b0c1eba34b995e3cf33a47f649->enter($__internal_68cd88e0c3d5737ac98a6458e264722df1e871b0c1eba34b995e3cf33a47f649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:module_locusButton.html.twig"));

        // line 2
        echo " ";
        // line 3
        echo " ";
        // line 5
        echo "
<div class=\"locusButton\">
\t";
        // line 7
        if ((((isset($context["detailed"]) ? $context["detailed"] : $this->getContext($context, "detailed")) == 1) &&  !twig_test_empty((isset($context["geneNum"]) ? $context["geneNum"] : $this->getContext($context, "geneNum"))))) {
            // line 8
            echo "\t<form action=\"";
            echo $this->env->getExtension('routing')->getPath("bc_gen_main_detailed_display");
            echo "\" method=\"POST\">
\t\t<input type=\"hidden\" name=\"geneNum\" value=";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["geneNum"]) ? $context["geneNum"] : $this->getContext($context, "geneNum")), "html", null, true);
            echo "> <input
\t\t\ttype=\"image\" src=";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bcgenmain/images/loop.jpe"), "html", null, true);
            echo "
\t\t\talt=\"Details\"> Details
\t</form>
\t";
        }
        // line 13
        echo " ";
        if (((((isset($context["neighborhood"]) ? $context["neighborhood"] : $this->getContext($context, "neighborhood")) == 1) &&  !twig_test_empty((isset($context["chromosomeId"]) ? $context["chromosomeId"] : $this->getContext($context, "chromosomeId")))) &&  !twig_test_empty($this->getAttribute(        // line 14
(isset($context["locus"]) ? $context["locus"] : $this->getContext($context, "locus")), "id", array())))) {
            // line 15
            echo "\t<form action=\"";
            echo $this->env->getExtension('routing')->getPath("bc_gen_main_neighborhood_display");
            echo "\"
\t\tmethod=\"GET\">
\t\t<input type=\"hidden\" name=\"chromosomeId\" value=";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["chromosomeId"]) ? $context["chromosomeId"] : $this->getContext($context, "chromosomeId")), "html", null, true);
            echo "> <input
\t\t\ttype=\"hidden\" name=\"locusId\" value=";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locus"]) ? $context["locus"] : $this->getContext($context, "locus")), "id", array()), "html", null, true);
            echo "> <input
\t\t\ttype=\"image\"
\t\t\tsrc=";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bcgenmain/images/chromosome.png"), "html", null, true);
            echo "
\t\t\talt=\"Neighborhood\"> Neighborhood
\t</form>
\t";
        }
        // line 24
        echo "</div>";
        
        $__internal_68cd88e0c3d5737ac98a6458e264722df1e871b0c1eba34b995e3cf33a47f649->leave($__internal_68cd88e0c3d5737ac98a6458e264722df1e871b0c1eba34b995e3cf33a47f649_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:module_locusButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  67 => 20,  62 => 18,  58 => 17,  52 => 15,  50 => 14,  48 => 13,  41 => 10,  37 => 9,  32 => 8,  30 => 7,  26 => 5,  24 => 3,  22 => 2,);
    }
}
/* {# Defining the following variables in the controller : detailed,*/
/* neighborhood #} {# Defining the following variables in the template that*/
/* includes this view or in the controller : geneNum, chromosomeId #} {# If*/
/* you use the template locus.html.twig, do not define geneNum #}*/
/* */
/* <div class="locusButton">*/
/* 	{% if detailed == 1 and geneNum is not empty %}*/
/* 	<form action="{{ path('bc_gen_main_detailed_display') }}" method="POST">*/
/* 		<input type="hidden" name="geneNum" value={{ geneNum }}> <input*/
/* 			type="image" src={{ asset('bundles/bcgenmain/images/loop.jpe') }}*/
/* 			alt="Details"> Details*/
/* 	</form>*/
/* 	{% endif %} {% if neighborhood == 1 and chromosomeId is not empty and*/
/* 	locus.id is not empty %}*/
/* 	<form action="{{ path('bc_gen_main_neighborhood_display') }}"*/
/* 		method="GET">*/
/* 		<input type="hidden" name="chromosomeId" value={{ chromosomeId }}> <input*/
/* 			type="hidden" name="locusId" value={{ locus.id }}> <input*/
/* 			type="image"*/
/* 			src={{ asset('bundles/bcgenmain/images/chromosome.png') }}*/
/* 			alt="Neighborhood"> Neighborhood*/
/* 	</form>*/
/* 	{% endif %}*/
/* </div>*/
