<?php

/* bcGenMainBundle:Main:locusButton.html.twig */
class __TwigTemplate_c948df2cf0cedb611964d1e6bf4f828e2d39fc04ee5fd00f35cef3c823f3a4c9 extends Twig_Template
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
        $__internal_a84780ea3e8cbdeba5bc7fbe9fb7d4d1487a4b0c859ff49e24ae32a5b77a19b6 = $this->env->getExtension("native_profiler");
        $__internal_a84780ea3e8cbdeba5bc7fbe9fb7d4d1487a4b0c859ff49e24ae32a5b77a19b6->enter($__internal_a84780ea3e8cbdeba5bc7fbe9fb7d4d1487a4b0c859ff49e24ae32a5b77a19b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:locusButton.html.twig"));

        // line 4
        echo "
<div class=\"locusButton\">
\t";
        // line 6
        if ((((isset($context["detailed"]) ? $context["detailed"] : $this->getContext($context, "detailed")) == 1) &&  !twig_test_empty((isset($context["geneNum"]) ? $context["geneNum"] : $this->getContext($context, "geneNum"))))) {
            // line 7
            echo "\t    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("bc_gen_main_detailed_display");
            echo "\" method=\"POST\" >
\t        <input type=\"hidden\" name=\"geneNum\" value=";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["geneNum"]) ? $context["geneNum"] : $this->getContext($context, "geneNum")), "html", null, true);
            echo ">
\t        <input type=\"image\" src=";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bcgenmain/images/loop.jpe"), "html", null, true);
            echo " alt=\"Details\"> Details
\t    </form>
\t";
        }
        // line 12
        echo "\t
\t";
        // line 13
        if (((((isset($context["neighborhood"]) ? $context["neighborhood"] : $this->getContext($context, "neighborhood")) == 1) &&  !twig_test_empty((isset($context["chromosomeId"]) ? $context["chromosomeId"] : $this->getContext($context, "chromosomeId")))) &&  !twig_test_empty($this->getAttribute((isset($context["locus"]) ? $context["locus"] : $this->getContext($context, "locus")), "id", array())))) {
            // line 14
            echo "\t    <form action=\"";
            echo $this->env->getExtension('routing')->getPath("bc_gen_main_neighborhood_display");
            echo "\" method=\"GET\" >
\t        <input type=\"hidden\" name=\"chromosomeId\" value=";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["chromosomeId"]) ? $context["chromosomeId"] : $this->getContext($context, "chromosomeId")), "html", null, true);
            echo ">
\t        <input type=\"hidden\" name=\"locusId\" value=";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locus"]) ? $context["locus"] : $this->getContext($context, "locus")), "id", array()), "html", null, true);
            echo ">
\t        <input type=\"image\" src=";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bcgenmain/images/chromosome.png"), "html", null, true);
            echo " alt=\"Neighborhood\"> Neighborhood 
\t    </form>
\t";
        }
        // line 20
        echo "</div>";
        
        $__internal_a84780ea3e8cbdeba5bc7fbe9fb7d4d1487a4b0c859ff49e24ae32a5b77a19b6->leave($__internal_a84780ea3e8cbdeba5bc7fbe9fb7d4d1487a4b0c859ff49e24ae32a5b77a19b6_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:locusButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  61 => 17,  57 => 16,  53 => 15,  48 => 14,  46 => 13,  43 => 12,  37 => 9,  33 => 8,  28 => 7,  26 => 6,  22 => 4,);
    }
}
