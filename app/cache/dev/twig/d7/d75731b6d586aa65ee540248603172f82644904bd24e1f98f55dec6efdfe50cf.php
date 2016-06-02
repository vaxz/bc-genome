<?php

/* bcGenMainBundle:Main:page_detailed.html.twig */
class __TwigTemplate_ec5518f6c229205e057169fdac434fd265b8f260452074f3065bf63af8dd5ae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bcGenMainBundle:Main:layout.html.twig", "bcGenMainBundle:Main:page_detailed.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'bcGenBundleBody' => array($this, 'block_bcGenBundleBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bcGenMainBundle:Main:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04aa3db23204a36b1357c5fadfb40b07cbacd255487e1aeeff476b01e9f02378 = $this->env->getExtension("native_profiler");
        $__internal_04aa3db23204a36b1357c5fadfb40b07cbacd255487e1aeeff476b01e9f02378->enter($__internal_04aa3db23204a36b1357c5fadfb40b07cbacd255487e1aeeff476b01e9f02378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:page_detailed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04aa3db23204a36b1357c5fadfb40b07cbacd255487e1aeeff476b01e9f02378->leave($__internal_04aa3db23204a36b1357c5fadfb40b07cbacd255487e1aeeff476b01e9f02378_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_dea47b422e9fce3dc5ce19816f4b4ef7a5d0d40cbafe0c092380a1c04892e54d = $this->env->getExtension("native_profiler");
        $__internal_dea47b422e9fce3dc5ce19816f4b4ef7a5d0d40cbafe0c092380a1c04892e54d->enter($__internal_dea47b422e9fce3dc5ce19816f4b4ef7a5d0d40cbafe0c092380a1c04892e54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "       ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Detailed display
";
        
        $__internal_dea47b422e9fce3dc5ce19816f4b4ef7a5d0d40cbafe0c092380a1c04892e54d->leave($__internal_dea47b422e9fce3dc5ce19816f4b4ef7a5d0d40cbafe0c092380a1c04892e54d_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_8a5ee4ff371c8c7bd4692434b117036a25b1cd474c2563dbd06d6eac0ae07701 = $this->env->getExtension("native_profiler");
        $__internal_8a5ee4ff371c8c7bd4692434b117036a25b1cd474c2563dbd06d6eac0ae07701->enter($__internal_8a5ee4ff371c8c7bd4692434b117036a25b1cd474c2563dbd06d6eac0ae07701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "      ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " <h2>Detailed display</h2>
";
        
        $__internal_8a5ee4ff371c8c7bd4692434b117036a25b1cd474c2563dbd06d6eac0ae07701->leave($__internal_8a5ee4ff371c8c7bd4692434b117036a25b1cd474c2563dbd06d6eac0ae07701_prof);

    }

    // line 12
    public function block_bcGenBundleBody($context, array $blocks = array())
    {
        $__internal_c3e9bea8fef8d7344116c7d4e0824579b8ddf75f786263cad0ecd3775099a6d4 = $this->env->getExtension("native_profiler");
        $__internal_c3e9bea8fef8d7344116c7d4e0824579b8ddf75f786263cad0ecd3775099a6d4->enter($__internal_c3e9bea8fef8d7344116c7d4e0824579b8ddf75f786263cad0ecd3775099a6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleBody"));

        // line 13
        echo "
     <p>Searched gene : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "accessionNum", array(), "array"), "html", null, true);
        echo "</p>

     ";
        // line 16
        if (twig_test_empty($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "chromosome", array(), "array"))) {
            // line 17
            echo "           ";
            $context["chromosomeId"] = 0;
            // line 18
            echo "     ";
        } else {
            // line 19
            echo "           ";
            $context["chromosomeId"] = $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "chromosome", array(), "array"), "id", array());
            // line 20
            echo "     ";
        }
        // line 21
        echo "     
     ";
        // line 22
        if (twig_test_empty($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "locus", array(), "array"))) {
            // line 23
            echo "           ";
            $context["locus"] = "";
            // line 24
            echo "     ";
        } else {
            // line 25
            echo "           ";
            $context["locus"] = $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "locus", array(), "array");
            // line 26
            echo "     ";
        }
        // line 27
        echo "     
     ";
        // line 28
        $context["onlyOneGene"] = $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "onlyOneGene", array(), "array");
        // line 29
        echo "     ";
        $this->loadTemplate("bcGenMainBundle:Main:module_locus.html.twig", "bcGenMainBundle:Main:page_detailed.html.twig", 29)->display($context);
        // line 30
        echo "
