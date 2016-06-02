<?php

/* bcGenMainBundle:Main:module_locus.html.twig */
class __TwigTemplate_610c008179e4f8add1e35203fc2fd67d2cee1adee271b11f37785101f9645c29 extends Twig_Template
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
        $__internal_f41691b39208b2092011b57814131fb324c641121aa98cae5ff7445d0470d621 = $this->env->getExtension("native_profiler");
        $__internal_f41691b39208b2092011b57814131fb324c641121aa98cae5ff7445d0470d621->enter($__internal_f41691b39208b2092011b57814131fb324c641121aa98cae5ff7445d0470d621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:module_locus.html.twig"));

        // line 1
        echo " ";
        // line 2
        echo " ";
        // line 3
        echo "
<h3 class=\"title\">";
        // line 4
        if (twig_test_empty((isset($context["chromosomeId"]) ? $context["chromosomeId"] : $this->getContext($context, "chromosomeId")))) {
            echo " No chromosome found ";
        } else {
            // line 5
            echo " Chromosome number: ";
            echo twig_escape_filter($this->env, (isset($context["chromosomeId"]) ? $context["chromosomeId"] : $this->getContext($context, "chromosomeId")), "html", null, true);
            echo " ";
        }
        echo " ";
        // line 6
        echo " ";
        if (twig_test_empty((isset($context["locus"]) ? $context["locus"] : $this->getContext($context, "locus")))) {
            // line 7
            echo " No Locus found ";
        } else {
            echo " Locus number : ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["locus"]) ? $context["locus"] : $this->getContext($context, "locus")), "id", array()) % 10000), "html", null, true);
            echo "
\t";
        }
        // line 8
        echo " ";
        // line 9
        echo "</h3>

<div class=\"locus\">
\t<div class=\"locusTable\">
\t\t";
        // line 13
        $context["geneNum"] = "";
        echo " ";
        $context["tmpName"] = "";
        echo " ";
        $context["minKey"] = 0;
        echo " ";
        // line 14
        $context["maxKey"] = 0;
        echo " ";
        $context["nameArray"] = array(0 => "Bcin", 1 => "B051", 2 => "BC1G", 3 => "BcT4");
        // line 15
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["locus"]) ? $context["locus"] : $this->getContext($context, "locus")), "locusGenes", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["gene"]) {
            echo " ";
            $context["stringArray"] = twig_split_filter($this->env, $this->getAttribute(            // line 16
$context["gene"], "geneAccession", array()), "", 4);
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nameArray"]) ? $context["nameArray"] : $this->getContext($context, "nameArray")));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                if ((                // line 17
$context["name"] == $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array"))) {
                    echo " ";
                    $context["maxKey"] = $context["key"];
                    echo " ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(            // line 18
(isset($context["nameArray"]) ? $context["nameArray"] : $this->getContext($context, "nameArray")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                echo " ";
                if ((((isset($context["minKey"]) ? $context["minKey"] : $this->getContext($context, "minKey")) < $context["key"]) && ($context["key"] <= (isset($context["maxKey"]) ? $context["maxKey"] : $this->getContext($context, "maxKey"))))) {
                    // line 19
                    echo "\t\t<table>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t";
                }
                // line 26
                echo " ";
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo " ";
                    $context["minKey"] = ((isset($context["maxKey"]) ? $context["maxKey"] : $this->getContext($context, "maxKey")) + 1);
                    echo " ";
                }
                // line 27
                echo " ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " ";
                $context["tmpName"] = $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array");
                // line 28
                echo "\t\t<table id=";
                echo twig_escape_filter($this->env, (isset($context["tmpName"]) ? $context["tmpName"] : $this->getContext($context, "tmpName")), "html", null, true);
                echo ">
\t\t\t<tbody>";
            }
            // line 29
            echo " ";
            if (((isset($context["tmpName"]) ? $context["tmpName"] : $this->getContext($context, "tmpName")) != $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array"))) {
                // line 30
                echo "\t\t\t</tbody>
\t\t</table>
\t\t";
                // line 32
                $context["tmpName"] = $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array");
                // line 33
                echo "\t\t<table id=";
                echo twig_escape_filter($this->env, (isset($context["tmpName"]) ? $context["tmpName"] : $this->getContext($context, "tmpName")), "html", null, true);
                echo ">
\t\t\t<tbody>
\t\t\t\t";
            }
            // line 35
            echo " ";
            if (($this->getAttribute($context["gene"], "geneRef", array()) == 1)) {
                echo " ";
                // line 37
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a
\t\t\t\t\t\thref=\"http://fungi.ensembl.org/Botrytis_cinerea/Gene/Summary?g=";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(                // line 40
$context["gene"], "geneAccession", array()), "html", null, true);
                echo " </a></td>
\t\t\t\t</tr>
\t\t\t\t";
            } else {
                // line 43
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 46
            echo " ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 47
                echo "\t\t\t</tbody>
\t\t</table>
\t\t";
                // line 49
                $context["geneNum"] = $this->getAttribute($context["gene"], "geneAccession", array());
                echo " ";
            }
            echo " ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            echo " ";
            // line 51
            echo " ";
            echo " ";
            $context["tmpArray"] = twig_split_filter($this->env, $this->getAttribute(            // line 52
(isset($context["onlyOneGene"]) ? $context["onlyOneGene"] : $this->getContext($context, "onlyOneGene")), "geneAccession", array()), "", 4);
            // line 53
            echo "\t\t<table id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tmpArray"]) ? $context["tmpArray"] : $this->getContext($context, "tmpArray")), 0, array(), "array"), "html", null, true);
            echo ">
