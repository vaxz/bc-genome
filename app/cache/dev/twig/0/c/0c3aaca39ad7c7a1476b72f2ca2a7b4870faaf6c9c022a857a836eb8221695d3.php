<?php

/* bcGenMainBundle:Main:detailedDisplay.html.twig */
class __TwigTemplate_0c3aaca39ad7c7a1476b72f2ca2a7b4870faaf6c9c022a857a836eb8221695d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bcGenMainBundle:Main:layout.html.twig", "bcGenMainBundle:Main:detailedDisplay.html.twig", 1);
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
        $__internal_479a4dcf0156ba7dfc593135b40c0494f87906c4df49856a47117c9ec8e221ae = $this->env->getExtension("native_profiler");
        $__internal_479a4dcf0156ba7dfc593135b40c0494f87906c4df49856a47117c9ec8e221ae->enter($__internal_479a4dcf0156ba7dfc593135b40c0494f87906c4df49856a47117c9ec8e221ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:detailedDisplay.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_479a4dcf0156ba7dfc593135b40c0494f87906c4df49856a47117c9ec8e221ae->leave($__internal_479a4dcf0156ba7dfc593135b40c0494f87906c4df49856a47117c9ec8e221ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_525537708626111f228e3003009bc148e0ca73e29da0e08e889b327366c44349 = $this->env->getExtension("native_profiler");
        $__internal_525537708626111f228e3003009bc148e0ca73e29da0e08e889b327366c44349->enter($__internal_525537708626111f228e3003009bc148e0ca73e29da0e08e889b327366c44349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Detailed display
";
        
        $__internal_525537708626111f228e3003009bc148e0ca73e29da0e08e889b327366c44349->leave($__internal_525537708626111f228e3003009bc148e0ca73e29da0e08e889b327366c44349_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_f0efa52a8990a1b606fb04c87eb42706d7871d1b48d82600d84216087bf55892 = $this->env->getExtension("native_profiler");
        $__internal_f0efa52a8990a1b606fb04c87eb42706d7871d1b48d82600d84216087bf55892->enter($__internal_f0efa52a8990a1b606fb04c87eb42706d7871d1b48d82600d84216087bf55892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "     ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
     <h2>Detailed display</h2>
";
        
        $__internal_f0efa52a8990a1b606fb04c87eb42706d7871d1b48d82600d84216087bf55892->leave($__internal_f0efa52a8990a1b606fb04c87eb42706d7871d1b48d82600d84216087bf55892_prof);

    }

    // line 12
    public function block_bcGenBundleBody($context, array $blocks = array())
    {
        $__internal_08465351da0a5d2fda00f2414adb7ba9d4da652e3ca0744637907379baca1db5 = $this->env->getExtension("native_profiler");
        $__internal_08465351da0a5d2fda00f2414adb7ba9d4da652e3ca0744637907379baca1db5->enter($__internal_08465351da0a5d2fda00f2414adb7ba9d4da652e3ca0744637907379baca1db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleBody"));

        // line 13
        echo "    
    <p> Searched gene : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "accessionNum", array(), "array"), "html", null, true);
        echo " </p>    
    
    ";
        // line 16
        if (twig_test_empty($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "chromosome", array(), "array"))) {
            echo " ";
            $context["chromosomeId"] = 0;
            // line 17
            echo "    ";
        } else {
            echo " ";
            $context["chromosomeId"] = $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "chromosome", array(), "array"), "id", array());
            // line 18
            echo "    ";
        }
        // line 19
        echo "    
    ";
        // line 20
        if (twig_test_empty($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "locus", array(), "array"))) {
            echo " ";
            $context["locus"] = "";
            // line 21
            echo "    ";
        } else {
            echo " ";
            $context["locus"] = $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "locus", array(), "array");
            // line 22
            echo "    ";
        }
        // line 23
        echo "    
    ";
        // line 24
        $context["onlyOneGene"] = $this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "onlyOneGene", array(), "array");
        // line 25
        echo "    
    ";
        // line 26
        $this->loadTemplate("bcGenMainBundle:Main:locus.html.twig", "bcGenMainBundle:Main:detailedDisplay.html.twig", 26)->display($context);
        // line 27
        echo "        
    <div class=\"category\">
       <table>
       <thead><tr>
           <th style=\"width:15%\">Gene accession number</th><th style=\"width:10%\">Gene contig</th>
           <th style=\"width:75%\">Gene sequence</th>
       </tr></thead>
       <tbody>
       ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "locus", array(), "array"), "locusGenes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gene"]) {
            // line 36
            echo "           ";
            $context["stringArray"] = twig_split_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "", 4);
            // line 37
            echo "           <tr>
              <td id=";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "html", null, true);
            echo "</td>
              <td style=\"text-align:center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneContig", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneSeq", array()), "html", null, true);
            echo "</td>
           </tr>              
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gene'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "       </tbody></table>
    </div>
   
    <div class=\"category\">
       <table>
       <thead><tr>
           <th style=\"width:15%\">Gene accession number</th><th style=\"width:90%\">Genome description</th>
       </tr></thead>
       <tbody>
       ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "locus", array(), "array"), "locusGenes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gene"]) {
            // line 53
            echo "           ";
            $context["stringArray"] = twig_split_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "", 4);
            // line 54
            echo "           <tr>
              <td id=";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "html", null, true);
            echo "</td>
              ";
            // line 56
            if ( !(null === $this->getAttribute($context["gene"], "geneGenome", array()))) {
                echo " 
                    <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gene"], "geneGenome", array()), "genomeDesc", array()), "html", null, true);
                echo "</td>
              ";
            } else {
                // line 59
                echo "                    <td> No genome is linked to the gene </td>
              ";
            }
            // line 60
            echo "  
           </tr>              
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gene'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "       </tbody></table>
    </div>
   
     <div class=\"category\">