\t  <div class=\"category\">
\t\t <table>
\t\t\t <thead>
\t\t\t\t <tr>
\t\t\t\t\t <th style=\"width: 15%\">Gene accession number</th>
\t\t\t\t\t <th style=\"width: 10%\">Gene contig</th>
\t\t\t\t\t <th style=\"width: 75%\">Gene sequence</th>
\t\t\t\t </tr>
\t\t\t </thead>
\t\t\t <tbody>
\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "locus", array(), "array"), "locusGenes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gene"]) {
            // line 42
            echo "\t\t\t\t     ";
            $context["stringArray"] = twig_split_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "", 4);
            // line 43
            echo "\t\t\t\t     <tr>
\t\t\t\t\t      <td id=";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t      <td style=\"text-align: center\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneContig", array()), "html", null, true);
            echo "</td>
\t\t\t\t          <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneSeq", array()), "html", null, true);
            echo "</td>
\t\t\t\t     </tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gene'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t </tbody>
\t\t </table>
\t </div>
\t
\t <div class=\"category\">
\t\t <table>
\t\t\t <thead>
\t\t\t\t <tr>
\t\t\t\t\t <th style=\"width: 15%\">Gene accession number</th>
\t\t\t\t\t <th style=\"width: 90%\">Genome description</th>
\t\t\t\t </tr>
\t\t\t </thead>
\t\t\t <tbody>
\t\t\t\t ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "locus", array(), "array"), "locusGenes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gene"]) {
            // line 63
            echo "\t\t\t\t     ";
            $context["stringArray"] = twig_split_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "", 4);
            // line 64
            echo "\t\t\t\t     <tr>
\t\t\t\t\t     <td id=";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t     ";
            // line 66
            if ( !(null === $this->getAttribute($context["gene"], "geneGenome", array()))) {
                // line 67
                echo "\t\t\t\t\t           <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gene"], "geneGenome", array()), "genomeDesc", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t     ";
            } else {
                // line 69
                echo "\t\t\t\t\t           <td>No genome is linked to the gene</td>
\t\t\t\t\t     ";
            }
            // line 71
            echo "\t\t\t\t\t  </tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gene'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t </tbody>