\t\t\t<tbody>

\t\t\t\t";
            // line 56
            if (($this->getAttribute((isset($context["onlyOneGene"]) ? $context["onlyOneGene"] : $this->getContext($context, "onlyOneGene")), "geneRef", array()) == 1)) {
                echo " ";
                // line 58
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a
\t\t\t\t\t\thref=\"http://fungi.ensembl.org/Botrytis_cinerea/Gene/Summary?g=";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["onlyOneGene"]) ? $context["onlyOneGene"] : $this->getContext($context, "onlyOneGene")), "geneAccession", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(                // line 61
(isset($context["onlyOneGene"]) ? $context["onlyOneGene"] : $this->getContext($context, "onlyOneGene")), "geneAccession", array()), "html", null, true);
                echo " </a></td>
\t\t\t\t</tr>
\t\t\t\t";
            } else {
                // line 64
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["onlyOneGene"]) ? $context["onlyOneGene"] : $this->getContext($context, "onlyOneGene")), "geneAccession", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 68
            echo "
\t\t\t</tbody>
\t\t</table>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gene'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t</div>
\t";
        // line 73
        $this->loadTemplate("bcGenMainBundle:Main:module_locusButton.html.twig", "bcGenMainBundle:Main:module_locus.html.twig", 73)->display($context);
        // line 74
        echo "</div>";
        
        $__internal_f41691b39208b2092011b57814131fb324c641121aa98cae5ff7445d0470d621->leave($__internal_f41691b39208b2092011b57814131fb324c641121aa98cae5ff7445d0470d621_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:module_locus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 74,  281 => 73,  278 => 72,  269 => 68,  263 => 65,  260 => 64,  254 => 61,  251 => 60,  247 => 58,  244 => 56,  237 => 53,  235 => 52,  232 => 51,  215 => 49,  211 => 47,  208 => 46,  202 => 44,  199 => 43,  193 => 40,  190 => 39,  186 => 37,  182 => 35,  175 => 33,  173 => 32,  169 => 30,  166 => 29,  160 => 28,  142 => 27,  135 => 26,  125 => 19,  107 => 18,  95 => 17,  89 => 16,  69 => 15,  65 => 14,  58 => 13,  52 => 9,  50 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/*  {# Defining the following variables in the template that includes this*/
/* view #} {# chromosomeId, locus, onlyOneGene #}*/
/* */
/* <h3 class="title">{% if chromosomeId is empty %} No chromosome found {%*/
/* 	else %} Chromosome number: {{ chromosomeId }} {% endif %} {# The locus*/
/* 	number must be modified as follows, see class Gene #} {% if locus is*/
/* 	empty %} No Locus found {% else %} Locus number : {{ locus.id%10000 }}*/
/* 	{% endif %} {# Locus details : {{ locus.locusDesc }}, Gene name : {{*/
/* 	locus.geneName }} #}</h3>*/
/* */
/* <div class="locus">*/
/* 	<div class="locusTable">*/
/* 		{% set geneNum = '' %} {% set tmpName = '' %} {% set minKey = 0 %} {%*/
/* 		set maxKey = 0 %} {% set nameArray = ['Bcin','B051','BC1G','BcT4'] %}*/
/* 		{% for gene in locus.locusGenes %} {% set stringArray =*/
/* 		gene.geneAccession|split('', 4) %} {% for key, name in nameArray if*/
/* 		name == stringArray[0] %} {% set maxKey = key %} {% endfor %} {% for*/
/* 		key, name in nameArray %} {% if minKey < key and key <= maxKey %}*/
/* 		<table>*/
/* 			<tbody>*/
/* 				<tr>*/
/* 					<td></td>*/
/* 				</tr>*/
/* 			</tbody>*/
/* 		</table>*/
/* 		{% endif %} {% if loop.last %} {% set minKey = maxKey + 1 %} {% endif*/
/* 		%} {% endfor %} {% if loop.first %} {% set tmpName = stringArray[0] %}*/
/* 		<table id={{ tmpName }}>*/
/* 			<tbody>{% endif %} {% if tmpName != stringArray[0] %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 		{% set tmpName = stringArray[0] %}*/
/* 		<table id={{ tmpName }}>*/
/* 			<tbody>*/
/* 				{% endif %} {% if gene.geneRef == 1 %} {# Do not split the URL on 2*/
/* 				lines otherwise the link will not work #}*/
/* 				<tr>*/
/* 					<td><a*/
/* 						href="http://fungi.ensembl.org/Botrytis_cinerea/Gene/Summary?g={{ gene.geneAccession }}">{{*/
/* 							gene.geneAccession }} </a></td>*/
/* 				</tr>*/
/* 				{% else %}*/
/* 				<tr>*/
/* 					<td>{{ gene.geneAccession }}</td>*/
/* 				</tr>*/
/* 				{% endif %} {% if loop.last %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 		{% set geneNum = gene.geneAccession %} {% endif %} {% else %} {# In*/
/* 		the controller, the method detailedDisplayAction can lead to find only*/
/* 		one gene #} {# This case is handled with this part #} {% set tmpArray*/
/* 		= onlyOneGene.geneAccession|split('', 4) %}*/
/* 		<table id={{ tmpArray[0] }}>*/
/* 			<tbody>*/
/* */
/* 				{% if onlyOneGene.geneRef == 1 %} {# Do not split the next URL on 2*/
/* 				lines otherwise the link will not work #}*/
/* 				<tr>*/
/* 					<td><a*/
/* 						href="http://fungi.ensembl.org/Botrytis_cinerea/Gene/Summary?g={{ onlyOneGene.geneAccession }}">{{*/
/* 							onlyOneGene.geneAccession }} </a></td>*/
/* 				</tr>*/
/* 				{% else %}*/
/* 				<tr>*/
/* 					<td>{{ onlyOneGene.geneAccession }}</td>*/
/* 				</tr>*/
/* 				{% endif %}*/
/* */
/* 			</tbody>*/
/* 		</table>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* 	{% include( 'bcGenMainBundle:Main:module_locusButton.html.twig' ) %}*/
/* </div>*/