\t       <table style=\"width:100%\"><thead><tr>
\t           <th>Protein sequence</th>
\t       </tr></thead></table>
\t                  
\t       <div class=\"protSeq\">
\t       ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "locus", array(), "array"), "locusGenes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gene"]) {
            // line 73
            echo "\t          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["gene"], "geneProteins", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["protein"]) {
                // line 74
                echo "\t             >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["protein"], "proteinAccession", array()), "html", null, true);
                echo " ";
                echo nl2br("
");
                echo "
\t             ";
                // line 75
                $context["array"] = twig_split_filter($this->env, $this->getAttribute($context["protein"], "proteinSeq", array()), "", 60);
                // line 76
                echo "\t             ";
                $context['_parent'] = (array) $context;
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
                    // line 77
                    echo "\t                 ";
                    echo twig_escape_filter($this->env, $context["l"], "html", null, true);
                    echo " ";
                    echo nl2br("
");
                    echo "
\t                 ";
                    // line 78
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        echo " ";
                        echo nl2br("
");
                        echo " ";
                    }
                    // line 79
                    echo "\t             ";
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
                // line 80
                echo "\t           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['protein'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "             
\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gene'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t       </div> 
    </div>

";
        
        $__internal_08465351da0a5d2fda00f2414adb7ba9d4da652e3ca0744637907379baca1db5->leave($__internal_08465351da0a5d2fda00f2414adb7ba9d4da652e3ca0744637907379baca1db5_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:detailedDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 82,  284 => 80,  270 => 79,  263 => 78,  255 => 77,  237 => 76,  235 => 75,  227 => 74,  222 => 73,  218 => 72,  207 => 63,  199 => 60,  195 => 59,  190 => 57,  186 => 56,  180 => 55,  177 => 54,  174 => 53,  170 => 52,  159 => 43,  150 => 40,  146 => 39,  140 => 38,  137 => 37,  134 => 36,  130 => 35,  120 => 27,  118 => 26,  115 => 25,  113 => 24,  110 => 23,  107 => 22,  102 => 21,  98 => 20,  95 => 19,  92 => 18,  87 => 17,  83 => 16,  78 => 14,  75 => 13,  69 => 12,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