\t\t </table>
\t </div>
\t
\t <div class=\"category\">
\t\t <table style=\"width: 100%\">
\t\t\t <thead>
\t\t\t\t <tr>
\t\t\t\t\t <th>Protein sequence</th>
\t\t\t\t </tr>
\t\t\t </thead>
\t\t </table>
\t
\t\t <div class=\"protSeq\">
\t\t     ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "locus", array(), "array"), "locusGenes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gene"]) {
            // line 88
            echo "\t\t          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["gene"], "geneProteins", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["protein"]) {
                // line 89
                echo "\t\t             >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["protein"], "proteinAccession", array()), "html", null, true);
                echo " ";
                echo nl2br("
");
                echo "
\t\t             ";
                // line 90
                $context["array"] = twig_split_filter($this->env, $this->getAttribute($context["protein"], "proteinSeq", array()), "", 60);
                // line 91
                echo "\t\t             ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["array"]) ? $context["array"] : $this->getContext($context, "array")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                    // line 92
                    echo "\t\t                 ";
                    echo twig_escape_filter($this->env, $context["l"], "html", null, true);
                    echo " ";
                    echo nl2br("
");
                    echo "
\t\t                 ";
                    // line 93
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        echo " ";
                        echo nl2br("
");
                        echo "
\t\t                 ";
                    }
                    // line 95
                    echo "\t\t             ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "\t\t           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['protein'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gene'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t </div>
\t </div>

";
        
        $__internal_c3e9bea8fef8d7344116c7d4e0824579b8ddf75f786263cad0ecd3775099a6d4->leave($__internal_c3e9bea8fef8d7344116c7d4e0824579b8ddf75f786263cad0ecd3775099a6d4_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:page_detailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 98,  302 => 97,  296 => 96,  282 => 95,  274 => 93,  266 => 92,  248 => 91,  246 => 90,  238 => 89,  233 => 88,  229 => 87,  213 => 73,  206 => 71,  202 => 69,  196 => 67,  194 => 66,  188 => 65,  185 => 64,  182 => 63,  178 => 62,  163 => 49,  154 => 46,  150 => 45,  144 => 44,  141 => 43,  138 => 42,  134 => 41,  121 => 30,  118 => 29,  116 => 28,  113 => 27,  110 => 26,  107 => 25,  104 => 24,  101 => 23,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  58 => 9,  52 => 8,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends "bcGenMainBundle:Main:layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*        {{ parent() }} - Detailed display*/
/* {% endblock %}*/
/*        */
/* {% block header %}*/
/*       {{ parent () }} <h2>Detailed display</h2>*/
/* {% endblock %}*/
/* */
/* {% block bcGenBundleBody %}*/
/* */
/*      <p>Searched gene : {{ result['accessionNum'] }}</p>*/
/* */
/*      {% if result['chromosome'] is empty %}*/
/*            {% set chromosomeId = 0 %}*/
/*      {%else %}*/
/*            {% set chromosomeId = result['chromosome'].id %}*/
/*      {% endif %}*/
/*      */
/*      {%if result['locus'] is empty %}*/
/*            {% set locus='' %}*/
/*      {% else %}*/
/*            {% set locus=result['locus'] %}*/
/*      {% endif %}*/
/*      */
/*      {% set onlyOneGene = result['onlyOneGene'] %}*/
/*      {% include('bcGenMainBundle:Main:module_locus.html.twig') %}*/
/* */
/* 	  <div class="category">*/
/* 		 <table>*/
/* 			 <thead>*/
/* 				 <tr>*/
/* 					 <th style="width: 15%">Gene accession number</th>*/
/* 					 <th style="width: 10%">Gene contig</th>*/
/* 					 <th style="width: 75%">Gene sequence</th>*/
/* 				 </tr>*/
/* 			 </thead>*/
/* 			 <tbody>*/
/* 				{% for gene in result['locus'].locusGenes %}*/
/* 				     {% set stringArray = gene.geneAccession|split('', 4) %}*/
/* 				     <tr>*/
/* 					      <td id={{ stringArray[0] }}>{{ gene.geneAccession }}</td>*/
/* 					      <td style="text-align: center">{{ gene.geneContig }}</td>*/
/* 				          <td>{{ gene.geneSeq }}</td>*/
/* 				     </tr>*/
/* 				{% endfor %}*/
/* 			 </tbody>*/
/* 		 </table>*/
/* 	 </div>*/
/* 	*/
/* 	 <div class="category">*/
/* 		 <table>*/
/* 			 <thead>*/
/* 				 <tr>*/
/* 					 <th style="width: 15%">Gene accession number</th>*/
/* 					 <th style="width: 90%">Genome description</th>*/
/* 				 </tr>*/
/* 			 </thead>*/
/* 			 <tbody>*/
/* 				 {% for gene in result['locus'].locusGenes %}*/
/* 				     {% set stringArray = gene.geneAccession|split('', 4) %}*/
/* 				     <tr>*/
/* 					     <td id={{ stringArray[0] }}>{{ gene.geneAccession }}</td>*/
/* 					     {%if gene.geneGenome is not null %}*/
/* 					           <td>{{ gene.geneGenome.genomeDesc }}</td>*/
/* 					     {% else %}*/
/* 					           <td>No genome is linked to the gene</td>*/
/* 					     {% endif %}*/
/* 					  </tr>*/
/* 				{% endfor %}*/
/* 			 </tbody>*/
/* 		 </table>*/
/* 	 </div>*/
/* 	*/
/* 	 <div class="category">*/
/* 		 <table style="width: 100%">*/
/* 			 <thead>*/
/* 				 <tr>*/
/* 					 <th>Protein sequence</th>*/
/* 				 </tr>*/
/* 			 </thead>*/
/* 		 </table>*/
/* 	*/
/* 		 <div class="protSeq">*/
/* 		     {% for gene in result['locus'].locusGenes %}*/
/* 		          {% for protein in gene.geneProteins %}*/
/* 		             >{{ protein.proteinAccession }} {{"\n"|nl2br }}*/
/* 		             {% set array = protein.proteinSeq|split('', 60) %}*/
/* 		             {% for l in array %}*/
/* 		                 {{ l }} {{ "\n"|nl2br }}*/
/* 		                 {% if loop.last %} {{"\n"|nl2br }}*/
/* 		                 {% endif %}*/
/* 		             {% endfor %}*/
/* 		           {% endfor %}*/
/* 		      {% endfor %}*/
/* 		 </div>*/
/* 	 </div>*/
/* */
/* {% endblock %}*/
/* */
